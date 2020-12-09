<?php

namespace App\Http\Livewire\IndikatorTujuan;

use App\Models\IndikatorTujuan;
use App\Models\Kondisi;
use App\Models\Proposal;
use App\Models\Strategi;
use App\Models\TargetThreat;
use Livewire\Component;

class Index extends Component
{
    public $proposal;
    public $tujuan, $indikator_tujuan, $nilai_awal, $nilai_akhir, $threat;
    public function mount($proposal_id)
    {
        $this->proposal = Proposal::find($proposal_id);
    }

    public function store()
    {

        $indikatorTujuan = new IndikatorTujuan();
        $indikatorTujuan->tujuan_prioritas = $this->tujuan;
        $indikatorTujuan->indikator_kinerja = $this->indikator_tujuan;
        $indikatorTujuan->nilai_target = json_encode($this->nilai_akhir);
        $indikatorTujuan->nilai_awal = $this->nilai_awal;
        $indikatorTujuan->proposal_id = $this->proposal->id;
        $indikatorTujuan->save();

        $this->formReset();
        $this->emit('success', ['title' => 'Berhasil', 'message' => 'Data Berhasil disimpan']);
    }

    public function formReset()
    {
        $this->tujuan = null;
        $this->indikator_tujuan = null;
        $this->nilai_awal = null;
        $this->threat = null;
        $this->nilai_awal = null;
        $this->nilai_akhir = null;
    }


    public function render()
    {
        $strategi = Strategi::where('proposal_id', $this->proposal->id)->get();
        $threat = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'T')->latest()->get();

        return view('livewire.indikator-tujuan.index', [
            'strategies' => $strategi,
            'threats' => $threat,
            'indikatorTujuan' => IndikatorTujuan::where('proposal_id', $this->proposal->id)->latest()->get(),
        ]);
    }
}
