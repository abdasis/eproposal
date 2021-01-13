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
            <a href="{{ route('proposal.tambah-proposal') }}">
                <button class="btn btn-blue waves-effect"><i class="fa fa-plus"></i>Tambah Proposal</button>
            </a>
        </div>
        <div class="col-md-12">
            <div class="card  p-0">
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
                <table class="card-body table table-wrap table-sm">
                    <thead class="thead-white bg-light">
                        <tr>
                            <th>No.</th>
                            <th>Judul Proposal</th>
                            <th>Desa</th>
                            <th>Dusun</th>
                            <th>Potensi Lokal</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proposals as $key => $proposal)
                        <tr>
                            <td class="align-middle" scope="row">{{ $key+1 }}</td>
                            <td class="align-middle">{{ $proposal->judul }}</td>
                            <td class="align-middle">{{ $proposal->desa }}</td>
                            <td class="align-middle">{{ $proposal->dusun }}</td>
                            <td class="align-middle">{{ Str::limit(strip_tags($proposal->latar_belakang), 150, '...') }}
                            </td>
                            <td class="align-middle text-center text-nowrap">
                                <div class="btn-group-justified" role="group" aria-label="Basic example">
                                    <a href="{{ route('proposal.lihat-proposal', $proposal->id) }}">
                                        <button class="btn btn-sm mb-1 btn-outline-blue"><i
                                                class="fa fa-eye"></i></button>
                                    </a>
                                    <a href="{{ route('proposal.update-proposal', $proposal->id) }}">
                                        <button class="btn btn-sm mb-1 btn-outline-warning"><i
                                                class="fa fa-edit"></i></button>
                                    </a>
                                    <button class="btn btn-sm mb-1 shadow-none btn-danger"><i
                                            class="fa fa-trash-alt"></i></button>
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
