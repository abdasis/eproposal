<?php

namespace App\Http\Livewire\Anggota;

use App\Models\Anggota;
use App\Models\Proposal;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Create extends Component
{
    public $proposal, $golongan, $nama;
    public function mount($proposal_id)
    {
        $this->proposal = Proposal::find($proposal_id);

    }

    public function rules()
    {
        return [
            'golongan' => 'required',
            'nama' => 'required'
        ];
    }

    public function store()
    {
        try {
            DB::beginTransaction();
            $this->validate();
            $anggota = new Anggota();
            $anggota->golongan = $this->golongan;
            $anggota->nama = $this->nama;
            $this->proposal->anggotas()->save($anggota);
            $this->proposal->status_tahap = '2';
            $this->proposal->save();
            $anggota->save();
            DB::commit();
            $this->emit('success', ['title' => 'Success', 'message' => 'Anggota Berhasil Disimpan']);
            $this->resetInput();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function resetInput()
    {
        $this->golongan = null;
        $this->nama = null;
    }

    public function deleteAnggota($anggota_id)
    {
        $anggota = Anggota::find($anggota_id)->delete();
        if ($anggota) {
            $this->emit('success', ['title' => 'Success', 'message' => 'Data berhasil dihapus']);
        }
    }
    public function render()
    {
        return view('livewire.anggota.create', [
            'pemerintah' => Anggota::where('proposal_id', $this->proposal->id)->where('golongan', 'Pihak Pemerintah')->latest()->get(),
            'pengusaha' => Anggota::where('proposal_id', $this->proposal->id)->where('golongan', 'Pihak Pengusaha / Swasta')->latest()->get(),
            'individu' => Anggota::where('proposal_id', $this->proposal->id)->where('golongan', 'Pihak Individu Masyarakat')->latest()->get(),
            'masyarakat' => Anggota::where('proposal_id', $this->proposal->id)->where('golongan', 'Pihak Lembaga/Organisasi di Masyarakat')->latest()->get(),
            'akademisi' => Anggota::where('proposal_id', $this->proposal->id)->where('golongan', 'Pihak Akademisi')->latest()->get(),
        ]);
    }
}
