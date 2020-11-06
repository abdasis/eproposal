<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Analisys</a></li>
                        <li class="breadcrumb-item active">Buat Survey</li>
                    </ol>
                </div>
                <h4 class="page-title">Buat Survey</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <div class="card">
                <h5 class="card-header bg-white border-bottom">
                    Isi Biodata Survey
                </h5>
                <div class="card-body">
                    <div class="alert alert-info">
                        Survey tentang Pihak Terkait “<b>{{ $proposal->judul }}</b>”
                        Saat ini kami sedang menyusun Rencana Aksi Strategis “<b>{{ $proposal->judul }}</b>” untuk mengembangkan perekonomian masyarakat di “{{ $proposal->provinsi }}, {{ $proposal->kabupaten }}, {{ $proposal->kecamatan }}, {{ $proposal->desa }}, {{ $proposal->dusun }}, {{ $proposal->rtrw }}”. Mohon kesediaan Bapak/Ibu/Sdr/i untuk memberikan pendapat tentang pihak-pihak yang harus terlibat langsung dalam proses penyusunan rencana pembangunan tersebut, dengan cara mengisi kuesiner ini. Terima kasih kami sampaikan atas perhatian dan perkenan Bapak/Ibu/Sdr/I berpatisipasi dalam survei ini.
                    </div>
                    <form wire:submit.prevent='store'>
                        <div class="form-group">
                          <label for="nama">Nama Lengkap</label>
                          <input type="text" wire:model="nama" id="nama" class="form-control" placeholder="Masukan Nama Lengkap" aria-describedby="nama">
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="usia">Usia</label>
                                <input type="text" wire:model="usia" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Jenis Kelamin</label>
                                <select class="custom-select" wire:model="jenis_kelamin" id="">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="pekerjaan">Pekerjaan</label>
                          <input type="text" wire:model="pekerjaan" id="pekerjaan" class="form-control" placeholder="Masukan Pekerjaan" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select class="custom-select" wire:model="status" id="">
                                <option selected>Status Warga</option>
                                <option value="Warga Asli">Warga Asli</option>
                                <option value="Pendatang">Pendatang</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Jenjang Pendidikan</label>
                            <select class="custom-select" wire:model="pendidikan" id="">
                                <option selected>Pilih Pendidikan</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA/Sederajat">SMA/Sederajat</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                            </select>
                        </div>

                        <div class="alert alert-info">
                            Survey tentang Pihak Terkait “<b>{{ $proposal->judul }}</b>”
                            Saat ini kami sedang menyusun Rencana Aksi Strategis “<b>{{ $proposal->judul }}</b>” untuk mengembangkan perekonomian masyarakat di “{{ $proposal->provinsi }}, {{ $proposal->kabupaten }}, {{ $proposal->kecamatan }}, {{ $proposal->desa }}, {{ $proposal->dusun }}, {{ $proposal->rtrw }}”. Mohon kesediaan Bapak/Ibu/Sdr/i untuk memberikan pendapat tentang pihak-pihak yang harus terlibat langsung dalam proses penyusunan rencana pembangunan tersebut, dengan cara mengisi kuesiner ini. Terima kasih kami sampaikan atas perhatian dan perkenan Bapak/Ibu/Sdr/I berpatisipasi dalam survei ini.
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Pernyataan</th>
                                    <th>Response</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <table>
                                            @foreach (App\Models\Kondisi::where('swot', 'S')->get() as $kondisi)
                                            <tr>
                                                <td>Sebarapa besar</td>
                                                <td>{{ $kondisi->kondisi }}</td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </td>

                                    <td>
                                        <table>
                                            @foreach (App\Models\Kondisi::where('swot', 'T')->get() as $kondisi)
                                            <tr>
                                                <td>berpengaruh positif/mendukukung pencapaian pengurangan dampak</td>
                                                <td>{{ $kondisi->kondisi }}</td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            @foreach (App\Models\Kondisi::where('swot', 'S')->get() as $kondisi)
                                            <tr>
                                                <td>
                                                    <div class="radio radio-info form-check-inline">
                                                        <input wire:model="tingkat_kepentingan" type="radio" id="anggota-1" value="1" name="tingkat_kepentinga">
                                                        <label for="anggota-1"> Sangat Tidak Berpengaruh </label>
                                                    </div>
                                                    <div class="radio radio-info form-check-inline">
                                                        <input wire:model="tingkat_kepentingan" type="radio" id="anggota-2" value="2" name="tingkat_kepentinga">
                                                        <label for="anggota-2"> Kurang Berpengahruh </label>
                                                    </div>
                                                    <div class="radio radio-info form-check-inline">
                                                        <input wire:model="tingkat_kepentingan" type="radio" id="anggota-3" value="3" name="tingkat_kepentinga">
                                                        <label for="anggota-3"> Berpengahruh </label>
                                                    </div>
                                                    <div class="radio radio-info form-check-inline">
                                                        <input wire:model="tingkat_kepentingan" type="radio" id="anggota-4" value="4" name="tingkat_kepentinga">
                                                        <label for="anggota-4"> Sangat Berpengaruh </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="form-group text-right">
                            <button class="btn btn-outline-info">Berikan Survey</button>
                            <button type="reset" class="btn btn-outline-danger">Batal</button>
                        </div>
                    </form>
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
