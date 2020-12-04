<?php

namespace App\Http\Livewire\IndikatorKegiatan;

use App\Models\Proposal;
use Livewire\Component;

class DaftarProposal extends Component
{
    public function render()
    {
        return view('livewire.indikator-kegiatan.daftar-proposal', [
            'proposals' => Proposal::where('status_tahap', 7)->latest()->get()
        ]);
    }
}
