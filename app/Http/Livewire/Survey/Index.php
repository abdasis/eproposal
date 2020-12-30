<?php

namespace App\Http\Livewire\Survey;

use App\Models\Analisys;
use App\Models\Anggota;
use App\Models\Responden;
use Livewire\Component;
use Psy\CodeCleaner\AssignThisVariablePass;

class Index extends Component
{
    public $proposal_id;
    public function mount($proposal_id)
    {
        $this->proposal_id = $proposal_id;
    }

    public function render()
    {
        $analisies = Analisys::where('proposal_id', $this->proposal_id)->groupBy('nama_anggota')
            ->selectRaw('sum(tingkat_pengaruh) as tingkat_pengaruh, sum(tingkat_kepentingan) as tingkat_kepentingan, sum(tingkat_pengaruh+tingkat_kepentingan) as total,nama_anggota')
            ->get();

        // dd($analisies);
        return view('livewire.survey.index', [
            'analisies' => $analisies,
            'repondenCount' => Responden::where('proposal_id', $this->proposal_id)->count()
        ]);
    }
}
