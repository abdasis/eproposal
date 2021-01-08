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
    public $surveyKondisi;

    protected $listeners = [
        'confirmed',
        'cancelled',
    ];
    public function mount($proposal_id)
    {
        $this->proposal = Proposal::find($proposal_id);
    }

    public function store()
    {

        $totalT = [];
        $totalO = [];
        foreach ($this->nilai_dampak as $key =>  $nilaiDampak) {
            $totalT[$key] = $nilaiDampak;
        }

        foreach ($this->nilai_manfaat as $key =>  $nilaiManfaat) {
            $totalO[$key] = $nilaiManfaat;
        }

        $total = [];
        $nilaiDampak = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'S')->latest()->first();
        if (!empty($nilaiDampak)) {
            foreach (json_decode($nilaiDampak->nilai_dampak) as $key => $nilai) {
                foreach ($this->nilai_dampak as $k => $value) {
                    $total[$key] = $nilai + $value;
                }
            }
        }

        $totalManfaat = [];
        $nilaiManfaat = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'W')->latest()->first();
        if (!empty($nilaiManfaat)) {
            foreach (json_decode($nilaiManfaat->nilai_manfaat) as $keyManfaat => $nilaiManfaat) {
                foreach ($this->nilai_manfaat as $k => $valueManfaat) {
                    $totalManfaat[$keyManfaat] = $nilaiManfaat + $valueManfaat;
                }
            }
        }

        $pengaruh = new SurveyKondisi();
        $pengaruh->pengaruh = $this->kondisi;
        $pengaruh->nilai_dampak = json_encode($this->nilai_dampak);
        $pengaruh->nilai_manfaat = json_encode($this->nilai_manfaat);
        $pengaruh->total = array_sum($totalT) + array_sum($totalO);
        $pengaruh->total_dampak = json_encode($total);
        $pengaruh->total_manfaat = json_encode($totalManfaat);
        $pengaruh->proposal_id = $this->proposal->id;
        $pengaruh->swot = $this->kondisi[0];
        $pengaruh->save();
        $this->emit('success', ['title' => 'Berhasil', 'message' => 'Data Berhasil disimpan']);
    }
    public function delete($id)
    {
        $this->confirm(
            'Do you love Livewire Alert?',
            [
                'toast' => false,
                'position' => 'center',
                'showConfirmButton' => true,
                'cancelButtonText' => 'Nope',
                'onConfirmed' => 'confirmed',
                'onCancelled' => 'cancelled'
            ]
        );

        $this->surveyKondisi = $id;
        return;
    }

    public function confirmed()
    {
        $kondisi = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('id', $this->surveyKondisi)->first();
        $kondisi->delete();
        $this->alert(
            'success',
            'Thanks! consider giving it a star on github.'
        );
    }

    public function cancelled()
    {

        $this->alert('info', 'Understood');
    }

    public function onConfirmedAction()
    {
        $kondisi = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('id', $this->surveyKondisi)->first();
        $kondisi->delete();
        $this->alert('success', 'Data berhasil dihapus!');
    }
    public function render()
    {
        $kondisi = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'S')->latest()->get();
        $weakness = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'W')->latest()->get();
        $threat = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'T')->latest()->get();
        $oppotunity = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'O')->latest()->get();
        $totalS = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'S')->sum('total');
        $totalW = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'W')->sum('total');
        $totalSW = $totalS - $totalW;

        // $sumDampak = [];
        // $nilaiDampak = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'S')->latest()->pluck('nilai_dampak');
        // foreach (json_decode($nilaiDampak) as $key => $nilai) {
        //     foreach (json_decode($nilai) as $key => $value) {
        //         $sumDampak[$key] += $value;
        //     }
        // }
        // dd($nilaiDampak);

        return view('livewire.survey-kondisi.input-nilai', [
            'kondisis' => $kondisi,
            'opportunities' => $oppotunity,
            'threats' => $threat,
            'weakness' => $weakness,
            'surveyKondisis' => SurveyKondisi::where('proposal_id', $this->proposal->id)->orderBy('pengaruh', 'asc')->get(),
            'totalS' => $totalS,
            'totalW' => $totalW,
            'totalSW' => $totalSW,
            'kondisiS'
        ]);
    }
}
