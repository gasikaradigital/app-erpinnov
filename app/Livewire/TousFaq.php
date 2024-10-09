<?php

namespace App\Livewire;

use Livewire\Component;

class TousFaq extends Component
{
    public function render()
    {
        return view('livewire.tous-faq')->layout('layouts.homeMaster');
    }
}
