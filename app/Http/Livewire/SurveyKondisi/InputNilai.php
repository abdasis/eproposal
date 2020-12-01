<?php

namespace App\Http\Livewire\SurveyKondisi;

use App\Models\Kondisi;
use App\Models\Manfaat;
use App\Models\NilaiDampak;
use App\Models\Pengaruh;
use App\Models\Proposal;
use App\Models\SurveyKondisi;
use Livewire\Component;
use Prophecy\Prophet;

class InputNilai extends Component
{
    public $proposal;
    public $kondisi;
    public $dampak, $nilai_dampak;
    public $manfaat, $nilai_manfaat;
    public function mount($proposal_id)
    {
        $this->proposal = Proposal::find($proposal_id);
    }

    public function store()
    {
        $pengaruh = new SurveyKondisi();
        $pengaruh->pengaruh = $this->kondisi;
        $pengaruh->proposal_id = $this->proposal->id;
        $pengaruh->save();

        $nilaiDampak = new NilaiDampak();
        $nilaiDampak->dampak = $this->dampak;
        $nilaiDampak->nilai = $this->nilai_dampak;
        $pengaruh->nilaiKondisi()->save($nilaiDampak);

        $nilaiManfaat = new Manfaat();
        $nilaiManfaat->manfaat = $this->manfaat;
        $nilaiManfaat->nilai = $this->nilai_manfaat;
        $pengaruh->nilaiManfaat()->save($nilaiManfaat);

        $this->emit('success', ['title' => 'Berhasil', 'message' => 'Data Berhasil disimpan']);

    }
    public function render()
    {
        $kondisi = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'S')->latest()->get();
        $weakness = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'W')->latest()->get();
        $threat = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'T')->latest()->get();
        $oppotunity = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'O')->latest()->get();
        return view('livewire.survey-kondisi.input-nilai', [
            'kondisis' => $kondisi,
            'opportunities' => $oppotunity,
            'threats' => $threat,
            'weakness' => $weakness,
            'surveyKondisis' => SurveyKondisi::where('proposal_id', $this->proposal->id)->get()
        ]);
    }
}

