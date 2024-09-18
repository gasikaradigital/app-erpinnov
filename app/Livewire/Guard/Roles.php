<?php

namespace App\Livewire\Guard;

use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Roles extends Component
{
    use WithPagination, LivewireAlert, AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.guard.roles');
    }
}
