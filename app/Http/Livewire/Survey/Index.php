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
        $anggota = Anggota::where('proposal_id', $this->proposal_id)->get();
        $analisies = Analisys::where('anggota_id', $anggota->id)->get();
        // $analisies = Anggota::with('analisys:tingkat_kepentingan')->get();
        dd($analisies);
        return view('livewire.survey.index', [
            'analisies' => $analisies
        ]);
    }
}
