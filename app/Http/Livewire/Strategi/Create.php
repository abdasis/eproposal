<?php

namespace App\Http\Livewire\Strategi;

use App\Models\Proposal;
use App\Models\Strategi;
use Livewire\Component;

class Create extends Component
{
    public $proposal;
    public $killerweakness_kw, $kw, $tujuan_kw, $killerweakness_sw, $sw, $tujuan_sw;

    public function mount($proposal_id)
    {
        $this->proposal = Proposal::find($proposal_id);
    }

    public function store()
    {
        $strategi = new Strategi();
        $strategi->kw = $this->killerweakness_kw;
        $strategi->tujuan_kw = $this->tujuan_kw;
        $strategi->sw = $this->killerweakness_sw;
        $strategi->tujuan_sw = $this->tujuan_sw;
        $strategi->proposal_id = $this->proposal->id;
        $strategi->save();

        $this->alert('success', 'Data Berhasil Ditambahkan');
    }

    public function render()
    {
        return view('livewire.strategi.create',[
            'semuaStrategi' => Strategi::where('proposal_id', $this->proposal->id)->get(),
        ]);
    }
}
