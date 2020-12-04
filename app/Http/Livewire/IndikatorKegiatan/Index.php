<?php

namespace App\Http\Livewire\IndikatorKegiatan;

use App\Models\IndikatorKegiatan;
use App\Models\IndikatorTujuan;
use App\Models\Kondisi;
use App\Models\Proposal;
use App\Models\Strategi;
use Livewire\Component;

class Index extends Component
{
    public $proposal;
    public $tujuan_prioritas, $nomor_kegiatan, $kegiatan,  $kinerja_kegiatan, $nilai_awal, $nilai_akhir;
    public function mount($proposal_id)
    {
        $this->proposal = Proposal::find($proposal_id);
    }

    public function store()
    {
        $indikatorKegiatan = new IndikatorKegiatan();
        $indikatorKegiatan->tujuan_prioritas = $this->tujuan_prioritas;
        $indikatorKegiatan->no_kegiatan = $this->nomor_kegiatan;
        $indikatorKegiatan->kegiaatan = $this->kegiatan;
        $indikatorKegiatan->indikator_kinerja = $this->kinerja_kegiatan;
        $indikatorKegiatan->nilai_awal = $this->nilai_awal;
        $indikatorKegiatan->nilai_target = json_encode($this->nilai_akhir);
        $indikatorKegiatan->save();
        $this->emit('success', ['title' => 'Berhasil', 'message' => 'Data berhasil di simpan']);
    }


    public function render()
    {
        $strategi = Strategi::all();
        $threat = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'T')->latest()->get();
        return view('livewire.indikator-kegiatan.index', [
            'strategies' => $strategi,
            'threats' => $threat,
            'indikatorKegiatan' => IndikatorKegiatan::latest()->get(),
        ]);
    }
}
