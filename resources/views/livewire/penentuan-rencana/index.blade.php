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
                            <label for="">Judul Kegiatan</label>
                            <select class="custom-select shadow-none" required wire:model='sub_kegiatan'>
                                <option selected >PILIH JUDUL KEGIATAN</option>
                                @foreach ($indikatorKegiatan as $key => $kegiatan)
                                   <option value="{{ $kegiatan->kegiaatan }}">{{ $kegiatan->kegiaatan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nomor Kegiatan</label>
                                        <select class="custom-select shadow-none" wire:model='nomor_kegiatan' required>
                                            <option selected>PILIH NOMOR KEGIATAN</option>
                                            @foreach ($indikatorKegiatan as $key => $kegiatan)
                                            <option value="{{ $key+1 }}">{{ $key+1 }}</option>
                                            @endforeach
                                            {{-- @if ($noKegiatans)
                                                @foreach ($noKegiatans as $key => $no)
                                                    <option value="{{ $key+1 }}">{{ $key+1 }} - {{ $no->kegiaatan }}</option>
                                                @endforeach
                                            @endif --}}
                                        </select>
                                    </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="jadwal_pelaksanaan">Jadwal Pelaksaan</label>
                                  <input type="date" wire:model="jadwal_pelaksanaan" id="jadwal_pelaksanaan" class="form-control shadow-none" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="">Sub Kegiatan</label>
                          <input type="text" wire:model="judul_kegiatan"  class="form-control shadow-none"  aria-describedby="helpId">
                        </div>


                        <div class="form-group">
                            <label for="">Penanggung Jawab</label>
                            <textarea class="form-control shadow-none" wire:model="penanggung_jawab" id="" rows="3"></textarea>
                            <small class="text-muted">Pisahkan dengan koma (,) apabila terdapat penanggung jawab</small>

                        </div>

                        <div class="form-group">
                            <label for="">Sumber Daya yang Dibutuhkan</label>
                            <textarea class="form-control shadow-none" wire:model="sumber_daya" id="" rows="3"></textarea>
                            <small class="text-muted">Pisahkan dengan koma (,) apabila terdapat banyak sumber daya</small>
                        </div>

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

            @foreach ($dataPenentuanRencana as $rencana)
                <div class="card">
                <h5 class="card-header">Data Nilai</h5>
                <div class="card-body">
                    <h5>Judul Kegiatan : {{ $rencana->sub_kegiatan }}</h5>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered">
                        <thead class="thead-default">
                            <tr>
                                <th class="align-middle">No.</th>
                                <th class="align-middle">Komponen/Sub Kegiatan</th>
                                <th class="align-middle">Sumberdaya yg Dibutuhkan</th>
                                <th class="align-middle">Penanggung Jawab</th>
                                <th class="align-middle">Jadwal Pelaksanaan</th>
                                <th>Option</th>
                            </tr>

                            </thead>
                            <tbody>
                                @foreach ($rencana->dataSubKegiatan as $key => $subkegiatan)
                                <tr>
                                    <td scope="row">{{ $subkegiatan->key+1 }}</td>
                                    <td>{{ $subkegiatan->judul_kegiatan }}</td>
                                    <td>
                                        <ul>
                                            @foreach (json_decode($subkegiatan->sumber_daya) as $sumberdaya)
                                                <li>{{ $sumberdaya }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            @foreach (json_decode($subkegiatan->penanggung_jawab) as $penanggung_jawab)
                                                <li>{{ $penanggung_jawab }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>Sampai Minggu {{ $subkegiatan->jadwal }}</td>
                                    <td>
                                        <button wire:click='delete({{ $subkegiatan->id }})' class="btn btn-sm btn-danger shadow-none"><i class="fa fa-trash-alt"></i></button>
                                        <x-livewire-alert::confirm onConfirmed="onConfirmedAction" onCancelled="onCancelledCallBack" />
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
            @endforeach
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
