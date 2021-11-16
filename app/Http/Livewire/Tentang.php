<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tentang extends Component
{
    public function render()
    {
        return view('livewire.tentang')->layout('layouts.guest');
    }
}
