<?php

namespace App\Http\Livewire\Strategi;

use App\Models\Proposal;
use App\Models\Strategi;
use Livewire\Component;

class Create extends Component
{
    public $proposal;
    public $jenis, $kondisi, $tujuan;
    public $strategi_id;

    protected $listeners = [
        'confirmed',
        'cancelled',
    ];
    public function mount($proposal_id)
    {
        $this->proposal = Proposal::find($proposal_id);
    }

    public function store()
    {
        $strategi = new Strategi();
        $strategi->jenis = $this->jenis;
        $strategi->kondisi = $this->kondisi;
        $strategi->tujuan = $this->tujuan;
        $strategi->proposal_id = $this->proposal->id;
        $strategi->save();
        $this->alert('success', 'Data Berhasil Ditambahkan');
    }

    public function delete($id)
    {
        $this->confirm('Yakin hapus data ini?', [
            'toast' => false,
            'text' => 'Data yang dihapus tidak dapat di kembalikan lagi',
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Tidak',
            'onConfirmed' => 'confirmed',
            'onCancelled' => 'cancelled'
        ]);

        $this->strategi_id = $id;
    }

    public function confirmed()
    {
        if ($this->strategi_id){
            Strategi::find($this->strategi_id)->delete();
            $this->alert('success', 'Data berhasil dihapus');
        }
    }

    public function cancelled()
    {
        return;
    }
    public function render()
    {
        return view('livewire.strategi.create',[
            'semuaStrategi' => Strategi::where('proposal_id', $this->proposal->id)->get(),
        ]);
    }
}
