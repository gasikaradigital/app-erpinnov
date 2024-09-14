<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\Instance;
use App\Models\DolibarrCredential;
use App\Services\DolibarrCloneService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class InstanceManager extends Component
{
    public $name_instance = '';
    public $instances;
    public $newInstanceInfo = null;
    public $error = null;

    protected $rules = [
        'name_instance' => 'required|string|max:255|unique:instances,name_instance',
    ];

    public function mount()
    {
        $this->loadInstances();
    }

    public function loadInstances()
    {
        $this->instances = Auth::user()->instances;
    }

    public function store()
    {
        $this->validate();

        $reference = 'INST-' . Str::random(8);
        $subdomain = Str::slug($this->name_instance);
        $url = "http://{$subdomain}.erpinnov.test";  // Changed to http for local testing
        $dolibarrPassword = Str::random(12);

        $instance = Instance::create([
            'user_id' => Auth::id(),
            'reference' => $reference,
            'name_instance' => $this->name_instance,
            'url' => $url,
            'status' => 'active',
            'type' => 'free',
            'expiration_date' => now()->addDays(30),
            'dolibarr_username' => 'admin',
            'dolibarr_password' => Hash::make($dolibarrPassword),
        ]);

        $this->createDolibarrCredential(Auth::user(), $dolibarrPassword);

        // Cloner l'instance Dolibarr
        $cloneService = new DolibarrCloneService();
        $result = $cloneService->cloneInstance($instance);

        if ($result) {
            $this->newInstanceInfo = [
                'name' => $instance->name_instance,
                'login' => 'admin',
                'password' => $dolibarrPassword,
                'url' => $instance->url,
            ];
            session()->flash('success', 'Instance créée avec succès.');
        } else {
            $this->error = "Une erreur est survenue lors de la création de l'instance.";
            $instance->delete();  // Supprimer l'instance si le clonage a échoué
        }

        $this->reset('name_instance');
        $this->loadInstances();
    }

    private function createDolibarrCredential($user, $dolibarrPassword)
    {
        DolibarrCredential::create([
            'user_id' => $user->id,
            'username' => $user->email,
            'password' => Hash::make($dolibarrPassword),
        ]);
    }

    public function render()
    {
        return view('livewire.client.create-instances')->layout('layouts.homeClient');
    }
}
