<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Analisys</a></li>
                        <li class="breadcrumb-item active">Kondisi</li>
                    </ol>
                </div>
                <h4 class="page-title">Buat Survey</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">
                    Tambah Data Kondisi
                </h5>

                <div class="card-body">
                    <form wire:submit.prevent='store'>
                        <div class="form-group">
                            <label for="jenis_kondisi">Jenis Kondisi</label>
                            <select class="custom-select" wire:model="jenis_kondisi" id="jenis_kondisi">
                                <option selected>Pilih Kondisi</option>
                                <option value="Baik">Baik</option>
                                <option value="Tidak Baik">Tidak Baik</option>
                            </select>
                        </div>

                        <div class="form-group">
                          <label for="kondisi">Kondisi</label>
                          <input type="text" wire:model="kondisi" id="kondisi" class="form-control" placeholder="Masukan Kondisi" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                          <label for="penyebab_langsung">Penyebab Langsung</label>
                          <input type="text" wire:model="penyebab_langsung" id="penyebab_langsung" class="form-control" placeholder="Masukan Penyebab Langsun" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                            <label for="swot">S, W, O dan T</label>
                            <select class="custom-select" wire:model="swot" id="swot">
                                <option selected>Pilih S, W, O dan T</option>
                                <option value="S">S</option>
                                <option value="W">W</option>
                                <option value="O">O</option>
                                <option value="T">T</option>
                            </select>
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
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header bg-header bg-white border-bottom">
                    KEKUATAN/STRENGTH (S)
                </h5>
                <div class="card-body">
                    <table class="table table-hover table-sm">
                        <thead class="thead-inverse">
                            <tr>
                                <th>No.</th>
                                <th>Jenis Kondisi</th>
                                <th>Penyebab Langsung</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($strengs as $key => $baik)
                                <tr>
                                    <td scope="row">{{ $key+1 }}</td>
                                    <td>{{ $baik->kondisi }}</td>
                                    <td>{{ $baik->penyebab_langsung }}</td>
                                    <td>
                                        <button wire:click='deleteKondisi({{ $baik->id }})' class="btn btn-sm btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header bg-header bg-white border-bottom">
                    PELUANG/OPPORTUNITY (O)
                </h5>
                <div class="card-body">
                    <table class="table table-hover table-sm">
                        <thead class="thead-inverse">
                            <tr>
                                <th>No.</th>
                                <th>Jenis Kondisi</th>
                                <th>Penyebab Langsung</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($peluang as $key => $baik)
                                <tr>
                                    <td scope="row">{{ $key+1 }}</td>
                                    <td>{{ $baik->kondisi }}</td>
                                    <td>{{ $baik->penyebab_langsung }}</td>
                                    <td>
                                        <button wire:click='deleteKondisi({{ $baik->id }})' class="btn btn-sm btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header bg-header bg-white border-bottom">
                    KELEMAHAN/WEAKNES (W)
                </h5>
                <div class="card-body">
                    <table class="table table-hover table-sm">
                        <thead class="thead-inverse">
                            <tr>
                                <th>No.</th>
                                <th>Jenis Kondisi</th>
                                <th>Penyebab Langsung</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($weaks as $key => $baik)
                                <tr>
                                    <td scope="row">{{ $key+1 }}</td>
                                    <td>{{ $baik->kondisi }}</td>
                                    <td>{{ $baik->penyebab_langsung }}</td>
                                    <td>
                                        <button wire:click='deleteKondisi({{ $baik->id }})' class="btn btn-sm btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header bg-header bg-white border-bottom">
                    TANTANGAN/THREAT (T)
                </h5>
                <div class="card-body">
                    <table class="table table-hover table-sm">
                        <thead class="thead-inverse">
                            <tr>
                                <th>No.</th>
                                <th>Jenis Kondisi</th>
                                <th>Penyebab Langsung</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($tantangan as $key => $baik)
                                <tr>
                                    <td scope="row">{{ $key+1 }}</td>
                                    <td>{{ $baik->kondisi }}</td>
                                    <td>{{ $baik->penyebab_langsung }}</td>
                                    <td>
                                        <button wire:click='deleteKondisi({{ $baik->id }})' class="btn btn-sm btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
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
        Livewire.on('success', function(){
            Swal.fire(
                'Good job!',
                'Data berhasil disimpan!',
                'success'
            )
        })
    </script>
@endpush
