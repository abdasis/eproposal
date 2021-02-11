<!DOCTYPE html>
<html lang="en">

<head>
    <title>Export Projek PEL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6;
        }

        .table-sm th,
        .table-sm td {
            padding: 0.3rem;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .table-borderless th,
        .table-borderless td,
        .table-borderless thead th,
        .table-borderless tbody+tbody {
            border: 0;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            color: #212529;
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-primary,
        .table-primary>th,
        .table-primary>td {
            background-color: #b8daff;
        }

        .table-primary th,
        .table-primary td,
        .table-primary thead th,
        .table-primary tbody+tbody {
            border-color: #7abaff;
        }

        .table-hover .table-primary:hover {
            background-color: #9fcdff;
        }

        .table-hover .table-primary:hover>td,
        .table-hover .table-primary:hover>th {
            background-color: #9fcdff;
        }

        .table-secondary,
        .table-secondary>th,
        .table-secondary>td {
            background-color: #d6d8db;
        }

        .table-secondary th,
        .table-secondary td,
        .table-secondary thead th,
        .table-secondary tbody+tbody {
            border-color: #b3b7bb;
        }

        .table-hover .table-secondary:hover {
            background-color: #c8cbcf;
        }

        .table-hover .table-secondary:hover>td,
        .table-hover .table-secondary:hover>th {
            background-color: #c8cbcf;
        }

        .table-success,
        .table-success>th,
        .table-success>td {
            background-color: #c3e6cb;
        }

        .table-success th,
        .table-success td,
        .table-success thead th,
        .table-success tbody+tbody {
            border-color: #8fd19e;
        }

        .table-hover .table-success:hover {
            background-color: #b1dfbb;
        }

        .table-hover .table-success:hover>td,
        .table-hover .table-success:hover>th {
            background-color: #b1dfbb;
        }

        .table-info,
        .table-info>th,
        .table-info>td {
            background-color: #bee5eb;
        }

        .table-info th,
        .table-info td,
        .table-info thead th,
        .table-info tbody+tbody {
            border-color: #86cfda;
        }

        .table-hover .table-info:hover {
            background-color: #abdde5;
        }

        .table-hover .table-info:hover>td,
        .table-hover .table-info:hover>th {
            background-color: #abdde5;
        }

        .table-warning,
        .table-warning>th,
        .table-warning>td {
            background-color: #ffeeba;
        }

        .table-warning th,
        .table-warning td,
        .table-warning thead th,
        .table-warning tbody+tbody {
            border-color: #ffdf7e;
        }

        .table-hover .table-warning:hover {
            background-color: #ffe8a1;
        }

        .table-hover .table-warning:hover>td,
        .table-hover .table-warning:hover>th {
            background-color: #ffe8a1;
        }

        .table-danger,
        .table-danger>th,
        .table-danger>td {
            background-color: #f5c6cb;
        }

        .table-danger th,
        .table-danger td,
        .table-danger thead th,
        .table-danger tbody+tbody {
            border-color: #ed969e;
        }

        .table-hover .table-danger:hover {
            background-color: #f1b0b7;
        }

        .table-hover .table-danger:hover>td,
        .table-hover .table-danger:hover>th {
            background-color: #f1b0b7;
        }

        .table-light,
        .table-light>th,
        .table-light>td {
            background-color: #fdfdfe;
        }

        .table-light th,
        .table-light td,
        .table-light thead th,
        .table-light tbody+tbody {
            border-color: #fbfcfc;
        }

        .table-hover .table-light:hover {
            background-color: #ececf6;
        }

        .table-hover .table-light:hover>td,
        .table-hover .table-light:hover>th {
            background-color: #ececf6;
        }

        .table-dark,
        .table-dark>th,
        .table-dark>td {
            background-color: #c6c8ca;
        }

        .table-dark th,
        .table-dark td,
        .table-dark thead th,
        .table-dark tbody+tbody {
            border-color: #95999c;
        }

        .table-hover .table-dark:hover {
            background-color: #b9bbbe;
        }

        .table-hover .table-dark:hover>td,
        .table-hover .table-dark:hover>th {
            background-color: #b9bbbe;
        }

        .table-active,
        .table-active>th,
        .table-active>td {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover>td,
        .table-hover .table-active:hover>th {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table .thead-dark th {
            color: #fff;
            background-color: #343a40;
            border-color: #454d55;
        }

        .table .thead-light th {
            color: #495057;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }

        .table-dark {
            color: #fff;
            background-color: #343a40;
        }

        .table-dark th,
        .table-dark td,
        .table-dark thead th {
            border-color: #454d55;
        }

        .table-dark.table-bordered {
            border: 0;
        }

        .table-dark.table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .table-dark.table-hover tbody tr:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.075);
        }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-sm>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 767.98px) {
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-md>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 991.98px) {
            .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-lg>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-xl>.table-bordered {
                border: 0;
            }
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive>.table-bordered {
            border: 0;
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive>.table-bordered {
            border: 0;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
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
</body>

</html>
