<?php

namespace App\Http\Livewire\IndikatorTujuan;

use App\Models\Proposal;
use Livewire\Component;

class DaftarProposal extends Component
{
    public function render()
    {
        return view('livewire.indikator-tujuan.daftar-proposal', [
            'proposals' => Proposal::where('dibuat_oleh', \Auth::id())->latest()->get()
        ]);
    }
}
