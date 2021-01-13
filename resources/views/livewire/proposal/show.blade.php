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


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">
                        {{ $proposal->judul }}
                    </h2>
                    <div class="card-text">
                        <h5>Latar Belakang</h5>
                        <p>{!! $proposal->latar_belakang !!}</p>
                        <p>Dokumen ini adalah Rencana Aksi Strategis untuk “{{ $proposal->judul }}” yang disusun secara
                            partisipatif oleh pihak-pihak terkait di “{{ $proposal->dusun }}, {{ $proposal->desa }},
                            {{ $proposal->kecamatan }}, {{ $proposal->kabupaten }}, {{ $proposal->provinsi }},
                            {{ $proposal->rtrw }}”</p>
                    </div>
                    {{-- <table class="table table-bordered table-sm">
                        <thead class="thead-default">
                            <tr>
                                <th>No</th>
                                <th>Jabatan / Nama lembaga/Individu</th>
                                <th>Rata-rata tingkat pengaruh</th>
                                <th>Rata-rata tingkat kepentingan</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($analisies as $key => $analisys)
                                <tr>
                                    <td scope="row">{{ $key+1 }}</td>
                    <td>{{ $analisys->nama_anggota }}</td>
                    <td>{{ $analisys->tingkat_kepentingan }}</td>
                    <td>{{ $analisys->tingkat_pengaruh }}</td>
                    <td>{{ $analisys->total }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                    <table class="table table-bordered table-sm">
                        <thead class="thead-white">
                            <tr>
                                <th rowspan="2">Pengaruh</th>
                                <th colspan="{{ count($threats) }}" class="text-center">Terhadap Pengurangan Dampak</th>
                                <th colspan="{{ count($opportunities) }}" class="text-center">Terhadap Pemanfaatan</th>
                                <th rowspan="2">Total Skor</th>
                            </tr>
                            <tr>
                                @foreach ($threats as $key => $t)
                                <th>T{{ $key+1 }}</th>
                                @endforeach

                                @foreach ($opportunities as $key => $o)
                                <th>O{{ $key+1 }}</th>
                                @endforeach
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($surveyKondisis as $key => $kondisi)
                            <tr>
                                <td>{{ $kondisi->pengaruh }}</td>
                                @foreach (json_decode($kondisi->nilai_dampak) as $dampak)
                                <td>{{ $dampak }}</td>
                                @endforeach
                                @foreach (json_decode($kondisi->nilai_manfaat) as $manfaat)
                                <td>{{ $manfaat }}</td>
                                @endforeach
                                <td>{{ $kondisi->total }}</td>

                            </tr>

                            @endforeach
                            <tr>
                                <th>Total Skor S</th>
                                <td>{{ $totalS }}</td>
                            </tr>
                            <tr>
                                <th>Total Skor W</th>
                                <td>{{ $totalW }}</td>
                            </tr>
                            <tr>
                                <th>Total Skor W-S</th>
                                <td>{{ $totalSW }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-borderless table-sm">
                        <tbody>
                            <tr>
                                <th colspan="5">Killer weakness proyek “{{ $proposal->judul }}” adalah:</th>
                            </tr>
                            <tr>
                                <td scope="row">{{ $strategi->killerweakness1 }}</td>
                                <td>KW 1</td>
                                <td>{{ $strategi->kw1 }}</td>
                                <td>Tujuan Prioritas 1</td>
                                <td>{{ $strategi->tujuan_1 }}</td>
                            </tr>
                            <tr>
                                <td scope="row">{{ $strategi->killerweakness2 }}</td>
                                <td>KW 1</td>
                                <td>{{ $strategi->kw2 }}</td>
                                <td>Tujuan Prioritas 1</td>
                                <td>{{ $strategi->tujuan_2 }}</td>
                            </tr>

                            <tr>
                                <th colspan="5">Sementara itu, Skor Tertinggi Skor S-W</th>
                            </tr>

                            <tr>
                                <td scope="row">{{ $strategi->killerweakness3 }}</td>
                                <td>SW 1</td>
                                <td>{{ $strategi->sw1 }}</td>
                                <td>Tujuan Prioritas 1</td>
                                <td>{{ $strategi->tujuan_3 }}</td>
                            </tr>

                            <tr>
                                <td scope="row">{{ $strategi->killerweakness4 }}</td>
                                <td>SW 1</td>
                                <td>{{ $strategi->sw2 }}</td>
                                <td>Tujuan Prioritas 1</td>
                                <td>{{ $strategi->tujuan_4 }}</td>
                            </tr>

                        </tbody>
                    </table>
                    <table class="table table-sm table-bordered">
                        <thead class="thead-default">
                            <tr>
                                <th rowspan="4">No.</th>
                                <th rowspan="4">Tujuan Prioritas</th>
                                <th rowspan="4">Indikator Kinerja</th>
                                <th colspan="4">Nilai Indikator</th>
                            </tr>
                            <tr>
                                <th rowspan="2">Nilai Awal</th>
                                <th class="align-middle" colspan="{{ count($threats) }}"> Nilai Target</th>
                            </tr>
                            <tr>
                                @foreach ($threats as $key => $threat)
                                <th>T{{ $key+1 }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($indikatorTujuan->unique('tujuan_prioritas') as $key => $indikator)
                            <tr>
                                <td scope="row">{{ $key+1 }}</td>
                                <td>{{ $indikator->tujuan_prioritas }}</td>
                                <td>{{ $indikator->indikator_kinerja }}</td>
                                <td>{{ $indikator->nilai_awal }}</td>
                                @foreach (json_decode($indikator->nilai_target) as $targetThreat)
                                <td>{{ $targetThreat }}</td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

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
                                <th class="align-middle" rowspan="2">Nilai Awal</th>
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
                                <td rowspan="3" scope="row">{{ $key+1 }}</td>
                                <td rowspan="3">{{ $kegiatan->nama_kegiatan }}</td>
                            </tr>
                            @foreach ($kegiatan->indikatorKegiatan as $key => $indikatorKegiatan)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $indikatorKegiatan->kegiaatan }}</td>
                                <td>{{ $indikatorKegiatan->indikator_kinerja }}</td>
                                <td>{{ $indikatorKegiatan->nilai_awal }}</td>
                                @foreach (json_decode($indikatorKegiatan->nilai_target) as $target)
                                <td>{{ $target }}</td>
                                @endforeach
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>

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
                    </table> --}}
                    <div class="col-md-12">
                        <div class="card">
                            <h5 class="card-header bg-white border-bottom">
                                Stakeholder Terpilih
                            </h5>
                            <table class="table table-sm card-body">
                                <thead class="thead-default bg-light">
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
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-white border-bottom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Hasil Survey Prioritisasi Tujuan</h5>
                                    </div>
                                </div>

                            </div>
                            <table class="table card-body table-sm">
                                <thead class="thead-white">
                                    <tr>
                                        <th rowspan="2">Pengaruh</th>
                                        <th colspan="{{ count($threats) }}" class="text-center">Terhadap Pengurangan
                                            Dampak</th>
                                        <th colspan="{{ count($opportunities) }}" class="text-center">Terhadap
                                            Pemanfaatan</th>
                                        <th rowspan="2">Total Skor</th>
                                        <th rowspan="2">Option</th>
                                    </tr>
                                    <tr>
                                        @foreach ($threats as $key => $t)
                                        <th>T{{ $key+1 }}</th>
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

                                    <tr>
                                        <td class="text-wrap bg-soft-success">Total S</td>
                                        @foreach ($totalPerkolomT as $kolomT)
                                        @if ($kolomT != 0)
                                        <td class="text-wrap">{{ $kolomT }}</td>
                                        @endif
                                        @endforeach
                                        @foreach ($totalPerkolomS as $kolomS)
                                        @if ($kolomS != 0)
                                        <td class="text-wrap">{{ $kolomS }}</td>
                                        @endif
                                        @endforeach
                                        <td>{{ $totalSTonS }}</td>
                                    </tr>

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

                                    <tr>
                                        <td class="text-wrap bg-soft-success">Total Skor W</td>
                                        @foreach ($totalPerkolomTonW as $kolomTonW)
                                        @if ($kolomTonW != 0)
                                        <td class="text-wrap">{{ $kolomTonW }}</td>
                                        @endif
                                        @endforeach
                                        @foreach ($totalPerkolomOonW as $kolomOonW)
                                        @if ($kolomOonW != 0)
                                        <td class="text-wrap">{{ $kolomOonW }}</td>
                                        @endif
                                        @endforeach
                                        <td>{{ $totalSTonW }}</td>
                                    </tr>


                                    <tr>
                                        <th>Total Skor S-W</th>
                                        @foreach ($totalSW as $totalT)
                                        @if ($totalT != 0)
                                        <td class="text-wrap">{{ $totalT }}</td>
                                        @endif
                                        @endforeach
                                        @foreach ($totalSwOnO as $totalO)
                                        @if ($totalO != 0)
                                        <td class="text-wrap">{{ $totalO }}</td>
                                        @endif
                                        @endforeach
                                        <td>{{ $sumTotalSW }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if (!empty($proposal->strategi))
                    <div class="col-md-12 ">
                        <div class="card">
                            <h5 class="card-header bg-white border-bottom">
                                Lihat Killerweaknes
                            </h5>
                            <div class="card-body">
                                <p>Berdasarkan hasil survei di atas dapat diketahui bahwa:</p>
                                <table class="table table-bordered table-sm">
                                    <tbody>
                                        <tr>
                                            <th colspan="5">Killer weakness proyek “{{ $proposal->judul }}” adalah:</th>
                                        </tr>
                                        <tr>
                                            <td>KW 1</td>
                                            <td>{{ $strategi->kw1 }}</td>
                                            <td>Tujuan Prioritas 1</td>
                                            <td>{{ $strategi->tujuan_1 }}</td>
                                        </tr>
                                        <tr>
                                            <td>KW 2</td>
                                            <td>{{ $strategi->kw2 }}</td>
                                            <td>Tujuan Prioritas 1</td>
                                            <td>{{ $strategi->tujuan_2 }}</td>
                                        </tr>

                                        <tr>
                                            <th colspan="5">Sementara itu, Skor Tertinggi Skor S-W</th>
                                        </tr>

                                        <tr>
                                            <td>S-W 1</td>
                                            <td>{{ $strategi->sw1 }}</td>
                                            <td>Tujuan Prioritas 1</td>
                                            <td>{{ $strategi->tujuan_3 }}</td>
                                        </tr>

                                        <tr>
                                            <td>S-W 2</td>
                                            <td>{{ $strategi->sw2 }}</td>
                                            <td>Tujuan Prioritas 1</td>
                                            <td>{{ $strategi->tujuan_4 }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="col-md-12">
                        <table class="table table-sm table-bordered">
                            <thead class="thead-default">
                                <tr>
                                    <th rowspan="4">No.</th>
                                    <th rowspan="4">Tujuan Prioritas</th>
                                    <th rowspan="4">Indikator Kinerja</th>
                                    <th colspan="7">Nilai Indikator</th>
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
                                @foreach ($indikatorTujuan->unique('tujuan') as $key => $indikator)
                                <tr>
                                    <td rowspan="{{ count($indikator->indikators)+1 }}" scope="row">{{ $key+1 }}</td>
                                    <td rowspan="{{ count($indikator->indikators)+1 }}">
                                        {{ $indikator->tujuan }}
                                    </td>
                                </tr>
                                @foreach ($indikator->indikators as $indikatortujuan)
                                <tr>
                                    <td>{{ $indikatortujuan->indikator_kinerja }} </td>

                                    @foreach (json_decode($indikatortujuan->nilai_target) as $targetThreat)
                                    <td>{{ $targetThreat }}</td>
                                    @endforeach
                                </tr>
                                @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <h5 class="card-header bg-white">Data Nilai</h5>
                            <table class="table card-body table-sm bg-white table-bordered">
                                <thead>
                                    <tr>
                                        <th class="align-middle" rowspan="4">No.</th>
                                        <th class="align-middle" rowspan="4">Tujuan Prioritas</th>
                                        <th class="align-middle" rowspan="4">No Kegiatan</th>
                                        <th class="align-middle" rowspan="4">Kegiatan</th>
                                        <th class="align-middle" rowspan="4">Indikator Kinerja</th>
                                        <th class="align-middle" colspan="{{ end($getMaxNilaiTarget)+1 }}">Nilai
                                            Indikator</th>
                                    </tr>
                                    <tr>
                                        <th class="align-middle" rowspan="2">Nilai Awal</th>
                                        <th class="align-middle" colspan="{{ end($getMaxNilaiTarget) }}"> Nilai Target
                                        </th>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
