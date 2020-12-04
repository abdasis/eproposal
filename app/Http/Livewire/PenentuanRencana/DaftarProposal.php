<?php

namespace App\Http\Livewire\PenentuanRencana;

use App\Models\Proposal;
use Livewire\Component;

class DaftarProposal extends Component
{
    public function render()
    {
        return view('livewire.penentuan-rencana.daftar-proposal', [
            'proposals' => Proposal::latest()->get()
        ]);
    }
}
