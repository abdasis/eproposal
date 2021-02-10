<?php

namespace App\Http\Livewire\Proposal;

use App\Models\Analisys;
use App\Models\IndikatorKegiatan;
use App\Models\IndikatorTujuan;
use App\Models\Kegiatan;
use App\Models\Kondisi;
use App\Models\PenetuanRencana;
use App\Models\Proposal;
use App\Models\Responden;
use App\Models\Strategi;
use App\Models\SurveiKondisi;
use App\Models\SurveyKondisi;
use App\Models\Tujuan;
use Livewire\Component;

class Show extends Component
{
    public $proposal;
    public function mount($id)
    {
        $this->proposal = Proposal::find($id);
    }
    public function downloadPDF($id)
    {
        $this->emit('getProposal', $id);
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


        // -----------------------------------------
        // Data indikator tujuan
        // -----------------------------------------
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

        // --------------------------------------
        // Data indikator ketgiatan
        // -------------------------------------
        $getKegiatan = IndikatorKegiatan::where('proposal_id', $this->proposal->id)->get();
        $getMaxNilaiTargetKegiatan = [];
        foreach ($getKegiatan as $key => $tujuan) {
            $getMaxNilaiTargetKegiatan[] = json_decode($tujuan->nilai_target);
        }

        if ($getMaxNilaiTargetKegiatan != null) {
            $getMaxNilaiTargetKegiatan = max($getMaxNilaiTargetKegiatan);
        }


        $strategi = Strategi::where('proposal_id', $this->proposal->id)->get();
        $threat = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'T')->latest()->get();
        $dataKondisi = Kondisi::whereProposalId($this->proposal->id)->get();

        return view('livewire.proposal.show', [
            'analisisKondisi' => SurveyKondisi::where('proposal_id', $this->proposal->id)->first(),
            'strategi' => Strategi::where('proposal_id', $this->proposal->id)->first(),
            'penentuanRencana' => PenetuanRencana::where('proposal_id', $this->proposal->id)->get(),
            'analisies' => $analisies,
            'repondenCount' => Responden::where('proposal_id', $this->proposal->id)->count(),
            'kondisis' => $kondisi,
            'opportunities' => $oppotunity,
            'weakness' => $weakness,
            'surveyKondisis' => SurveyKondisi::where('proposal_id', $this->proposal->id)->orderBy('pengaruh', 'asc')->get(),
            'jumlahTdiS' => $jumlahTdiS,
            'jumlahOdiS' => $jumlahOdiS,
            'totalS' => $totalS,
            'jumlahTdiW' => $jumlahTdiW,
            'jumlahOdiW' => $jumlahOdiW,
            'totalW' => $totalW,
            'strategies' => $strategi,
            'threats' => $threat,
            'indikatorTujuan' => Tujuan::where('proposal_id', $this->proposal->id)->latest()->get(),
            'countPriode' => IndikatorTujuan::where('proposal_id', $this->proposal->id)->max('nilai_target'),
            'getMaxNilaiTarget' => $getMaxNilaiTarget,
            'indikatorKegiatan' => Kegiatan::where('proposal_id', $this->proposal->id)->latest()->get(),
            'getMaxNilaiTargetKegiatan' => $getMaxNilaiTargetKegiatan,
            'dataKondisi' => $dataKondisi,
            'dataPenentuanRencana' => PenetuanRencana::where('proposal_id', $this->proposal->id)->whereHas('dataSubKegiatan')->latest()->get(),
            'semuaStrategi' => Strategi::where('proposal_id', $this->proposal->id)->get(),

        ]);
    }
}
