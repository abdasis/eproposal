<?php

namespace App\Http\Livewire\Proposal;

use App\Models\Proposal;
use Livewire\Component;
use Prophecy\Prophet;

class Index extends Component
{
    protected $listeners = [
        'confirmed',
        'cancelled',
    ];

    public $proposal_id;

    public function delete($id)
    {
        $this->confirm('Apa anda yakin?', [
            'toast' => false,
            'text' => 'Data yang dihapus tidak dapat dikembalikan',
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Tidak',
            'onConfirmed' => 'confirmed',
            'onCancelled' => 'cancelled'
        ]);
        $this->proposal_id = $id;
    }
    public function confirmed()
    {
        $proposal = Proposal::find($this->proposal_id);
        $proposal->delete();
        $this->alert('success', 'Data berhasil dihapus');
    }
    public function cancelled()
    {
        $this->alert('info', 'Data tidak jadi dihapus');
    }
    public function render()
    {
        return view('livewire.proposal.index', [
            'proposals' => Proposal::latest()->get()
        ]);
    }
}
