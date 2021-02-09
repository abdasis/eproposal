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
                <h4 class="page-title">Catat Strategi</h4>
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
                    Buat Strategi
                </h5>
                <div class="card-body">
                    <p>Berdasarkan hasil survei di atas dapat diketahui bahwa:</p>
                    <form wire:submit.prevent ='store'>
                        <h5>Killer weakness proyek “{{ $proposal->judul }}” adalah:</h5>
                        <div class="form-group-custom form-row align-items-center">
                            <div class="col my-1">
                                <input wire:model='killerweakness_kw' type="text" class="form-control shadow-none">
                            </div>
                            <div class="col-auto my-1">
                                <label class="form-check-label mx-auto">
                                    KW
                                </label>
                            </div>
                            <div class="col my-1">
                                <input type="text" wire:model='kw' class="form-control shadow-none">
                            </div>
                            <div class="col-auto my-1">
                                <label class="form-check-label mx-auto">
                                    Tujuan Prioritas
                                </label>
                            </div>
                            <div class="col my-1">
                                <input type="text" wire:model='tujuan_kw' class="form-control shadow-none">
                            </div>
                        </div>

                        <h5>
                            Sementara itu, Skor Tertinggi Skor S-W
                        </h5>

                        <div class="form-group-custom form-row align-items-center">
                            <div class="col my-1">
                                <input wire:model='killerweakness_sw' type="text" class="form-control shadow-none">
                            </div>
                            <div class="col-auto my-1">
                                <label class="form-check-label mx-auto">
                                    SW
                                </label>
                            </div>
                            <div class="col my-1">
                                <input type="text" wire:model='sw' class="form-control shadow-none">
                            </div>
                            <div class="col-auto my-1">
                                <label class="form-check-label mx-auto">
                                    Tujuan Prioritas
                                </label>
                            </div>
                            <div class="col my-1">
                                <input type="text" wire:model='tujuan_sw' class="form-control shadow-none">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-blue float-right shadow-none">Simpan Strategi</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white border-bottom">Data Semua Strategi Prioritas</div>
                <div class="card-body">
                    <table class="table table-bordered table-sm">
                        <tr>
                            <th colspan="5">Killer weakness proyek “{{ $proposal->judul }}” adalah:</th>
                        </tr>
                        @foreach($semuaStrategi as $key => $strategi)
                        <tr>
                            <th>KW {{$key+1}} </th>
                            <th>{{$strategi->kw}}</th>
                            <th>Tujuan Prioritas {{$key+1}}</th>
                            <th>{{$strategi->tujuan_kw}}</th>
                        </tr>
                        @endforeach
                        <tr>
                            <th colspan="5">Semetara Skor Tertinggi S-W</th>
                        </tr>
                        @foreach($semuaStrategi as $key => $strategi)
                            <tr>
                                <th>S-W {{$key+1}} </th>
                                <th>{{$strategi->sw}}</th>
                                <th>Tujuan Prioritas {{$key+1}}</th>
                                <th>{{$strategi->tujuan_sw}}</th>
                            </tr>
                        @endforeach
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
