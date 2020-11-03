<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Stakeholders</a></li>
                        <li class="breadcrumb-item active">Tambah Stackholder</li>
                    </ol>
                </div>
                <h4 class="page-title">Tambah Stackholder</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">
                    Tambah Stackholder
                </h5>
                <div class="card-body">
                    <form wire:submit.prevent='store'>
                        <div class="form-group">
                            <label for="golongan">Golongan</label>
                            <select class="custom-select @error('golongan') is-invalid @enderror" wire:model="golongan" id="golongan">
                                <option selected>Pilih Golongan</option>
                                <option value="Pihak Pemerintah">Pihak Pemerintah</option>
                                <option value="Pihak Pengusaha / Swasta">Pihak Pengusaha / Swasta</option>
                                <option value="Pihak Individu Masyarakat">Pihak Individu Masyarakat</option>
                                <option value="Pihak Lembaga/Organisasi di Masyarakat">Pihak Lembaga/Organisasi di Masyarakat</option>
                                <option value="Pihak Akademisi">Pihak Akademisi</option>
                            </select>
                            @error('golongan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="nama">Jabatan / Nama lembaga/Individu</label>
                          <input type="text" class="form-control @error('nama') is-invalid @enderror" wire:model="nama" id="nama" aria-describedby="jabatan" placeholder="Masukan Nama">
                          <small id="jabatan" class="form-text text-muted">Masukan nama jika individu, masukan jabatan jika golongan Pemerintah</small>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-outline-info">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">Pihak Pemerintah</h5>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Jabatan / Nama lembaga/Individu</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemerintah as $key => $anggotaPemerintah)
                            <tr>
                                <td scope="row">{{ $key+1 }}</td>
                                <td>{{ $anggotaPemerintah->nama }}</td>
                                <td>
                                    <button onclick="confirm('Confirm delete?') || event.stopImmediatePropagation()" wire:click='deleteAnggota({{ $anggotaPemerintah->id }})' class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">Pihak Pengusaha / Swasta</h5>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Jabatan / Nama lembaga/Individu</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengusaha as $key => $anggotaPengusaha)
                            <tr>
                                <td scope="row">{{ $key+1 }}</td>
                                <td>{{ $anggotaPengusaha->nama }}</td>
                                <td>
                                    <button onclick="confirm('Confirm delete?') || event.stopImmediatePropagation()" wire:click='deleteAnggota({{ $anggotaPengusaha->id }})' class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">Pihak Individu Masyarakat</h5>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Jabatan / Nama lembaga/Individu</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($individu as $key => $anggotaIndividu)
                            <tr>
                                <td scope="row">{{ $key+1 }}</td>
                                <td>{{ $anggotaIndividu->nama }}</td>
                                <td>
                                    <button onclick="confirm('Confirm delete?') || event.stopImmediatePropagation()" wire:click='deleteAnggota({{ $anggotaIndividu->id }})' class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">Pihak Lembaga/Organisasi di Masyarakat</h5>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Jabatan / Nama lembaga/Individu</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($masyarakat as $key => $anggotaMasyarakat)
                            <tr>
                                <td scope="row">{{ $key+1 }}</td>
                                <td>{{ $anggotaMasyarakat->nama }}</td>
                                <td>
                                    <button onclick="confirm('Confirm delete?') || event.stopImmediatePropagation()" wire:click='deleteAnggota({{ $anggotaMasyarakat->id }})' class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">Pihak Akademisi</h5>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Jabatan / Nama lembaga/Individu</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($akademisi as $key => $anggotaAkademisi)
                            <tr>
                                <td scope="row">{{ $key+1 }}</td>
                                <td>{{ $anggotaAkademisi->nama }}</td>
                                <td>
                                    <button onclick="confirm('Confirm delete?') || event.stopImmediatePropagation()" wire:click='deleteAnggota({{ $anggotaAkademisi->id }})' class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@push('js')
   <script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
        height: 500,
        setup: function(editor){
            editor.on('keydown', function(e){
                @this.set('latar_belakang', tinymce.activeEditor.getContent())
            })
        }
    });

    Livewire.on('success', params => {
        Swal.fire(
            params['title'],
            params['message'],
            'success'
        )
    })
    </script>
@endpush
