<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Instance;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ManageInstance extends Component
{
    use WithPagination, LivewireAlert,  AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.admin.manage-instance', [
            'instances' => Instance::latest()->paginate(10),
        ]);
    }
}
