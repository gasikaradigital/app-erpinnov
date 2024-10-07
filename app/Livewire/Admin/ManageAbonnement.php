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
        return view('livewire.admin.manage-abonnement', [
            'instances' => Instance::latest()->paginate(10),
        ]);
    }
}

