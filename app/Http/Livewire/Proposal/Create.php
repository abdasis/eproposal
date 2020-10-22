<?php

namespace App\Http\Livewire\Proposal;

use Livewire\Component;

class Create extends Component
{
    public $judul, $latar_belakang, $provinsi, $kabupaten, $kecamatan, $desa, $dusun, $rtrw;
    public function render()
    {
        return view('livewire.proposal.create');
    }
}
