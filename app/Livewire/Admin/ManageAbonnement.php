<?php

// namespace App\Livewire\Admin;

// use Livewire\Component;

// class ManageAbonnement extends Component
// {
//     public function render()
//     {
//         return view('livewire.admin.home-super-admin')->layout('layouts.homeAdmin');
//     }
// }


namespace App\Livewire\Admin;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Instance;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ManageAbonnement extends Component
{
    use WithPagination, LivewireAlert,  AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        $instances = Instance::with('user', 'subscription')->paginate(10);
        
        foreach ($instances as $instance) {
            $creationDate = Carbon::parse($instance->created_at);
            $created_at = Carbon::createFromFormat('Y-m-d H:i:s', $creationDate);
            $expirationDate = $created_at->copy()->addDays(30);
            $now = now();
            
            $daysRemaining = $now->diffInDays($expirationDate, false);

            // Si l'instance est expirée, on affiche 0
            if ($daysRemaining < 0) {
                $daysRemaining = 0;
            }

            // Ajouter le nombre de jours restants à l'instance
            $instance->days_remaining = floor($daysRemaining);
        }
        
        return view('livewire.admin.manage-abonnement',[
        'instances' => $instances,
       ]);
    }
    
}

