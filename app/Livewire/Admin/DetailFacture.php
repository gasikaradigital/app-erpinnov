<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use App\Models\Payment;
use App\Models\Instance;

class DetailFacture extends Component
{
    public $payment; 
    public $user_id;

    public function mount($id_payment, $id_instance){
        
        $this->payment = Payment::where('id',$id_payment)->first();

        if($this->payment){
            //Récupération user_id
            $this->user_id = $this->payment->user_id;
        }
        
        //Récupération de toutes les paiements liés à l'id passer en paramètre
        $this->payment = Payment::findOrFail($id_payment);
        if($this->payment){
            $this->payments = Payment::where('id',$id_payment)->get();
        }

        //Récupération des information liés à l'utilisateur qui a fait le paiement
        $this->user = User::findOrFail($this->user_id);
        if($this->user){
            $this->users = User::where('id', $this->user_id)->get();
        }

        //Récupération des informations de l'instance lié au facture
        $this->instance = Instance::findOrFail($id_instance);
        if($this->instance){
            $this->instances = Instance::with('entreprise')->where('id', $id_instance)->get();
        }

    }

    public function render()
    {
        return view('livewire.admin.detail-facture-client',[
            'payments' => $this->payments,
            'users' => $this->users,
            'instances' => $this->instances
        ]);
    }
}
