<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tahap 9</a></li>
                        <li class="breadcrumb-item active">Penentuan Rencana</li>
                    </ol>
                </div>
                <h4 class="page-title">Penentuan Rencana</h4>
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
                          <label for="">Nomor Kegiatan</label>
                            <select class="custom-select shadow-none" wire:model='nomor_kegiatan' required>
                                <option selected>PILIH NOMOR KEGIATAN</option>
                                @foreach ($indikatorKegiatan as $key => $kegiatan)
                                   <option value="{{ $kegiatan->no_kegiatan }}">{{ $kegiatan->no_kegiatan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Judul Kegiatan</label>
                            <select class="custom-select shadow-none" required wire:model='sub_kegiatan'>
                                <option selected >PILIH JUDUL KEGIATAN</option>
                                @foreach ($indikatorKegiatan as $key => $kegiatan)
                                   <option value="{{ $kegiatan->indikator_kinerja }}">{{ $kegiatan->indikator_kinerja }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                          <label for="">Penanggung Jawab</label>
                          <textarea class="form-control shadow-none" wire:model="penanggung_jawab" id="" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Sumber Daya yang Dibutuhkan</label>
                            <textarea class="form-control shadow-none" wire:model="sumber_daya" id="" rows="3"></textarea>
                          </div>

                        @foreach ($threats as $key => $threat)
                        <div class="form-group row">
                            <div class="col-md-7">
                                <label for="">Pilih Streng</label>
                                <input type="text" disabled value="{{ $threat->kondisi }}" class="form-control shadow-none bg-light">
                            </div>
                            <div class="col-md-5">
                                <label for="">Jadwal</label>
                                <input type="text" class="form-control shadow-none" wire:model='jadwal.{{ $key }}'>
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
                                <th class="align-middle" rowspan="4">Komponen/Sub Kegiatan</th>
                                <th class="align-middle" rowspan="4">Sumberdaya yg Dibutuhkan</th>
                                <th class="align-middle" rowspan="4">Penanggung Jawab</th>
                                <th class="align-middle" colspan="{{ count($threats) }}"> Jadwa</th>

                            </tr>
                            <tr>
                                @foreach ($threats as $key => $threat)
                                <th>T{{ $key+1 }}</th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($penentuanRencana as $key => $rencana)
                                <tr>
                                    <td scope="row">{{ $rencana->nomor_kegiatan }}</td>
                                    <td>{{ $rencana->sub_kegiatan }}</td>
                                    <td>{{ $rencana->sumber_daya }}</td>
                                    <td>{{ $rencana->penanggung_jawab }}</td>
                                    @foreach (json_decode($rencana->jadwal) as $jadwal)
                                        <td>{{ $jadwal }}</td>
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
