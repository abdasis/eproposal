<?php

namespace App\Http\Livewire\Strategi;

use App\Models\Proposal;
use App\Models\Strategi;
use Livewire\Component;

class Create extends Component
{
    public $proposal;
    public $killerweakness1, $kw1, $tujuan1, $killerweakness2, $kw2, $tujuan2, $killerweakness3, $sw1, $tujuan3, $killerweakness4, $sw2, $tujuan4;

    public function mount($proposal_id)
    {
        $this->proposal = Proposal::find($proposal_id);
    }

    public function store()
    {
        $strategi = new Strategi();
        $strategi->killerweakness1 = $this->killerweakness1;
        $strategi->kw1 = $this->kw1;
        $strategi->tujuan_1 = $this->tujuan1;

        $strategi->killerweakness2 = $this->killerweakness2;
        $strategi->kw2 = $this->kw2;
        $strategi->tujuan_2 = $this->tujuan2;

        $strategi->killerweakness3 = $this->killerweakness3;
        $strategi->sw1 = $this->sw1;
        $strategi->tujuan_3 = $this->tujuan3;

        $strategi->killerweakness4 = $this->killerweakness4;
        $strategi->sw2 = $this->sw2;
        $strategi->tujuan_4 = $this->tujuan4;

        $strategi->proposal_id = $this->proposal->id;
        $strategi->save();

        $this->emit('success');
    }

    public function render()
    {
        return view('livewire.strategi.create');
    }
}
