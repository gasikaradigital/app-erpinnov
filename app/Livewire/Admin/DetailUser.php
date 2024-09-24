<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class DetailUser extends Component
{

    public User $user;

    public function mount($id)
    {
        $this->user = User::with('roles')->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.admin.detail-user');
    }
}
