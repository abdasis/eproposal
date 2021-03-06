<?php

namespace App\Http\Livewire;

use App\Models\Anggota;
use App\Models\Proposal;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard', [
            'dataProposal' => Proposal::all()->take(5),
            'dataStakeHolder' => Anggota::all()->take(5)
        ]);
    }
}
