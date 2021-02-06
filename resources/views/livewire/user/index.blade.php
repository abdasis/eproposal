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
        <div class="col-md-12">
            <div class="mb-2">
                <a href="{{ route('pengguna.create') }}">
                    <button class="btn btn-primary shadow-none">Tambah Pengguna</button>
                </a>
            </div>
            <div class="card">
                <div class="card-header bg-white border-bottom">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Data Semua Pengguna</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url()->previous() }}">
                                <button class="btn btn-light btn-sm float-right">Kembali</button>
                            </a>
                        </div>
                    </div>

                </div>
                <table class="table card-body table-bordered table-nowrap table-sm">
                    <thead class="thead-white bg-light">
                        <tr>
                            <th>No.</th>
                            <th>ID Pengguna</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Terdaftar</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($semuaPengguna as $key => $pengguna)
                        <tr>
                            <td class="align-middle" scope="row">{{ $key+1 }}</td>
                            <td class="align-middle text-wrap">{{ $pengguna->id }}</td>
                            <td class="align-middle text-wrap">{{ $pengguna->name }}</td>
                            <td class="align-middle">{{ $pengguna->email }}</td>
                            <td class="align-middle">{{ $pengguna->created_at }}</td>
                            <td class="align-middle text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('pengguna.update', $pengguna->id) }}">
                                        <button class="btn btn-sm btn-warning shadow-none mr-1"><i
                                                class="fa fa-user-edit"></i></button>
                                    </a>
                                    <button wire:click='delete({{ $pengguna->id }})'
                                        class="btn btn-danger btn-sm shadow-none">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
