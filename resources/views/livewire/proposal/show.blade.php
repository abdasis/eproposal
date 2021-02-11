<div>

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pengajuan</a></li>
                        <li class="breadcrumb-item active">Tahapan 1</li>
                    </ol>
                </div>
                <h4 class="page-title"><a href="{{ url()->previous() }}"><i
                            class="fa fa-arrow-circle-left text-info"></i></a> Detail Proposal</h4>
            </div>
        </div>
    </div>


    <div class="row mb-2">
        <div class="col-md-12">
            <a href="{{ route('proposal.download', $proposal->id) }}">
                <button class="btn btn-danger float-right"><i class="fa fa-file-pdf mr-1"></i> Download PDF</button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <h2>
                            {{ $proposal->judul }}
                        </h2>
                        <h5>Latar Belakang</h5>
                        <p>{!! $proposal->permasalahaan !!}</p>
                        <p>{!! $proposal->potensi !!}</p>
                        <p>Dokumen ini adalah Rencana Aksi Strategis untuk “{{ $proposal->judul }}” yang disusun secara
                            partisipatif oleh pihak-pihak terkait di “{{ $proposal->dusun }}, {{ $proposal->desa }},
                            {{ $proposal->kecamatan }}, {{ $proposal->kabupaten }}, {{ $proposal->provinsi }},
                            {{ $proposal->rtrw }}”</p>
                    </div>
                    <div class="col-md-12">
                        <h5>
                            Stakeholder Terpilih
                        </h5>
                        <table class="table table-sm table-bordered">
                            <thead class="thead-default bg-white">
                            <tr>
                                <th class="text-center">No</th>
                                <th>Jabatan / Nama lembaga/Individu</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($analisies as $key => $analisys)
                                @if (round($analisys->tingkat_kepentingan/$repondenCount,1) >
                                (round($analisys->tingkat_pengaruh/$repondenCount,1)-2) &&
                                round($analisys->tingkat_kepentingan/$repondenCount,1) < (round($analisys->
                                    tingkat_pengaruh/$repondenCount,1)+2) &&
                                    (round($analisys->tingkat_kepentingan/$repondenCount,1) +
                                    (round($analisys->tingkat_pengaruh/$repondenCount,1))) > 2) <tr>
                                    <td class="text-center" scope="row">{{ $key+1 }}</td>
                                    <td>{{ $analisys->nama_anggota }}</td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <h5>Hasil Survey Prioritisasi Tujuan</h5>
                        <table class="table card-body table-bordered table-sm table-nowrap">
                            <thead class="thead-white">
                            <tr>
                                <th rowspan="2" class="align-middle text-center">Pengaruh</th>
                                <th colspan="{{ count($threats) }}" class="text-center">Terhadap Pengurangan Dampak</th>
                                <th colspan="{{ count($opportunities) }}" class="text-center">Terhadap Pemanfaatan</th>
                                <th rowspan="2">Total Skor</th>
                            </tr>
                            <tr>
                                @foreach ($threats as $key => $t)
                                    <th class="text-wrap">T{{ $key+1 }}</th>
                                @endforeach

                                @foreach ($opportunities as $key => $o)
                                    <th>O{{ $key+1 }}</th>
                                @endforeach
                            </tr>


                            </thead>
                            <tbody>
                            @foreach ($surveyKondisis as $key => $kondisi)
                                @if ($kondisi->pengaruh[0] == 'S')
                                    <tr>
                                        <td class="text-wrap">{{ $kondisi->pengaruh }}</td>
                                        @foreach (json_decode($kondisi->nilai_dampak) as $dampak)
                                            <td class="text-wrap">{{ $dampak }}</td>
                                        @endforeach
                                        @foreach (json_decode($kondisi->nilai_manfaat) as $manfaat)
                                            <td class="text-wrap">{{ $manfaat }}</td>
                                        @endforeach
                                        <td class="text-wrap">{{ $kondisi->total }}</td>
                                    </tr>
                                @endif
                            @endforeach

                            @if (count($jumlahTdiS)>0)
                                <td class="text-wrap">Total S</td>
                                @for ($i = 0; $i < count($jumlahTdiS[0]); $i++) <td class="text-wrap">
                                    {{ $jumlahTdiS->sum($i) }}</td>
                                @endfor

                                @for ($oDiS = 0; $oDiS < count($jumlahOdiS[0]); $oDiS++) <td class="text-wrap">
                                    {{ $jumlahOdiS->sum($oDiS) }}</td>
                                @endfor
                            @endif
                            <td>{{ $totalS }}</td>


                            @foreach ($surveyKondisis as $key => $kondisi)
                                @if ($kondisi->pengaruh[0] == 'W')
                                    <tr>
                                        <td class="text-wrap">{{ $kondisi->pengaruh }}</td>
                                        @foreach (json_decode($kondisi->nilai_dampak) as $dampak)
                                            <td class="text-wrap">{{ $dampak }}</td>
                                        @endforeach
                                        @foreach (json_decode($kondisi->nilai_manfaat) as $manfaat)
                                            <td class="text-wrap">{{ $manfaat }}</td>
                                        @endforeach
                                        <td class="text-wrap">{{ $kondisi->total }}</td>

                                    </tr>
                                @endif
                            @endforeach

                            @if (count($jumlahTdiW)>0)
                                <td class="text-wrap ">Total W</td>
                                @for ($i = 0; $i < count($jumlahTdiW[0]); $i++) <td class="text-wrap">
                                    {{ $jumlahTdiW->sum($i) }}</td>
                                @endfor

                                @for ($oDiW = 0; $oDiW < count($jumlahOdiW[0]); $oDiW++) <td class="text-wrap">
                                    {{ $jumlahOdiW->sum($oDiW) }}</td>
                                @endfor

                            @endif
                            <td>{{$totalW }}</td>

                            <tr>
                                @if (count($jumlahTdiW)>0 && count($jumlahTdiS)>0)
                                    <td class="text-wrap">Total S-W</td>
                                    @for ($i = 0; $i < count($jumlahTdiW[0]); $i++) <td class="text-wrap">
                                        {{ ($jumlahTdiS->sum($i) - $jumlahTdiW->sum($i)) }}</td>
                                    @endfor

                                    @for ($totalSW = 0; $totalSW < count($jumlahOdiW[0]); $totalSW++) <td class="text-wrap">
                                        {{ $jumlahOdiS->sum($totalSW) - $jumlahOdiW->sum($totalSW) }}</td>
                                    @endfor

                                @endif
                                <td>{{ $totalS-$totalW }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>




                    @if (!empty($proposal->strategi))
                    <div class="col-md-12 ">
                        <h5>
                            Lihat Killerweaknes
                        </h5>
                        <p>Berdasarkan hasil survei di atas dapat diketahui bahwa:</p>
                        <table class="table table-bordered table-sm">
                            <tr>
                                <th colspan="5">Killer weakness proyek “{{ $proposal->judul }}” adalah:</th>
                            </tr>
                            @foreach($semuaStrategi->where('jenis', 'KW') as $key => $strategi)
                                <tr>
                                    <th>KW {{$key+1}} </th>
                                    <th>{{$strategi->kondisi}</th>
                                    <th>Tujuan Prioritas {{$key+1}}</th>
                                    <th>{{$strategi->tujuan}}</th>
                                </tr>
                            @endforeach
                            <tr>
                                <th colspan="5">Semetara Skor Tertinggi S-W</th>
                            </tr>
                            @foreach($semuaStrategi->where('jenis', 'S-W') as $key => $strategi)
                                <tr>
                                    <th>S-W {{$key+1}} </th>
                                    <th>{{$strategi->kondisi}}</th>
                                    <th>Tujuan Prioritas {{$key+1}}</th>
                                    <th>{{$strategi->tujuan}}</th>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    @endif
                    <div class="col-md-12">
                        <table class="table table-sm bg-white table-bordered">
                            <thead class="thead-default">
                            <tr>
                                <th rowspan="4">No.</th>
                                <th rowspan="4">Tujuan Prioritas</th>
                                <th rowspan="4">Indikator Kinerja</th>
                                <th colspan="{{ end($getMaxNilaiTarget) }}">Nilai Indikator</th>
                            </tr>
                            <tr>
                                <th class="align-middle" rowspan="2">Nilai Awal</th>
                                <th class="align-middle" colspan="{{ end($getMaxNilaiTarget) }}"> Nilai
                                    Target</th>
                            </tr>
                            <tr>
                                @foreach ($getMaxNilaiTarget as $key => $item)
                                    <th>Semester {{ $key }}</th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($indikatorTujuan->unique('tujuan') as $key => $indikator)
                                <tr>
                                    <td rowspan="{{ count($indikator->indikators)+1 }}" scope="row">{{ $key+1 }}
                                    </td>
                                    <td rowspan="{{ count($indikator->indikators)+1 }}">
                                        {{ $indikator->tujuan }}
                                    </td>
                                </tr>
                                @foreach ($indikator->indikators as $indikatortujuan)
                                    <tr>
                                        <td>{{ $indikatortujuan->indikator_kinerja }}</td>
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

                    {{--menampilkan SWOT--}}
                    <div class="col-md-12">
                        <table class="table table-sm table-bordered table-responsive">
                            <tr class="w-50">
                                <th>KEKUATAN/STRENGTH</th>
                                <th>KELEMAHAN/WEAKNESS</th>
                            </tr>
                            <tr>
                                <td>
                                    <ol>
                                        @foreach($dataKondisi->where('swot', 'S') as $key => $kekuatan)
                                            <li>{{$kekuatan->penyebab_langsung}}</li>
                                        @endforeach
                                    </ol>
                                </td>
                                <td>
                                    <ol>
                                        @foreach($dataKondisi->where('swot', 'W') as $key => $kekuatan)
                                            <li>{{$kekuatan->penyebab_langsung}}</li>
                                        @endforeach
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <th>PELUANG</th>
                                <th>TANTANGAN</th>
                            </tr>
                            <tr>
                                <td>
                                    <ol>
                                        @foreach($dataKondisi->where('swot', 'O') as $key => $kekuatan)
                                            <li>{{$kekuatan->penyebab_langsung}}</li>
                                        @endforeach
                                    </ol>
                                </td>
                                <td>
                                    <ol>
                                        @foreach($dataKondisi->where('swot', 'T') as $key => $kekuatan)
                                            <li>{{$kekuatan->penyebab_langsung}}</li>
                                        @endforeach
                                    </ol>
                                </td>
                            </tr>
                        </table>
                    </div>
                    {{--swot terakhir--}}



                    <div class="col-md-12 mt-4">
                        <h5>Data Nilai</h5>
                        <table class="table table-sm bg-white table-bordered">
                            <thead>
                            <tr>
                                <th class="align-middle" rowspan="4">No.</th>
                                <th class="align-middle" rowspan="4">Tujuan Prioritas</th>
                                <th class="align-middle" rowspan="4">No Kegiatan</th>
                                <th class="align-middle" rowspan="4">Kegiatan</th>
                                <th class="align-middle" rowspan="4">Indikator Kinerja</th>
                                <th class="align-middle" colspan="{{ end($getMaxNilaiTargetKegiatan)+1 }}">Nilai
                                    Indikator</th>
                            </tr>
                            <tr>
                                <th class="align-middle" rowspan="2">Nilai Awal</th>
                                <th class="align-middle" colspan="{{ end($getMaxNilaiTargetKegiatan) }}"> Nilai
                                    Target
                                </th>
                            </tr>
                            <tr>
                                @foreach ($getMaxNilaiTargetKegiatan as $key => $item)
                                    <th>Semester {{ $key }}</th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($indikatorKegiatan->unique('nama_kegiatan') as $keyIndikator => $kegiatan)
                                <tr>
                                    <td rowspan="{{ count($kegiatan->indikatorKegiatan)+1 }}" scope="row">
                                        {{ $keyIndikator+1 }}
                                    </td>
                                    <td rowspan="{{ count($kegiatan->indikatorKegiatan)+1 }}">
                                        {{ $kegiatan->nama_kegiatan }}
                                    </td>
                                </tr>
                                @foreach ($kegiatan->indikatorKegiatan as $keykegiatan => $dataKegiatan)
                                    <tr>
                                        <td>{{ $keykegiatan+1 }}</td>
                                        <td>
                                            {{ $dataKegiatan->kegiaatan }}
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
                    {{--data penentuan rencana--}}
                    @foreach ($dataPenentuanRencana->unique('sub_kegiatan') as $rencana)
                        <div class="col-md-12 mt-4">
                            <h5>Judul Kegiatan : {{ $rencana->sub_kegiatan }}</h5>
                            <table class="table table-sm table-bordered">
                                <thead class="thead-default">
                                <tr>
                                    <th class="align-middle">No.</th>
                                    <th class="align-middle">Komponen/Sub Kegiatan</th>
                                    <th class="align-middle">Sumberdaya yg Dibutuhkan</th>
                                    <th class="align-middle">Penanggung Jawab</th>
                                    <th class="align-middle">Jadwal Pelaksanaan</th>
                                </tr>

                                </thead>
                                <tbody>
                                @foreach ($rencana->dataSubKegiatan as $key => $subkegiatan)
                                    <tr>
                                        <td scope="row">{{ $key+1 }}</td>
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

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-12">
                                    Tempat, Tanggal Menyusun
                                </div>
                                <div class="col-md-4">
                                    <div class="tanda_tangan_kepala_desa mb-5">
                                        Mengetahui, <br>
                                        Kepala Desa
                                    </div>
                                    ............................
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="mb-5">
                                        Ketua Penyusun
                                    </div>
                                    ............................
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{--data penentuan rencana terakhir--}}
                </div>
            </div>
        </div>
    </div>
</div>
