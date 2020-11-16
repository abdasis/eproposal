<?php

namespace App\Http\Livewire\Strategi;

use App\Models\Proposal;
use App\Models\Strategi;
use Livewire\Component;

class Show extends Component
{
    public $strategi, $proposal;
    public function mount($strategi_id)
    {
        $this->strategi = Strategi::find($strategi_id);
        $this->proposal = Proposal::find($this->strategi->proposal_id);
    }
    public function render()
    {
        return view('livewire.strategi.show');
    }
}
