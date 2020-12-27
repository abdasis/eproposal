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
                            <label for="">Tujuan Priorita</label>
                            <select class="custom-select shadow-none" wire:model='tujuan' name="" id="">
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
                            <label for="">Indikator Kinerja Tujuan</label>
                            <textarea wire:model='indikator_tujuan' class="form-control shadow-none" id="" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="">Nilai Awal</label>
                          <input type="text" name="" wire:model='nilai_awal' id="" class="form-control shadow-none" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group row">
                            <div class="col-md-7">
                                <label for="">Priode | <span wire:click='add({{ $i }})' class="text-success cursor-pointer"><i class="fa fa-plus-square"></i> Tambah Priode <span wire:loading wire:target="add" class="text-warning"> Loading...</span> </button>
                                </label>
                                <input type="text" class="form-control shadow-none bg-light" disabled value="Semester 1">
                            </div>
                            <div class="col-md-5">
                                <label for="">Nilai</label>
                                <input type="text" class="form-control shadow-none" wire:model='nilai_akhir.1'>
                            </div>
                        </div>
                        @foreach ($input_priode as $key => $value)
                        <div class="form-group row">
                            <div class="col-md-7">
                                <label for="">Priode | <span wire:click='remove({{ $key }})' class="text-danger cursor-pointer"><i class="fa fa-minus-square"></i> Hapus Priode <span wire:loading wire:target="remove" class="text-warning"> Loading...</span></label>
                                <input type="text" class="form-control shadow-none bg-light" disabled value="Semester {{ $value }}">
                            </div>
                            <div class="col-md-5">
                                <label for="">Nilai</label>
                                <input type="text" class="form-control shadow-none" wire:model='nilai_akhir.{{ $value }}'>
                            </div>
                        </div>
                        @endforeach


                        <div class="form-group">
                            <button class="btn btn-blue font-weight-bold shadow-none">SIMPAN NILAI</button>
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
                <div class="card-body">
                    <table class="table table-sm table-bordered">
                        <thead class="thead-default">
                            <tr>
                                <th rowspan="4">No.</th>
                                <th rowspan="4">Tujuan Prioritas</th>
                                <th rowspan="4">Indikator Kinerja</th>
                                <th colspan="7">Nilai Indikator</th>
                            </tr>
                            <tr>
                                <th class="align-middle" rowspan="2" >Nilai Awal</th>
                                <th class="align-middle" colspan="{{ end($getMaxNilaiTarget) }}"> Nilai Target</th>
                            </tr>
                            <tr>
                                 @foreach ($getMaxNilaiTarget as $key => $item)
                                    <th>Semester {{ $key }}</th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($indikatorTujuan->unique('tujuan_prioritas') as $key => $indikator)
                                <tr>
                                    <td rowspan="{{ count($indikator->indikators)+1 }}" scope="row">{{ $key+1 }}</td>
                                    <td rowspan="{{ count($indikator->indikators)+1 }}">
                                        {{ $indikator->tujuan }}
                                    </td>
                                </tr>
                                @foreach ($indikator->indikators as $indikatortujuan)
                                <tr>
                                    <td>{{ $indikatortujuan->indikator_kinerja }} <button class="btn btn-sm btn-white text-danger shadow-none" wire:click='delete({{ $indikatortujuan->id }})'><i class="fa fa-minus"></i></button> </td>
                                    <x-livewire-alert::confirm onConfirmed="onConfirmedAction" onCancelled="onCancelledCallBack" />
                                    <td>{{ $indikatortujuan->nilai_awal }}</td>

                                    @foreach (json_decode($indikatortujuan->nilai_target) as $targetThreat)
                                        <td>{{ $targetThreat }}</td>
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
