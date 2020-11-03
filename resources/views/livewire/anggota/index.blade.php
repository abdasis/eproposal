<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Stackholder</a></li>
                        <li class="breadcrumb-item active">Daftar Stackholder</li>
                    </ol>
                </div>
                <h4 class="page-title">List Stackholder</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-1">
            <div class="alert alert-info">Untuk melihat semua anggota silahkan klik tanda icon <button class="btn btn-sm btn-outline-blue"><i class="fa fa-user-friends"></i></button> pada daftar proposal yang disediakan</div>
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
                                <th>Dibuat Pada</th>
                                <th>Tahapan</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($proposals  as $key => $proposal)
                                <tr>
                                    <td class="align-middle" scope="row">{{ $key+1 }}</td>
                                    <td class="align-middle">{{ $proposal->judul }}</td>
                                    <td class="align-middle">{{ $proposal->created_at }}</td>
                                    <td class="align-middle">Tahap ke-{{ $proposal->status_tahap }}</td>
                                    <td class="align-middle text-center">

                                        <a href="{{ route('anggota.create', $proposal->id) }}">
                                            <button class="btn btn-sm btn-outline-blue"><i class="fa fa-user-friends"></i></button>
                                        </a>
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
