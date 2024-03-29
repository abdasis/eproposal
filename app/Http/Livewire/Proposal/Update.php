<?php

namespace App\Http\Livewire\Proposal;

use App\Models\Proposal;
use Livewire\Component;

class Update extends Component
{
    public $judul, $latar_belakang, $provinsi, $kabupaten, $kecamatan, $desa, $dusun, $rtrw, $proposal_id, $permasalahan, $potensi;


    public function mount($id)
    {
        $proposal = Proposal::find($id);
        $this->judul = $proposal->judul;
        $this->latar_belakang = $proposal->latar_belakang;
        $this->provinsi = $proposal->provinsi;
        $this->kabupaten = $proposal->kabupaten;
        $this->kecamatan = $proposal->kecamatan;
        $this->desa = $proposal->desa;
        $this->dusun = $proposal->dusun;
        $this->rtrw = $proposal->rtrw;
        $this->proposal_id = $proposal->id;
    }
    public function update()
    {
        $proposal = Proposal::find($this->proposal_id);
        $proposal->judul = $this->judul;
        $proposal->latar_belakang = $this->latar_belakang;
        $proposal->provinsi = $this->provinsi;
        $proposal->potensi = $this->potensi;
        $proposal->permasalahaan = $this->permasalahan;
        $proposal->kecamatan = $this->kecamatan;
        $proposal->kabupaten = $this->kabupaten;
        $proposal->desa = $this->desa;
        $proposal->dusun = $this->dusun;
        $proposal->rtrw = $this->rtrw;
        $proposal->dibuat_oleh = \Auth::id();
        $proposal->save();
        $this->emit('success', $proposal);
    }


    public function render()
    {
        return view('livewire.proposal.update');
    }
}
