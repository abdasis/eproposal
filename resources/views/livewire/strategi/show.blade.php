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
                <h4 class="page-title">Lihat Killerweaknes</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info">
                <h5>Petunjuk:</h5>
                <ol type="1" class="pl-2">
                    <li>Dengan memanfaatkan Tabel V, FPM menentukan Killer Weakneses serta Skor Tertinggi Skor S-W (Gunakan FORM IV)</li>
                    <li>Hasil dari FORM IV dimasukkan ke Tabel berikut </li>
                </ol>
            </div>
        </div>

        <div class="col-md-12 ">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">
                    Lihat Killerweaknes
                </h5>
                <div class="card-body">
                    <p>Berdasarkan hasil survei di atas dapat diketahui bahwa:</p>
                    <table class="table table-bordered table-sm">
                        <tbody>
                            <tr>
                                <th colspan="5">Killer weakness proyek “{{ $proposal->judul }}” adalah:</th>
                            </tr>
                            <tr>
                                <td>KW 1</td>
                                <td>{{ $strategi->kw1 }}</td>
                                <td>Tujuan Prioritas 1</td>
                                <td>{{ $strategi->tujuan_1 }}</td>
                            </tr>
                            <tr>
                                <td>KW 2</td>
                                <td>{{ $strategi->kw2 }}</td>
                                <td>Tujuan Prioritas 1</td>
                                <td>{{ $strategi->tujuan_2 }}</td>
                            </tr>

                            <tr>
                                <th colspan="5">Sementara itu, Skor Tertinggi Skor S-W</th>
                            </tr>

                            <tr>
                                <td>S-W 1</td>
                                <td>{{ $strategi->sw1 }}</td>
                                <td>Tujuan Prioritas 1</td>
                                <td>{{ $strategi->tujuan_3 }}</td>
                            </tr>

                            <tr>
                                <td>S-W 2</td>
                                <td>{{ $strategi->sw2 }}</td>
                                <td>Tujuan Prioritas 1</td>
                                <td>{{ $strategi->tujuan_4 }}</td>
                            </tr>

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
