<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class HomeSuperAdmin extends Component
{
    public function render()
    {
        return view('livewire.admin.home-super-admin')->layout('layouts.homeAdmin');
    }
}
