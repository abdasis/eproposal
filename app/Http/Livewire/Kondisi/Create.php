<?php

namespace App\Http\Livewire\Kondisi;

use App\Models\Kondisi;
use App\Models\Proposal;
use Livewire\Component;

class Create extends Component
{
    public  $proposal_id;
    public $jenis_kondisi, $penyebab_langsung, $swot, $kondisi;
    public function mount($proposal_id )
    {
        $this->proposal_id = $proposal_id;
    }

    public function store()
    {
        $kondisi = new Kondisi();
        $kondisi->kondisi = $this->kondisi;
        $kondisi->jenis_kondisi = $this->jenis_kondisi;
        $kondisi->penyebab_langsung = $this->penyebab_langsung;
        $kondisi->swot = $this->swot;
        $kondisi->proposal_id = $this->proposal_id;
        $kondisi->save();

        if ($kondisi) {
            $proposal = Proposal::find($this->proposal_id);
            $proposal->status_tahap = '4';
            $proposal->save();
        }

        $this->emit('success');
    }

    public function deleteKondisi($id)
    {
        $kondisi = Kondisi::find($id);
        $kondisi->delete();
        $this->emit('success');
    }
    public function render()
    {
        $kondisiBaik = Kondisi::where('proposal_id', $this->proposal_id)->where('jenis_kondisi', 'Baik')->latest()->get();
        $kondisiTidakBaik = Kondisi::where('proposal_id', $this->proposal_id)->where('jenis_kondisi', 'Tidak Baik')->latest()->get();
        $streng = Kondisi::where('proposal_id', $this->proposal_id)->where('swot', 'S')->get();
        $weak = Kondisi::where('proposal_id', $this->proposal_id)->where('swot', 'W')->get();
        $peluang = Kondisi::where('proposal_id', $this->proposal_id)->where('swot', 'O')->get();
        $tantangan = Kondisi::where('proposal_id', $this->proposal_id)->where('swot', 'T')->get();
        return view('livewire.kondisi.create',[
            'strengs' => $streng,
            'weaks' => $weak,
            'peluang' => $peluang,
            'tantangan' => $tantangan,
            'kondisiBaik' => $kondisiBaik,
            'kondisiTidakBaik' => $kondisiTidakBaik
        ]);
    }
}
