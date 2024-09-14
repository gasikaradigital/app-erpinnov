<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\Instance;
use App\Models\DolibarrCredential;
use App\Services\DolibarrCloneService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateInstances extends Component
{

    public function render()
    {
        return view('livewire.client.create-instances')->layout('layouts.homeClient');
    }
}
