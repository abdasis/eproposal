<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pengguna</a></li>
                        <li class="breadcrumb-item active">Semua Pengguna</li>
                    </ol>
                </div>
                <h4 class="page-title">Semua Pengguna</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-2">
                <div class="alert alert-success">Data pengguna digunakan untuk masuk halaman Dashboard silahkan
                    daftarkan
                    orang-orang tertentu untuk dapat melihat halaman dashboard
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-white border-bottom">Form Pendaftaran Pengguna</div>
                <div class="card-body">
                    <form wire:submit.prevent='update'>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" wire:model="nama" id="nama" class="form-control shadow-none"
                                placeholder="Masukan Nama Lengkap">
                            @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" wire:model="email" id="email" class="form-control shadow-none"
                                placeholder="Masukan Email">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" wire:model="password" id="password" class="form-control shadow-none"
                                placeholder="Masukan Password">
                            @error('password')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Password</label>
                            <input type="password" wire:model="password_confirmation" id="password_confirmation"
                                class="form-control shadow-none" placeholder="Masukan Password">
                            @error('password_confirmation')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Roles</label>
                            <select name="" class="form-select" wire:model="roles" id="">
                                <option value="">Pilih Roles</option>
                                <option value="admin">ADMINISTRATOR</option>
                                <option value="fpm">FPM</option>
                            </select>
                            @error('roles')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary shadow-none">Tambah Pengguna</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
