<?php

namespace App\Http\Livewire\Kondisi;

use App\Models\Proposal;
use Livewire\Component;

class DaftarProposal extends Component
{
    public function render()
    {
        return view('livewire.kondisi.daftar-proposal', [
            'proposals' => Proposal::latest()->get()
        ]);
    }
}
