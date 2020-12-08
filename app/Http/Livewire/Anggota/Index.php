<?php

namespace App\Http\Livewire\Anggota;

use App\Models\Anggota;
use App\Models\Proposal;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.anggota.index', [
            'proposals' => Proposal::latest()->get()
        ]);
    }
}
