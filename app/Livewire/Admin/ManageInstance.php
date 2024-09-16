<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Instance;

class ManageInstance extends Component
{
    public function render()
    {
        return view('livewire.admin.manage-instance', [
            'instances' => Instance::latest()->paginate(10),
        ]);
    }
}
