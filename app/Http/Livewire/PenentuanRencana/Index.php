<?php

namespace App\Http\Livewire\PenentuanRencana;

use App\Models\IndikatorKegiatan;
use App\Models\Kondisi;
use App\Models\PenetuanRencana;
use App\Models\Proposal;
use Livewire\Component;

class Index extends Component
{
    public $proposal;
    public $sub_kegiatan, $nomor_kegiatan, $sumber_daya, $penanggung_jawab, $jadwal;
    public function mount($proposal_id)
    {
        $this->proposal = Proposal::find($proposal_id);
    }

    public function store()
    {
        $penentuanRencana = new PenetuanRencana();
        $penentuanRencana->sub_kegiatan = $this->sub_kegiatan;
        $penentuanRencana->nomor_kegiatan = $this->nomor_kegiatan;
        $penentuanRencana->sumber_daya = $this->sumber_daya;
        $penentuanRencana->penanggung_jawab = $this->penanggung_jawab;
        $penentuanRencana->jadwal = json_encode($this->jadwal);
        $penentuanRencana->proposal_id = $this->proposal->id;
        $penentuanRencana->save();
        $this->emit('success', ['title' => 'Berhasil', 'message' => 'Data berhasil disimpan!']);
    }

    public function render()
    {
        $threat = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'T')->latest()->get();
        return view('livewire.penentuan-rencana.index',[
            'indikatorKegiatan' => IndikatorKegiatan::latest()->get(),
            'penentuanRencana' => PenetuanRencana::latest()->get(),

            'threats' => $threat,
        ]);
    }
}
