<?php

namespace App\Http\Livewire\Proposal;

use App\Models\Proposal;
use Livewire\Component;
use Prophecy\Prophet;

class Index extends Component
{
    public function render()
    {
        return view('livewire.proposal.index', [
            'proposals' => Proposal::latest()->get()
        ]);
    }
}
