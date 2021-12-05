<?php

namespace App\Http\Livewire\Proposal;

use App\Models\Proposal;
use Livewire\Component;

class Create extends Component
{
    public $judul, $latar_belakang, $provinsi, $kabupaten, $kecamatan, $desa, $dusun, $rtrw, $permasalahan, $potensi;

    public function store()
    {
        $proposal = new Proposal();
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
        $this->reset();
    }

    public function resetInput()
    {
        $this->judul = null;
        $this->latar_belakang = null;
        $this->provinsi = null;
        $this->kabupaten = null;
        $this->kecamatan = null;
        $this->desa = null;
        $this->dusun = null;
        $this->rtrw = null;
    }
    public function render()
    {
        return view('livewire.proposal.create');
    }
}
