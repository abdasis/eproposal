<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Analisys</a></li>
                        <li class="breadcrumb-item active">Daftar Analisys</li>
                    </ol>
                </div>
                <h4 class="page-title">Daftar Analisys</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-1">
            <div class="alert alert-info">Untuk melihat semua anggota silahkan klik tanda icon <button
                    class="btn btn-sm btn-outline-blue"><i class="fa fa-user-friends"></i></button> pada daftar proposal
                yang disediakan</div>
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
                <table class="table card-body table-bordered table-nowrap table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>No.</th>
                            <th>Judul Proposal</th>
                            <th>Link Survey</th>
                            <th>Dibuat Pada</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proposals as $key => $proposal)
                        <tr>
                            <td class="align-middle" scope="row">{{ $key+1 }}</td>
                            <td class="align-middle text-wrap">{{ $proposal->judul }}</td>
                            <td class="align-middle text-success">{{ route('survey.create', $proposal->id) }}</td>
                            <td class="align-middle">{{ $proposal->created_at }}</td>
                            <td class="align-middle text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('survey.index', $proposal->id) }}">
                                        <button class="btn btn-sm btn-outline-warning mr-1"><i
                                                class="fa fa-list"></i></button>
                                    </a>
                                    <a href="{{ route('survey.create', $proposal->id) }}">
                                        <button class="btn btn-sm btn-outline-danger"><i
                                                class="fa fa-chart-line"></i></button>
                                    </a>
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
