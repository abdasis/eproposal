<?php

namespace App\Http\Livewire\User;

use App\Models\Pengaruh;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $password, $nama, $email, $password_confirmation;
    public function rules()
    {
        return [
            'nama' => 'required',
            'email' => 'email',
            'password' => 'required|confirmed|min:8'
        ];
    }
    public function store()
    {
        $this->validate();
        $pengguna = new User();
        $pengguna->name = $this->nama;
        $pengguna->email = $this->email;
        $pengguna->password = Hash::make($this->password);
        $pengguna->roles = 'fpm';
        $pengguna->save();
        $this->alert('success', 'Pengguna Baru Berhasil Ditambahkan');
    }
    public function render()
    {
        return view('livewire.user.create');
    }
}
