<?php

namespace App\Http\Livewire\Survey;

use App\Models\Analisys;
use App\Models\Anggota;
use Livewire\Component;

class Index extends Component
{
    public $proposal_id;
    public function mount($proposal_id)
    {
        $this->proposal_id = $proposal_id;
    }

    public function render()
    {
        $analisies = Analisys::groupBy('nama_anggota')
        ->selectRaw('sum(tingkat_pengaruh) as tingkat_pengaruh, sum(tingkat_kepentingan) as tingkat_kepentingan,nama_anggota')
        ->get();
        // dd($analisies);
        return view('livewire.survey.index', [
            'analisies' => $analisies
        ]);
    }
}
