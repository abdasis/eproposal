<?php

namespace App\Http\Livewire\Analisys;

use App\Models\Proposal;
use Livewire\Component;

class DaftarProposal extends Component
{
    public function render()
    {
        return view('livewire.analisys.daftar-proposal', [
            'proposals' => Proposal::where('status_tahap', 2)->latest()->get()
        ]);
    }
}
