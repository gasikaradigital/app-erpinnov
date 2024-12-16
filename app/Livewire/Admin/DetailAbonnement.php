<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use App\Models\Instance;
use App\Models\Payment;
use App\Models\Entreprise;

class DetailAbonnement extends Component
{
    public $user;
    public $payment;
    public $instanceCount;
    public $id_instance;
    public $id_user;
    public function mount($id_instance, $id_user)
    {
        $id_user = request()->route('id_user');
        $id_instance = request()->route('id_instance');
    
        $this->user = User::findOrFail($id_user);
        $this->instance = Instance::with('entreprise')->findOrFail($id_instance);
    
        // Retrieve payment associated with the user
        $this->payment = Payment::where('user_id', $this->user->id)->first();
    
        if ($this->user) {
            // Retrieve instances associated with the user
            $this->instances = Instance::where('id', $id_instance)->get();
    
            // Count the number of instances associated with the user
            $this->instanceCount = $this->instances->count();
        }
    
        
        
    }

    public function render()
    {
        if ($this->payment) {
            // Retrieve payments associated with the user
            $this->payments = Payment::where('user_id', $this->user->id)->get();
            
            return view('livewire.admin.detail-abonnement',[
            'instances' => $this->instances,
            'paiements' => $this->payments,
            
        ]);
        } else{
            return view('livewire.admin.detail-abonnement',[
                'instances' => $this->instances,
                'paiements' => '']);
        }
       
    }
}
