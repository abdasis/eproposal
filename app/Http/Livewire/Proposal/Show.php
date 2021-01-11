<?php

namespace App\Http\Livewire\Proposal;

use App\Models\Analisys;
use App\Models\IndikatorTujuan;
use App\Models\Kegiatan;
use App\Models\Kondisi;
use App\Models\PenetuanRencana;
use App\Models\Proposal;
use App\Models\Responden;
use App\Models\Strategi;
use App\Models\SurveiKondisi;
use App\Models\SurveyKondisi;
use Livewire\Component;

class Show extends Component
{
    public $proposal;
    public function mount($id)
    {
        $this->proposal = Proposal::find($id);
    }
    public function render()
    {
        $kondisi = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'S')->latest()->get();
        $weakness = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'W')->latest()->get();
        $threat = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'T')->latest()->get();
        $oppotunity = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'O')->latest()->get();
        $totalS = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'S')->sum('total');
        $totalW = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'W')->sum('total');
        $totalSW = $totalS + $totalW;
        $analisies = Analisys::groupBy('nama_anggota')
            ->selectRaw('sum(tingkat_pengaruh) as tingkat_pengaruh, sum(tingkat_kepentingan) as tingkat_kepentingan, sum(tingkat_pengaruh+tingkat_kepentingan) as total,nama_anggota')
            ->get();

        $analisies = Analisys::where('proposal_id', $this->proposal->id)->groupBy('nama_anggota')
            ->selectRaw('sum(tingkat_pengaruh) as tingkat_pengaruh, sum(tingkat_kepentingan) as tingkat_kepentingan, sum(tingkat_pengaruh+tingkat_kepentingan) as total,nama_anggota')
            ->get();


        // --------------------------------------
        // data survey kondisi
        // -------------------------------------
        $kondisi = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'S')->latest()->get();
        $weakness = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'W')->latest()->get();
        $threat = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'T')->latest()->get();
        $oppotunity = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'O')->latest()->get();
        $totalS = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'S')->latest()->first();
        $totalW = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'W')->latest()->first();

        $dataSurveyKondisi = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'S')->get();
        $arrayTonS = [];
        foreach ($dataSurveyKondisi as $keySurveyKondisi => $surveyKondisi) {
            $arrayTonS[$keySurveyKondisi] = json_decode($surveyKondisi->nilai_dampak);
        }
        $getTotalTonS = [];
        foreach ($arrayTonS as $keyArrayTonS => $totalSum) {
            $getTotalTonS[$keyArrayTonS] = array_sum(array_column($arrayTonS, $keyArrayTonS));
        }

        $arrayOonS = [];
        foreach ($dataSurveyKondisi as $keySurveyKondisi => $surveyKondisi) {
            $arrayOonS[$keySurveyKondisi] = json_decode($surveyKondisi->nilai_manfaat);
        }
        $getTotalOonS = [];
        foreach ($arrayOonS as $keyArrayOonS => $totalSum) {
            $getTotalOonS[$keyArrayOonS] = array_sum(array_column($arrayOonS, $keyArrayOonS));
        }

        // -----------------
        // data total w
        // -----------------

        $dataSurveyKondisiW = SurveyKondisi::where('proposal_id', $this->proposal->id)->where('swot', 'W')->get();
        $arrayTonW = [];
        foreach ($dataSurveyKondisiW as $keySurveyKondisiW => $surveyKondisiW) {
            $arrayTonW[$keySurveyKondisiW] = json_decode($surveyKondisiW->nilai_dampak);
        }
        $getTotalTonW = [];
        foreach ($arrayTonW as $keyArrayTonW => $totalSum) {
            $getTotalTonW[$keyArrayTonW] = array_sum(array_column($arrayTonW, $keyArrayTonW));
        }

        $arrayOonW = [];
        foreach ($dataSurveyKondisiW as $keyArrayOonW => $surveyKondisi) {
            $arrayOonW[$keyArrayOonW] = json_decode($surveyKondisi->nilai_manfaat);
        }
        $getTotalOonW = [];
        foreach ($arrayOonW as $keyArrayOonW => $totalSum) {
            $getTotalOonW[$keyArrayOonW] = array_sum(array_column($arrayOonW, $keyArrayOonW));
        }


        $getTotalSw = [];
        $getTotalTonSTanpaNull = [];
        foreach ($getTotalTonS as  $getTonS) {
            if ($getTonS != 0) {
                $getTotalTonSTanpaNull[] = $getTonS;
            }
        }


        $getTotalSwKolomO = [];
        $getTotalOonSTanpaNull = [];
        foreach ($getTotalOonS as  $getOonS) {
            if ($getOonS != 0) {
                $getTotalOonSTanpaNull[] = $getOonS;
            }
        }
        // dd(count($dataSurveyKondisiW));

        if (count($dataSurveyKondisiW) > 0 && count($dataSurveyKondisi) > 0) {
            for ($dataT = 0; $dataT < count($getTotalTonSTanpaNull); $dataT++) {
                $getTotalSw[$dataT] = $getTotalTonS[$dataT] - $getTotalTonW[$dataT];
            }
            // dd(count($getTotalTonSTanpaNull));
            for ($dataO = 0; $dataO < count($getTotalOonSTanpaNull); $dataO++) {
                $getTotalSwKolomO[$dataO] = $getTotalOonS[$dataO] - $getTotalOonW[$dataO];
            }
        }

        // =============================
        // Data survey kondisi
        // =============================
        $getTujuan = IndikatorTujuan::where('proposal_id', $this->proposal->id)->get();
        // $tujuan = IndikatorTujuan::where('nilai_target', $getTujuan)->get();
        $getMaxNilaiTarget = [];
        foreach ($getTujuan as $key => $tujuan) {
            $getMaxNilaiTarget[] = json_decode($tujuan->nilai_target);
        }
        // if (!empty($tujuan)) {
        //     $getMaxNilaiTarget = json_decode($tujuan->nilai_target);
        // } else {
        //     $getMaxNilaiTarget = [];
        // }

        if ($getMaxNilaiTarget != null) {
            $getMaxNilaiTarget = max($getMaxNilaiTarget);
        }

        // dd(max($getMaxNilaiTarget));
        $strategi = Strategi::where('proposal_id', $this->proposal->id)->get();
        $threat = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'T')->latest()->get();

        return view('livewire.proposal.show', [
            'analisisKondisi' => SurveyKondisi::where('proposal_id', $this->proposal->id)->first(),
            'strategi' => Strategi::where('proposal_id', $this->proposal->id)->first(),
            'indikatorTujuan' => IndikatorTujuan::where('proposal_id', $this->proposal->id)->get(),
            'indikatorKegiatan' => Kegiatan::latest()->get(),
            'penentuanRencana' => PenetuanRencana::where('proposal_id', $this->proposal->id)->get(),
            'analisies' => $analisies,
            'repondenCount' => Responden::where('proposal_id', $this->proposal->id)->count(),
            'kondisis' => $kondisi,
            'opportunities' => $oppotunity,
            'threats' => $threat,
            'weakness' => $weakness,
            'surveyKondisis' => SurveyKondisi::where('proposal_id', $this->proposal->id)->orderBy('pengaruh', 'asc')->get(),
            'totalS' => $totalS,
            'totalW' => $totalW,
            'totalPerkolomT' => $getTotalTonS,
            'totalPerkolomS' => $getTotalOonS,
            'totalSTonS' => array_sum($getTotalTonS) + array_sum($getTotalOonS),
            'totalPerkolomTonW' => $getTotalTonW,
            'totalPerkolomOonW' => $getTotalOonW,
            'totalSTonW' => array_sum($getTotalTonW) + array_sum($getTotalOonW),
            'totalSW' => $getTotalSw,
            'totalSwOnO' => $getTotalSwKolomO,
            'sumTotalSW' => array_sum($getTotalSw) + array_sum($getTotalSwKolomO),
        ]);
    }
}
