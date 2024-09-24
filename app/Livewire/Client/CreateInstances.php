<?php

namespace App\Livewire\Client;

use Livewire\Component;
<<<<<<< HEAD
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Instance;
use App\Models\DolibarrCredential;
use App\Models\Subscription;
use App\Models\Plan;
use App\Services\InstanceProvisioningService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Notifications\InstanceCreated;
use Illuminate\Support\Facades\Notification;

class CreateInstances extends Component
{   
    use WithPagination, LivewireAlert, AuthorizesRequests;
    
    public $newInstanceInfo = null;
    public $name = '';
    
    public $modules = [
        'gestion_commerciale' => [
            'name' => 'Gestion Commerciale',
            'selected' => false,
            'description' => 'Modules Inclus : Facturation, Devis, Commandes, Propositions commerciales'
        ],
        'crm' => [
            'name' => 'Gestion de la Relation Client (CRM)',
            'selected' => false,
            'description' => 'Modules Inclus : Gestion des opportunités, Gestion des contacts, Suivi des interactions'
        ],
        'gestion_stocks' => [
            'name' => 'Gestion des Stocks',
            'selected' => false,
            'description' => 'Modules Inclus : Gestion des produits, Suivi des mouvements de stock, Gestion des inventaires'
        ],
        'comptabilite_finance' => [
            'name' => 'Comptabilité & Finance',
            'selected' => false,
            'description' => 'Modules Inclus : Comptabilité, Gestion des paiements, Budgétisation'
        ],
    ];
    
    protected function rules()
    {
        return [
            'name' => ['required', 'unique:instances,name', 'min:3', 'max:15'],
            'modules' => ['required', 'array', function ($attribute, $value, $fail) {
                if (count(array_filter($value)) === 0) {
                    $fail('Veuillez sélectionner au moins un module.');
                }
            }],
        ];
    }

    protected $messages = [
        'name.required' => 'Le nom de l\'instance est obligatoire.',
        'name.unique' => 'Ce nom d\'instance est déjà utilisé.',
        'name.min' => 'Le nom de l\'instance doit contenir au moins 3 caractères.',
        'name.max' => 'Le nom de l\'instance ne peut pas dépasser 15 caractères.',
        'modules.required' => 'Veuillez sélectionner au moins un module.',
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
        
        $selectedModules = array_keys(array_filter($this->modules));
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
            $this->reset(['name', 'modules']);
            
         } catch (\Exception $e) {
            \Log::error('Erreur lors de la création de l\'instance: ' . $e->getMessage());
            $this->alert('error', 'Une erreur inattendue est survenue. Veuillez réessayer plus tard.');
        }
        
        $this->dispatch('instanceCreationEnded');
    }
    
    private function getSelectedModulesNames()
    {
        return array_values(array_map(function($module) {
            return $module['name'];
        }, array_filter($this->modules, function($module) {
            return $module['selected'];
        })));
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
        ])->layout('layouts.homeClient');
    }
}
=======
use App\Models\Instance;
use App\Models\DolibarrCredential;
use App\Services\DolibarrCloneService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateInstances extends Component
{

    public function render()
    {
        return view('livewire.client.create-instances')->layout('layouts.homeClient');
    }
}
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
