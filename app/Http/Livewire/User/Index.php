<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Index extends Component
{
    use LivewireAlert;
    public $pengguna_id;
    protected  $listeners = [
        'confirmed',
        'cancelled',
    ];
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
        $this->pengguna_id = $id;
    }

    public function confirmed()
    {
        $pengguna = User::find($this->pengguna_id);
        $pengguna->delete();
        $this->alert('success', 'Data Berhasil Dihapus');
    }

    public function cancelled()
    {
        return;
    }
    public function render()
    {
        $semuaPengguna = User::latest()->get();
        return view('livewire.user.index', [
            'semuaPengguna' => $semuaPengguna
        ]);
    }
}
