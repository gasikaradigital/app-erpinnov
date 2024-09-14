<?php

namespace App\Livewire\Client;

use Livewire\Component;

class HomeClient extends Component
{
    public function render()
    {
        return view('livewire.client.home-client')->layout('layouts.homeClient');
    }
}
