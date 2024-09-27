<?php

namespace App\Livewire\Client;

use Carbon\Carbon;
use App\Models\Plan;
use Livewire\Component;
use App\Models\Instance;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use App\Models\Subscription;
use Livewire\WithPagination;
use App\Models\DolibarrCredential;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Notifications\InstanceCreated;
use Illuminate\Support\Facades\Notification;
use App\Services\InstanceProvisioningService;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CreateInstances extends Component
{
    use WithPagination, LivewireAlert, AuthorizesRequests;

    public $newInstanceInfo = null;
    public $name = '';
    public $entreprise;
    public $showPlanSelection = false;

    public function mount()
    {
        $this->checkInstanceCreationEligibility();
    }

    public function checkInstanceCreationEligibility()
    {
        $user = Auth::user();
        $this->showPlanSelection = !$user->canCreateInstance();
    }

    public function openPlanSelection()
    {
        $this->showPlanSelection = true;
    }

   #[On('planChanged')]
    public function planChanged()
    {
        $this->checkInstanceCreationEligibility();
    }
    protected function rules()
    {
        return [
            'name' => ['required', 'unique:instances,name', 'min:3', 'max:15'],
            'entreprise' => 'required',
        ];
    }

    protected $messages = [
        'name.required' => 'Le nom de l\'instance est obligatoire.',
        'name.unique' => 'Ce nom d\'instance est déjà utilisé.',
        'name.min' => 'Le nom de l\'instance doit contenir au moins 3 caractères.',
        'name.max' => 'Le nom de l\'instance ne peut pas dépasser 15 caractères.',
        'entreprise.required' => 'Choix de l\'entreprise est obligatoire.',
    ];

    public function store()
    {
        $this->dispatch('instanceCreationStarted');

        $this->validate();

        $user = Auth::user();

        if (!$user->canCreateInstance()) {
            $this->alert('error', 'Vous avez atteint votre limite de création d\'instances. Veuillez mettre à niveau votre abonnement pour créer plus d\'instances.');
            return;
        }

        $reference = Instance::generateNextReference();
        $password_dolibarr = Str::random(16);
        $login_dolibarr = $this->generateRandomLogin($this->name);
        $url_suffix = Str::slug($this->name);

        $provisioningService = new InstanceProvisioningService();

        $instanceDetails = $provisioningService->provisionInstance(
            $this->name,
            $password_dolibarr,
            $login_dolibarr,
            $url_suffix);

        if (!$instanceDetails) {
            $this->alert('error', 'Une erreur est survenue lors de la création de l\'instance.');
            return;
        }

        try {
            $activeSubscription = $user->activeSubscription();
            if (!$activeSubscription) {
                // Si l'utilisateur n'a pas d'abonnement actif, créez-en un avec le plan gratuit par défaut
                $freePlan = Plan::where('is_free', true)->where('is_default', true)->first();
                $activeSubscription = Subscription::create([
                    'user_id' => $user->id,
                    'plan_id' => $freePlan->id,
                    'start_date' => now(),
                    'end_date' => now()->addDays($freePlan->duration_days),
                    'status' => 'active'
                ]);
            }

            $instance = Instance::create([
                'user_id' => $user->id,
                'subscription_id' => $activeSubscription->id,
                'reference' => $reference,
                'name' => $this->name,
                'entreprise' => $this->entreprise,
                'url' => $instanceDetails['url'],
                'status' => Instance::STATUS_ACTIVE,
                'auth_token' => Instance::generateUniqueAuthToken(),
                'dolibarr_username' => $login_dolibarr,
                'dolibarr_password' => Hash::make($password_dolibarr),
            ]);

            $this->createDolibarrCredential($user, $login_dolibarr, $password_dolibarr);

            $this->newInstanceInfo = [
                'name' => $instance->name,
                'login' => $login_dolibarr,
                'password' => $password_dolibarr,
                'url' => "https://" . $instanceDetails['url'],
            ];

            Notification::send($user, new InstanceCreated($this->newInstanceInfo));

            $this->alert('success', 'Votre instance a été créée avec succès.');
            session()->flash('success', 'Ces informations ont été envoyées par email.');
            $this->reset(['name']);

         } catch (\Exception $e) {
            \Log::error('Erreur lors de la création de l\'instance: ' . $e->getMessage());
            $this->alert('error', 'Une erreur inattendue est survenue. Veuillez réessayer plus tard.');
        }

        $this->dispatch('instanceCreationEnded');
    }


    private function generateRandomLogin($instanceName)
    {
        $baseName = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $instanceName));
        $shuffled = str_shuffle($baseName);
        return substr($shuffled, 0, min(strlen($shuffled), 8));
    }

    private function createDolibarrCredential($user, $login, $password)
    {
        DolibarrCredential::create([
            'user_id' => $user->id,
            'username' => $login,
            'password' => Hash::make($password),
        ]);
    }


    public function render()
    {
        $user = Auth::user();
        $instanceCount = $user->instances()->count();
        $activeSubscription = $user->activeSubscription();
        $canCreate = $user->canCreateInstance();
        $remainingInstances = $user->remainingInstances();

        return view('livewire.client.create-instances', [
            'instanceCount' => $instanceCount,
            'activeSubscription' => $activeSubscription,
            'canCreate' => $canCreate,
            'remainingInstances' => $remainingInstances,
            'showPlanSelection' => $this->showPlanSelection,
        ])->layout('layouts.homeClient');
    }
}
