<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pengajuan</a></li>
                        <li class="breadcrumb-item active">Tahapan 1</li>
                    </ol>
                </div>
                <h4 class="page-title">Tahapan 1</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-2">
            <a href="{{ route('tahap-1.tambah-proposal') }}">
                <button class="btn btn-blue waves-effect"><i class="fa fa-plus mr-1"></i>Tambah Proposal</button>
            </a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white border-bottom">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Daftar Proposal yang Dibuat</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url()->previous() }}">
                                <button class="btn btn-light btn-sm float-right">Kembali</button>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-sm">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Judul Proposal</th>
                                <th>Desa</th>
                                <th>Dusun</th>
                                <th>Potensi Lokal</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($proposals  as $key => $proposal)
                                <tr>
                                    <td class="align-middle" scope="row">{{ $key+1 }}</td>
                                    <td class="align-middle">{{ $proposal->judul }}</td>
                                    <td class="align-middle">{{ $proposal->desa }}</td>
                                    <td class="align-middle">{{ $proposal->dusun }}</td>
                                    <td class="align-middle">{!! $proposal->latar_belakang  !!}</td>
                                    <td class="align-middle">
                                        <a href="{{ route('tahap-1.lihat-proposal', $proposal->id) }}">
                                            <button class="btn btn-sm btn-outline-blue"><i class="fa fa-eye"></i></button>
                                        </a>
                                        <a href="{{ route('tahap-1.update-proposal', $proposal->id) }}">
                                            <button class="btn btn-sm btn-outline-warning"><i class="fa fa-user-plus"></i></button>
                                        </a>
                                        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
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
