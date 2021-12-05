<?php

namespace App\Http\Livewire\Strategi;

use App\Models\Proposal;
use Livewire\Component;

class DaftarProposal extends Component
{

    public function render()
    {
        return view('livewire.strategi.daftar-proposal', [
            'proposals' => Proposal::where('dibuat_oleh', \Auth::id())->latest()->get()
        ]);
    }
}
