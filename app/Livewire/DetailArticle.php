<?php

namespace App\Livewire;

use Livewire\Component;

class DetailArticle extends Component
{
    public function render()
    {
        return view('livewire.detail-article')->layout('layouts.homeMaster');
    }
}
