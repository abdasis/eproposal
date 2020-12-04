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
                            <label for="">Nomor Kegiatan</label>
                            <input type="number" wire:model='nomor_kegiatan' class="form-control shadow-none" >
                        </div>

                        <div class="form-group">
                          <label for="">Kegaiatan Untuk Mencapai Tujuan Prioritas</label>
                          <textarea class="form-control shadow-none" wire:model="kegiatan" id="" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="">Indikator Kinerja Kegiatan</label>
                          <input type="text" wire:model="kinerja_kegiatan" id="" class="form-control shadow-none" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                          <label for="">Nilai Awal</label>
                          <input type="text" name="" wire:model='nilai_awal' id="" class="form-control shadow-none" placeholder="" aria-describedby="helpId">
                        </div>

                        @foreach ($threats as $key => $threat)
                        <div class="form-group row">
                            <div class="col-md-7">
                                <label for="">Pilih Streng</label>
                                <input type="text" disabled value="{{ $threat->jenis_kondisi }}" class="form-control shadow-none bg-light">
                            </div>
                            <div class="col-md-5">
                                <label for="">Nilai</label>
                                <input type="text" class="form-control shadow-none" wire:model='nilai_akhir.{{ $key }}'>
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
                                <th class="align-middle" rowspan="4">No.</th>
                                <th class="align-middle" rowspan="4">Tujuan Prioritas</th>
                                <th class="align-middle" rowspan="4">No Kegiatan</th>
                                <th class="align-middle" rowspan="4">Kegiatan</th>
                                <th class="align-middle" rowspan="4">Indikator Kinerja</th>
                                <th class="align-middle" colspan="4">Nilai Indikator</th>
                            </tr>
                            <tr>
                                <th class="align-middle" rowspan="2" >Nilai Awal</th>
                                <th class="align-middle" colspan="{{ count($threats) }}"> Nilai Target</th>
                            </tr>
                            <tr>
                                @foreach ($threats as $key => $threat)
                                <th>T{{ $key+1 }}</th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($indikatorKegiatan as $key => $kegiatan)
                                <tr>
                                    <td scope="row">{{ $key+1 }}</td>
                                    <td>{{ $kegiatan->tujuan_prioritas }}</td>
                                    <td>{{ $kegiatan->no_kegiatan }}</td>
                                    <td>{{ $kegiatan->kegiaatan }}</td>
                                    <td>{{ $kegiatan->indikator_kinerja }}</td>
                                    <td>{{ $kegiatan->nilai_awal }}</td>
                                    @foreach (json_decode($kegiatan->nilai_target) as $targetThreat)
                                        <td>{{ $targetThreat }}</td>
                                    @endforeach
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
