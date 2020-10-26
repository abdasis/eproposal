<?php

namespace App\Http\Livewire\Proposal;

use App\Models\Proposal;
use Livewire\Component;

class Show extends Component
{
    public $proposal;
    public function mount($id)
    {
        $this->proposal = Proposal::find($id);
    }
    public function render()
    {
        return view('livewire.proposal.show');
    }
}
