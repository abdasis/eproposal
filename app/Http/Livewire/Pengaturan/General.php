<?php

namespace App\Http\Livewire\Pengaturan;

use App\Models\Site;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class General extends Component
{
    use LivewireAlert;

    public $ttd;

    protected $rules = [
        'ttd' => 'required',
    ];

    public function mount()
    {
        $pengaturan = Site::first();
        $this->ttd = $pengaturan->ttd;
    }
    public function simpan()
    {
        $this->validate();
        $pengaturan = Site::first();
        $pengaturan->ttd = $this->ttd;
        $pengaturan->save();
        $this->alert('success', 'Data berhasil disimpan');
    }
    public function render()
    {
        return view('livewire.pengaturan.general');
    }
}
