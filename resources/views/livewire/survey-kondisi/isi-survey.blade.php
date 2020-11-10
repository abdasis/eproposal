@php
    $threats = App\Models\Kondisi::where('proposal_id', $proposal->id)->where('swot', 'T')->get();
    $oppurtunities = App\Models\Kondisi::where('proposal_id', $proposal->id)->where('swot', 'O')->get();
    $weaks = App\Models\Kondisi::where('proposal_id', $proposal->id)->where('swot', 'W')->get();
    $strengs = App\Models\Kondisi::where('proposal_id', $proposal->id)->where('swot', 'S')->get();
@endphp
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

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th colspan="4">Pernyataan</th>
                                    <th>Response</th>
                                </tr>
                            </thead>
                            @foreach ($kondisi_s as $key => $s)
                            <tbody>
                                <tr>
                                    <td rowspan="{{ count($kondisi_t)+count($kondisi_s) }}">{{ $key+1 }}</td>
                                </tr>
                                <tr>
                                    <td class="align-middle" rowspan="{{ count($kondisi_t)+count($kondisi_s) }}">Seberapa Besar</td>
                                    <td class="align-middle" rowspan="{{ count($kondisi_t)+count($kondisi_s) }}">{{ $s->kondisi }}</td>
                                    <td class="align-middle" rowspan="{{ count($kondisi_t)+count($kondisi_s) }}">berpengaruh positif/mendukukung pencapaian pengurangan dampak</td>
                                </tr>
                                @foreach ($kondisi_t as $key => $t)
                                <tr>
                                    <td class="align-middle">{{ $t->kondisi }}</td>
                                    <td>
                                        <div class="radio radio-info form-check-inline">
                                            <input wire:model="response_st.{{ $s->id . $t->id }}" type="radio" value="1" name="response_st{{ $s->id . $t->id }}[]">
                                            <label> Sangat Tidak Berpengaruh </label>
                                        </div>
                                        <div class="radio radio-info form-check-inline">
                                            <input wire:model="response_st.{{ $s->id . $t->id }}" type="radio" value="2" name="response_st{{ $s->id . $t->id }}[]">
                                            <label> Kurang Berpengahruh </label>
                                        </div>
                                        <div class="radio radio-info form-check-inline">
                                            <input wire:model="response_st.{{ $s->id . $t->id }}" type="radio" value="3" name="response_st{{ $s->id . $t->id }}[]">
                                            <label> Berpengahruh </label>
                                        </div>
                                        <div class="radio radio-info form-check-inline">
                                            <input wire:model="response_st.{{ $s->id . $t->id }}" type="radio" value="4" name="response_st{{ $s->id . $t->id }}[]">
                                            <label> Sangat Berpengaruh </label>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            @endforeach

                            {{-- PERBANDINGAN S SAMA O  --}}
                            @foreach ($kondisi_s as $key => $s)
                            <tbody>
                                <tr>
                                    <td rowspan="{{ count($kondisi_t)+count($kondisi_s) }}">{{ $key+1 }}</td>
                                </tr>
                                <tr>
                                    <td class="align-middle" rowspan="{{ count($kondisi_t)+count($kondisi_s) }}">Seberapa Besar</td>
                                    <td class="align-middle" rowspan="{{ count($kondisi_t)+count($kondisi_s) }}">{{ $s->kondisi }}</td>
                                    <td class="align-middle" rowspan="{{ count($kondisi_t)+count($kondisi_s) }}">berpengaruh positif/mendukukung pencapaian pengurangan dampak</td>
                                </tr>
                                @foreach ($kondisi_o as $key => $o)
                                <tr>
                                    <td class="align-middle">{{ $o->kondisi }}</td>
                                    <td>
                                        <div class="radio radio-info form-check-inline">
                                            <input wire:model="response_sw.{{ $o->id . $s->id }}" type="radio" value="1" name="nilai_ot_{{ $o->id . $s->id }}[]">
                                            <label> Sangat Tidak Berpengaruh </label>
                                        </div>
                                        <div class="radio radio-info form-check-inline">
                                            <input wire:model="response_sw.{{ $o->id . $s->id }}" type="radio" value="2" name="nilai_so_{{ $o->id . $s->id }}[]">
                                            <label> Kurang Berpengahruh </label>
                                        </div>
                                        <div class="radio radio-info form-check-inline">
                                            <input wire:model="response_sw.{{ $o->id . $s->id }}" type="radio" value="3" name="nilai_so_{{ $o->id . $s->id }}[]">
                                            <label> Berpengahruh </label>
                                        </div>
                                        <div class="radio radio-info form-check-inline">
                                            <input wire:model="response_sw.{{ $o->id . $s->id }}" type="radio" value="4" name="nilai_so_{{ $o->id . $s->id }}[]">
                                            <label> Sangat Berpengaruh </label>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            @endforeach

                            {{-- PERBANDINGAN O DENGAN T  --}}
                            @foreach ($kondisi_w as $key => $w)
                            <tbody>
                                <tr>
                                    <td rowspan="{{ count($kondisi_t)+count($kondisi_s) }}">{{ $key+1 }}</td>
                                </tr>
                                <tr>
                                    <td class="align-middle" rowspan="{{ count($kondisi_t)+count($kondisi_s) }}">Seberapa Besar</td>
                                    <td class="align-middle" rowspan="{{ count($kondisi_t)+count($kondisi_s) }}">{{ $w->kondisi }}</td>
                                    <td class="align-middle" rowspan="{{ count($kondisi_t)+count($kondisi_s) }}">berpengaruh positif/mendukukung pencapaian pengurangan dampak</td>
                                </tr>
                                @foreach ($kondisi_t as $t)
                                <tr>
                                    <td class="align-middle">{{ $t->kondisi }}</td>
                                    <td>
                                        <div class="radio radio-info form-check-inline">
                                            <input wire:model="response_wt.{{ $t->id }}" type="radio" value="1" name="nilai_wt_{{ $t->id . $w->id }}[]">
                                            <label> Sangat Tidak Berpengaruh </label>
                                        </div>
                                        <div class="radio radio-info form-check-inline">
                                            <input wire:model="response_wt.{{ $t->id }}" type="radio" value="2" name="nilai_wt_{{ $t->id . $w->id }}[]">
                                            <label> Kurang Berpengahruh </label>
                                        </div>
                                        <div class="radio radio-info form-check-inline">
                                            <input wire:model="response_wt.{{ $t->id }}" type="radio" value="3" name="nilai_wt_{{ $t->id . $w->id }}[]">
                                            <label> Berpengahruh </label>
                                        </div>
                                        <div class="radio radio-info form-check-inline">
                                            <input wire:model="response_wt.{{ $t->id }}" type="radio" value="4" name="nilai_wt_{{ $t->id . $w->id }}[]">
                                            <label> Sangat Berpengaruh </label>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            @endforeach


                            {{-- PERBANDINGAN O DENGAN W --}}
                            @foreach ($kondisi_w as $key => $w)
                            <tbody>
                                <tr>
                                    <td rowspan="{{ count($kondisi_t)+count($kondisi_s) }}">{{ $key+1 }}</td>
                                </tr>
                                <tr>
                                    <td class="align-middle" rowspan="{{ count($kondisi_t)+count($kondisi_s) }}">Seberapa Besar</td>
                                    <td class="align-middle" rowspan="{{ count($kondisi_t)+count($kondisi_s) }}">{{ $w->kondisi }}</td>
                                    <td class="align-middle" rowspan="{{ count($kondisi_t)+count($kondisi_s) }}">berpengaruh positif/mendukukung pencapaian pengurangan dampak</td>
                                </tr>
                                @foreach ($kondisi_o as $o)
                                <tr>
                                    <td class="align-middle">{{ $o->kondisi }}</td>
                                    <td>
                                        <div class="radio radio-info form-check-inline">
                                            <input wire:model="response_wo.{{ $o->id }}" type="radio" value="1" name="nilai_wo_{{ $o->id . $w->id }}[]">
                                            <label> Sangat Tidak Berpengaruh </label>
                                        </div>
                                        <div class="radio radio-info form-check-inline">
                                            <input wire:model="response_wo.{{ $o->id }}" type="radio" value="2" name="nilai_wo_{{ $o->id . $w->id }}[]">
                                            <label> Kurang Berpengahruh </label>
                                        </div>
                                        <div class="radio radio-info form-check-inline">
                                            <input wire:model="response_wo.{{ $o->id }}" type="radio" value="3" name="nilai_wo_{{ $o->id . $w->id }}[]">
                                            <label> Berpengahruh </label>
                                        </div>
                                        <div class="radio radio-info form-check-inline">
                                            <input wire:model="response_wo.{{ $o->id }}" type="radio" value="4" name="nilai_wo_{{ $t->id . $w->id }}[]">
                                            <label> Sangat Berpengaruh </label>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            @endforeach

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
