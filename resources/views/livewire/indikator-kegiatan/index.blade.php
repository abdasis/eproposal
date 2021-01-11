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
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">
                    INPUT NILAI
                </h5>
                <div class="card-body">
                    <form wire:submit.prevent='store'>
                        <div class="form-group">
                            <label for="">Tujuan Prioritas</label>
                            <select class="custom-select shadow-none" wire:model='tujuan_prioritas' name="" id="">
                                <option selected>Pilih Tujuan</option>
                                @foreach ($strategies as $key => $strategi)
                                <option value="{{ $strategi->tujuan_1 }}">{{ $strategi->tujuan_1 }}</option>
                                <option value="{{ $strategi->tujuan_2 }}">{{ $strategi->tujuan_2 }}</option>
                                <option value="{{ $strategi->tujuan_3 }}">{{ $strategi->tujuan_3 }}</option>
                                <option value="{{ $strategi->tujuan_4 }}">{{ $strategi->tujuan_4 }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Kegaiatan Untuk Mencapai Tujuan Prioritas</label>
                            <textarea class="form-control shadow-none" wire:model="kegiatan" id="" rows="3"></textarea>
                            <small>Jika terdapat beberapa kegiatan pisahkan dengan tanda koma (,)</small>
                        </div>

                        <div class="form-group">
                            <label for="">Indikator Kinerja Kegiatan</label>
                            <textarea wire:model='kinerja_kegiatan' id="" cols="30" rows="3"
                                placeholder="Masukan nama kegiatan" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Nilai Awal</label>
                            <input type="text" name="" wire:model='nilai_awal' id="" class="form-control shadow-none"
                                placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group row">
                            <div class="col-md-7">
                                <label for="">Priode | <span wire:click='add({{ $i }})'
                                        class="text-success cursor-pointer"><i class="fa fa-plus-square"></i> Tambah
                                        Priode <span wire:loading wire:target="add" class="text-warning">
                                            Loading...</span> </button>
                                </label>
                                <input type="text" class="form-control shadow-none bg-light" disabled
                                    value="Semester 1">
                            </div>
                            <div class="col-md-5">
                                <label for="">Nilai</label>
                                <input type="text" class="form-control shadow-none" wire:model='nilai_akhir.1'>
                            </div>
                        </div>
                        @foreach ($input_priode as $key => $value)
                        <div class="form-group row">
                            <div class="col-md-7">
                                <label for="">Priode | <span wire:click='remove({{ $key }})'
                                        class="text-danger cursor-pointer"><i class="fa fa-minus-square"></i> Hapus
                                        Priode <span wire:loading wire:target="remove" class="text-warning">
                                            Loading...</span></label>
                                <input type="text" class="form-control shadow-none bg-light" disabled
                                    value="Semester {{ $value }}">
                            </div>
                            <div class="col-md-5">
                                <label for="">Nilai</label>
                                <input type="text" class="form-control shadow-none"
                                    wire:model='nilai_akhir.{{ $value }}'>
                            </div>
                        </div>
                        @endforeach

                        <div class="form-group">
                            <button class="btn btn-blue font-weight-bold shadow-none">SIMPAN DATA</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Data Nilai</h5>
                <table class="table card-body table-sm table-bordered">
                    <thead class="thead-default">
                        <tr>
                            <th class="align-middle" rowspan="4">No.</th>
                            <th class="align-middle" rowspan="4">Tujuan Prioritas</th>
                            <th class="align-middle" rowspan="4">No Kegiatan</th>
                            <th class="align-middle" rowspan="4">Kegiatan</th>
                            <th class="align-middle" rowspan="4">Indikator Kinerja</th>
                            <th class="align-middle" colspan="{{ end($getMaxNilaiTarget)+1 }}">Nilai Indikator</th>
                        </tr>
                        <tr>
                            <th class="align-middle" rowspan="2">Nilai Awal</th>
                            <th class="align-middle" colspan="{{ end($getMaxNilaiTarget) }}"> Nilai Target</th>
                        </tr>
                        <tr>
                            @foreach ($getMaxNilaiTarget as $key => $item)
                            <th>Semester {{ $key }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($indikatorKegiatan->unique('nama_kegiatan') as $keyIndikator => $kegiatan)
                        <tr>
                            <td rowspan="{{ count($kegiatan->indikatorKegiatan)+1 }}" scope="row">{{ $keyIndikator+1 }}
                            </td>
                            <td rowspan="{{ count($kegiatan->indikatorKegiatan)+1 }}">{{ $kegiatan->nama_kegiatan }}
                            </td>
                        </tr>
                        @foreach ($kegiatan->indikatorKegiatan as $keykegiatan => $dataKegiatan)
                        <tr>
                            <td>{{ $keykegiatan+1 }}</td>
                            <td>
                                {{ $dataKegiatan->kegiaatan }}
                                <button class="btn btn-sm btn-white text-danger shadow-none"
                                    wire:click='delete({{ $dataKegiatan->id }})'><i class="fa fa-minus"></i></button>
                            </td>
                            <td>
                                {{ $dataKegiatan->indikator_kinerja }}
                            </td>
                            <td>{{ $dataKegiatan->nilai_awal }}</td>
                            @foreach (json_decode($dataKegiatan->nilai_target) as $target)
                            <td>{{ $target }}</td>
                            @endforeach
                        </tr>
                        @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@push('js')
<script>
    Livewire.on('success', params => {
            Swal.fire(
                params['title'],
                params['message'],
                'success'
            )
        })
</script>
@endpush
