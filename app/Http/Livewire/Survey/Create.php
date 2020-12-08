<?php

namespace App\Http\Livewire\Survey;

use App\Models\Analisys;
use App\Models\Proposal;
use App\Models\Responden;
use App\Models\Survey;
use Livewire\Component;

class Create extends Component
{
    public $proposal;
    public  $nama, $usia, $jenis_kelamin, $pekerjaan, $status, $pendidikan;
    public $tingkat_kepentingan, $tingkat_pengaruh, $anggota_id, $nama_anggota;


    public function mount($proposal_id)
    {
        $this->proposal = Proposal::find($proposal_id);
        foreach ($this->proposal->anggotas as $key => $anggota) {
            $this->anggota_id[$key] = $anggota->id;
            $this->nama_anggota[$key]  = $anggota->nama;
        }
    }

    public function store()
    {

        $responden = new Responden();
        $responden->nama = $this->nama;
        $responden->usia = $this->usia;
        $responden->jenis_kelamin = $this->jenis_kelamin;
        $responden->pekerjaan = $this->pekerjaan;
        $responden->status = $this->status;
        $responden->pendidikan = $this->pendidikan;
        $this->proposal->respondens()->save($responden);
        $responden->save();
        $responden_id = Responden::find($responden->id);
        foreach ($this->proposal->anggotas as $key => $pengaruh) {
            $analisys = new Analisys();
            $analisys->tingkat_kepentingan = $this->tingkat_kepentingan[$key];
            $analisys->tingkat_pengaruh = $this->tingkat_pengaruh[$key];
            $analisys->proposal_id = $this->proposal->id;
            $analisys->anggota_id = $this->anggota_id[$key];
            $analisys->nama_anggota = $this->nama_anggota[$key];
            $analisys->responden_id = $responden_id->id;
            $analisys->save();
        }

        $this->emit('success', ['title' => 'Mantap Bro', 'message' => 'Data berhasil diamankan broh!!!']);
    }
    public function render()
    {
        return view('livewire.survey.create');
    }
}
