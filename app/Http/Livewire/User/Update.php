<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Update extends Component
{

    public $password, $nama, $email, $password_confirmation, $pengguna_id, $roles;

    public function rules()
    {
        return [
            'nama' => 'required',
            'email' => 'email',
            'password' => 'confirmed',
            'roles' => 'required'
        ];
    }

    public function mount($id)
    {
        $pengguna = User::find($id);
        $this->nama = $pengguna->name;
        $this->email = $pengguna->email;
        $this->pengguna_id = $pengguna->id;
        $this->roles = $pengguna->roles;
    }

    public function update()
    {
        $pengguna = User::find($this->pengguna_id);
        $pengguna->name = $this->nama;
        $pengguna->email = $this->email;
        $pengguna->password = $this->password == null ? $pengguna->password : Hash::make($this->password);
        $pengguna->roles = $this->roles;
        $pengguna->save();
        $this->alert('success', 'Data Berhasil Diupdate');
    }
    public function render()
    {
        return view('livewire.user.update');
    }
}
