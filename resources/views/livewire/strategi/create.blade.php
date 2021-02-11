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
                        <div class="form-group">
                            <select wire:model="jenis" id="" class="custom-select shadow-none">
                                <option value="">Pilih Kondisi</option>
                                <option value="KW">KW</option>
                                <option value="S-W">S-W</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Kondisi</label>
                            <input type="text" name="kondisi" wire:model="kondisi" class="form-control shadow-none" placeholder="Masukan Kondisi" id="">
                        </div>

                        <div class="form-group">
                            <label for="">Tujuan</label>
                            <input type="text" name="kondisi" wire:model="kondisi" class="form-control shadow-none" placeholder="Masukan Tujuan" id="">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary shadow-none">Tambah Strategi</button>
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
                        @foreach($semuaStrategi->where('jenis', 'KW') as $key => $strategi)
                        <tr>
                            <th>
                                <i wire:click="delete({{$strategi->id}})" class="fa fa-trash-alt text-danger text-center" style="cursor: pointer"></i>
                            </th>
                            <th>KW {{$key+1}} </th>
                            <th>{{$strategi->kondisi}}</th>
                            <th>Tujuan Prioritas {{$key+1}}</th>
                            <th>{{$strategi->tujuan}}</th>
                        </tr>
                        @endforeach
                        @if($semuaStrategi->where('jenis', 'S-W')->count() > 0)
                            <tr>
                                <th colspan="5">Semetara Skor Tertinggi S-W</th>
                            </tr>
                            @foreach($semuaStrategi->where('jenis', 'S-W') as $key => $strategi)
                                <tr>
                                    <th>
                                        <i wire:click="delete({{$strategi->id}})" class="fa fa-trash-alt text-danger text-center" style="cursor: pointer"></i>
                                    </th>
                                    <th>S-W {{$key+1}} </th>
                                    <th>{{$strategi->kondisi}}</th>
                                    <th>Tujuan Prioritas {{$key+1}}</th>
                                    <th>{{$strategi->tujuan}}</th>
                                </tr>
                            @endforeach
                        @endif
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
