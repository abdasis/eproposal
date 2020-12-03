<?php

namespace App\Http\Livewire\IndikatorKegiatan;

use App\Models\Kondisi;
use App\Models\Strategi;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $strategi = Strategi::all();
        $threat = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'T')->latest()->get();
        return view('livewire.indikator-kegiatan.index', [
            'strategies' => $strategi,
            'threats' => $threat,
        ]);
    }
}
