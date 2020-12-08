<?php

namespace App\Http\Livewire\Proposal;

use App\Models\Analisys;
use App\Models\IndikatorTujuan;
use App\Models\Kegiatan;
use App\Models\Kondisi;
use App\Models\PenetuanRencana;
use App\Models\Proposal;
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
        $totalSW = $totalS+$totalW;
        $analisies = Analisys::groupBy('nama_anggota')
        ->selectRaw('sum(tingkat_pengaruh) as tingkat_pengaruh, sum(tingkat_kepentingan) as tingkat_kepentingan, sum(tingkat_pengaruh+tingkat_kepentingan) as total,nama_anggota')
        ->get();


        return view('livewire.proposal.show',[
            'analisisKondisi' => SurveyKondisi::where('proposal_id', $this->proposal->id)->first(),
            'kondisis' => $kondisi,
            'opportunities' => $oppotunity,
            'threats' => $threat,
            'weakness' => $weakness,
            'surveyKondisis' => SurveyKondisi::where('proposal_id', $this->proposal->id)->get(),
            'totalS' => $totalS,
            'totalW' => $totalW,
            'totalSW' => $totalSW,
            'analisies' => $analisies,
            'strategi' => Strategi::where('proposal_id', $this->proposal->id)->first(),
            'indikatorTujuan' => IndikatorTujuan::where('proposal_id', $this->proposal->id)->get(),
            'indikatorKegiatan' => Kegiatan::latest()->get(),
            'penentuanRencana' => PenetuanRencana::where('proposal_id', $this->proposal->id)->get(),
        ]);
    }
}
