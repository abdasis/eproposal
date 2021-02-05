<?php

namespace App\Http\Livewire\SurveyKondisi;

use App\Models\Kondisi;
use App\Models\Manfaat;
use App\Models\NilaiDampak;
use App\Models\Pengaruh;
use App\Models\Proposal;
use App\Models\SurveyKondisi;
use Illuminate\Testing\Constraints\ArraySubset;
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

        // Total skor untuk S

        if ($this->kondisi[0] == 'S') {

            // $total = [];
            // $nilaiDampak = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'S')->latest()->first();
            // if (!empty($nilaiDampak)) {
            //     foreach (json_decode($nilaiDampak->total_dampak) as $keyDampak => $nilai) {
            //         foreach ($this->nilai_dampak as $k => $value) {
            //             $total[$keyDampak] = $nilai + $value;
            //         }
            //     }
            // }

            // $totalManfaat = [];
            // $nilaiManfaat = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'S')->latest()->first();
            // if (!empty($nilaiManfaat)) {
            //     foreach (json_decode($nilaiManfaat->total_manfaat) as $keyManfaat => $nilaiManfaat) {
            //         foreach ($this->nilai_manfaat as $k => $valueManfaat) {
            //             $totalManfaat[$keyManfaat] = $nilaiManfaat + $valueManfaat;
            //         }
            //     }
            // }



            $pengaruh = new SurveyKondisi();
            $pengaruh->pengaruh = $this->kondisi;
            $pengaruh->nilai_dampak = json_encode($this->nilai_dampak);
            $pengaruh->nilai_manfaat = json_encode($this->nilai_manfaat);
            $pengaruh->total = array_sum($totalT) + array_sum($totalO);
            $pengaruh->proposal_id = $this->proposal->id;
            $pengaruh->swot = $this->kondisi[0];
            $pengaruh->save();
            // $this->reset();
            $this->emit('success', ['title' => 'Berhasil', 'message' => 'Data Berhasil disimpan']);
        }

        // Total Skor untuk W
        if ($this->kondisi[0] == 'W') {
            // $totalDampakW = [];
            // $nilaiDampakW = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'W')->latest()->first();
            // if (!empty($nilaiDampakW)) {
            //     foreach (json_decode($nilaiDampakW->total_dampak_w) as $keyW => $nilaiW) {
            //         foreach ($this->nilai_dampak as $k => $valueW) {
            //             $totalDampakW[$keyW] = $nilaiW + $valueW;
            //         }
            //     }
            // }

            // $totalManfaatW = [];
            // $dataManfaatW = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'W')->latest()->first();
            // if (!empty($dataManfaatW)) {
            //     foreach (json_decode($dataManfaatW->total_manfaat_w) as $keyManfaatW => $nilaiManfaatW) {
            //         foreach ($this->nilai_manfaat as $k => $valueManfaatW) {
            //             $totalManfaatW[$keyManfaatW] = $nilaiManfaatW + $valueManfaatW;
            //         }
            //     }
            // }

            // if (empty($totalManfaatW)) {
            //     $totalManfaatW = json_encode($this->nilai_manfaat);
            // } else {
            //     $totalManfaatW = json_encode($totalManfaatW);
            // }
            // if (empty($totalDampakW)) {
            //     $totalDampakW = json_encode($this->nilai_dampak);
            // } else {
            //     $totalDampakW = json_encode($totalDampakW);
            // }
            $pengaruh = new SurveyKondisi();
            $pengaruh->pengaruh = $this->kondisi;
            $pengaruh->nilai_dampak = json_encode($this->nilai_dampak);
            $pengaruh->nilai_manfaat = json_encode($this->nilai_manfaat);
            $pengaruh->total = array_sum($totalT) + array_sum($totalO);
            // $pengaruh->total_dampak_w = $totalDampakW;
            // $pengaruh->total_manfaat_w = $totalManfaatW;
            $pengaruh->proposal_id = $this->proposal->id;
            $pengaruh->swot = $this->kondisi[0];
            $pengaruh->save();
            // $this->reset();
            $this->emit('success', ['title' => 'Berhasil', 'message' => 'Data Berhasil disimpan']);
        }
    }
    public function delete($id)
    {
        $this->confirm(
            'Apakah yakin untuk menghapus data ini?',
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
            'Data berhasil di hapus.'
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
        $totalS = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'S')->latest()->first();
        $totalW = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'W')->latest()->first();

        $dataSurveyKondisi = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'S')->get();
        $kondisiTdiS = [];
        $totalTdiS = [];
        foreach ($dataSurveyKondisi as $keySurveyKondisi => $surveyKondisi) {
            $kondisiTdiS[$keySurveyKondisi] = json_decode($surveyKondisi->nilai_dampak);
            $totalTdiS[$keySurveyKondisi] = array_sum(json_decode($surveyKondisi->nilai_dampak));
        }

        $jumlahTdiS = collect($kondisiTdiS);

        $kondisiOdiS = [];
        $totalOdiS = [];
        foreach ($dataSurveyKondisi as $keyOdiS => $oDiS) {
            $kondisiOdiS[$keyOdiS] = json_decode($oDiS->nilai_manfaat);
            $totalOdiS[$keyOdiS] = array_sum(json_decode($oDiS->nilai_manfaat));
        }

        $totalS = array_sum($totalOdiS) + array_sum($totalTdiS);
        $jumlahOdiS = collect($kondisiOdiS);


        // data di kondisi W

        $dataKondisiDiW = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'W')->get();

        $kondisiTdiW = [];
        $totalTdiW = [];
        foreach ($dataKondisiDiW as $keyTdiW => $tDiw) {
            $kondisiTdiW[$keyTdiW] = json_decode($tDiw->nilai_dampak);
            $totalTdiW[$keyTdiW] = array_sum(json_decode($tDiw->nilai_dampak));
        }

        $jumlahTdiW = collect($kondisiTdiW);

        // dd($jumlahTdiW);

        $kondisiOdiW = [];
        $totalOdiW = [];
        foreach ($dataKondisiDiW as $keyOdiW => $oDiW) {
            $kondisiOdiW[$keyOdiW] = json_decode($oDiW->nilai_manfaat);
            $totalOdiW[$keyOdiW] = array_sum(json_decode($oDiW->nilai_manfaat));
        }

        $totalW = array_sum($totalTdiW) + array_sum($totalOdiW);
        $jumlahOdiW = collect($kondisiOdiW);

        $totalSwT = [];
        if (count($kondisiTdiS) > 0 && count($kondisiTdiW) > 0) {
            for ($totalKondisi = 0; $totalKondisi < count($kondisiTdiS); $totalKondisi++) {
                $totalSwT[] = $jumlahTdiS->sum($totalKondisi) - $jumlahTdiW->sum($totalKondisi);
            }
        }

        // dd($totalSwT);

        // dd($jumlahOdiW);

        // $getTotalTonS = [];
        // foreach ($arrayTonS as $keyArrayTonS => $totalSum) {
        //     $getTotalTonS[$keyArrayTonS] = array_sum(array_column($arrayTonS, $keyArrayTonS));
        // }


        // $arrayOonS = [];
        // foreach ($dataSurveyKondisi as $keySurveyKondisi => $surveyKondisi) {
        //     $arrayOonS[$keySurveyKondisi] = json_decode($surveyKondisi->nilai_manfaat);
        // }
        // $getTotalOonS = [];
        // foreach ($arrayOonS as $keyArrayOonS => $totalSum) {
        //     $getTotalOonS[$keyArrayOonS] = array_sum(array_column($arrayOonS, $keyArrayOonS));
        // }

        // -----------------
        // data total w
        // -----------------

        // $dataSurveyKondisiW = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'W')->get();
        // $arrayTonW = [];
        // foreach ($dataSurveyKondisiW as $keySurveyKondisiW => $surveyKondisiW) {
        //     $arrayTonW[$keySurveyKondisiW] = json_decode($surveyKondisiW->nilai_dampak);
        // }

        // dd($getTotalSwKolomO);

        return view('livewire.survey-kondisi.input-nilai', [
            'kondisis' => $kondisi,
            'opportunities' => $oppotunity,
            'threats' => $threat,
            'weakness' => $weakness,
            'surveyKondisis' => SurveyKondisi::where('proposal_id', $this->proposal->id)->orderBy('pengaruh', 'asc')->get(),
            'jumlahTdiS' => $jumlahTdiS,
            'jumlahOdiS' => $jumlahOdiS,
            'totalS' => $totalS,

            'jumlahTdiW' => $jumlahTdiW,
            'jumlahOdiW' => $jumlahOdiW,
            'totalW' => $totalW,
            // 'totalPerkolomT' => $getTotalTonS,
            // 'totalPerkolomS' => $getTotalOonS,
            // 'totalSTonS' => array_sum($getTotalTonS) + array_sum($getTotalOonS),

            // 'totalPerkolomTonW' => $getTotalTonW,
            // 'totalPerkolomOonW' => $getTotalOonW,
            // 'totalSTonW' => array_sum($getTotalTonW) + array_sum($getTotalOonW),
            // 'totalSW' => $getTotalSw,
            // 'totalSwOnO' => $getTotalSwKolomO,
            // 'sumTotalSW' => array_sum($getTotalSw) + array_sum($getTotalSwKolomO),
        ]);
    }
}
