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
                                <label for="">Pilih Streng</label>
                                <select class="custom-select shadow-none" wire:model='threat' name="" id="">
                                    <option selected>Pilih Streng</option>
                                    @foreach ($threats as $key => $threat)
                                        <option value="{{ $threat->jenis_kondisi }}">{{ $threat->jenis_kondisi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-5">
                                <label for="">Nilai</label>
                                <input type="text" class="form-control shadow-none" wire:model='nilai_akhir'>
                            </div>
                        </div>


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
                                <th colspan="4">Nilai Indikator</th>
                            </tr>
                            <tr>
                                <th rowspan="2" >Nilai Awal</th>
                                <th colspan="3"> Nilai Target</th>
                            </tr>
                            <tr>
                                <th>T1</th>
                                <th>T2</th>
                                <th>T3</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($indikatorTujuan->unique('tujuan_prioritas') as $key => $indikator)
                                <tr>
                                    <td scope="row">{{ $key+1 }}</td>
                                    <td>{{ $indikator->tujuan_prioritas }}</td>
                                    <td>{{ $indikator->indikator_kinerja }}</td>
                                    <td>{{ $indikator->nilai_awal }}</td>
                                    <tr>
                                        <table>
                                            <tr>
                                                @foreach ($indikator->targetThreat->where('target_threat', $indikator->tujuan_prioritas) as $targetThreat)
                                                    <td>{{ dd($targetThreat->tujuan_prioritas) }}</td>
                                                @endforeach
                                            </tr>
                                        </table>
                                    </tr>
                                </tr>
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
