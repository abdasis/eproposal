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
                <h4 class="page-title">Hasil Analisis Stakeholders</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">
                    List Semua Survey
                </h5>
                <div class="card-body">
                    <table class="table table-bordered table-sm">
                        <thead class="thead-default">
                            <tr>
                                <th>No</th>
                                <th>Jabatan / Nama lembaga/Individu</th>
                                <th>Rata-rata tingkat pengaruh</th>
                                <th>Rata-rata tingkat kepentingan</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($analisies as $key => $analisys)
                                <tr>
                                    <td scope="row">{{ $key+1 }}</td>
                                    <td>{{ $analisys->nama_anggota }}</td>
                                    <td>{{ $analisys->tingkat_kepentingan }}</td>
                                    <td>{{ $analisys->tingkat_pengaruh }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
