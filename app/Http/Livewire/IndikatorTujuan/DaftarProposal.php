<?php

namespace App\Http\Livewire\IndikatorTujuan;

use App\Models\Proposal;
use Livewire\Component;

class DaftarProposal extends Component
{
    public function render()
    {
        return view('livewire.indikator-tujuan.daftar-proposal', [
            'proposals' => Proposal::where('status_tahap', 6)->latest()->get()
        ]);
    }
}
