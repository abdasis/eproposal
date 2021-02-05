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
                    {{ Str::ucfirst("Input Nilai dari Hasil Survei Prioritisasi Tujuan") }}
                </h5>
                <div class="card-body">
                    <form wire:submit.prevent='store'>
                        <div class="form-group">
                            <label for="">Pilih Streng</label>
                            <select class="custom-select shadow-none" wire:model='kondisi' name="" id="">
                                <option selected>Pilih Streng</option>
                                <optgroup label="Strenght">
                                    @foreach ($kondisis as $key => $kondisi)
                                    <option value="S{{ $key+1 }} - {{ $kondisi->kondisi }}">S{{ $key+1 }} -
                                        {{ $kondisi->kondisi }}
                                    </option>
                                    @endforeach
                                </optgroup>
                                <optgroup label="Weakness">
                                    @foreach ($weakness as $key => $w)
                                    <option value="W{{ $key+1 }} - {{ $w->kondisi }}">W{{ $key+1 }} - {{ $w->kondisi }}
                                    </option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                        @foreach ($threats as $key => $threat)
                        <div class="form-group row">
                            <div class="col-md-9">
                                <label for="">T{{ $key+1 }}</label>
                                <input type="text" disabled value="T{{ $key+1 }}"
                                    class="form-control shadow-none bg-light">
                            </div>
                            <div class="col-md-3">
                                <label for="">Nilai</label>
                                <input required type="text" class="form-control shadow-none"
                                    wire:model='nilai_dampak.{{ $key }}'>
                            </div>
                        </div>
                        @endforeach

                        @foreach ($opportunities as $key => $opportunity)
                        <div class="form-group row">
                            <div class="col-md-9">
                                <label for="">O{{ $key+1 }}</label>
                                <input type="text" disabled value="O{{ $key+1 }}"
                                    class="form-control shadow-none bg-light">
                            </div>
                            <div class="col-md-3">
                                <label for="">Nilai</label>
                                <input type="text" class="form-control shadow-none"
                                    wire:model='nilai_manfaat.{{ $key }}'>
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
                <div class="card-header bg-white border-bottom">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Hasil Survey Prioritisasi Tujuan</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url()->previous() }}">
                                <button class="btn btn-light btn-sm float-right">Kembali</button>
                            </a>
                        </div>
                    </div>

                </div>
                <table class="table card-body table-bordered table-sm">
                    <thead class="thead-white">
                        <tr>
                            <th rowspan="2">Pengaruh</th>
                            <th colspan="{{ count($threats) }}" class="text-center">Terhadap Pengurangan Dampak</th>
                            <th colspan="{{ count($opportunities) }}" class="text-center">Terhadap Pemanfaatan</th>
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

                        {{-- <tr>
                            <td class="text-wrap">NO</td>
                            <th>PENGARUH</th>
                            <th>TERHADAP PENGURANGAN DAMPAK</th>
                            <th>NILAI</th>
                            <th>TERHADAP PEMANFAATAN</th>
                            <th>NILAI</th>
                            <th>TOTAL THREAT</th>
                            <th>TOTAL STRENGHT</th>
                        </tr> --}}

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
                            <td class="text-center">
                                <button class="btn btn-sm btn-danger shadow-none"
                                    wire:click='delete({{ $kondisi->id }})'><i class="fa fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        @endif
                        @endforeach

                        @if (count($jumlahTdiS)>0)
                        <td class="text-wrap bg-soft-success">Total S</td>
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
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-danger shadow-none"
                                            wire:click='delete({{ $kondisi->id }})'><i
                                                class="fa fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                            @endif
                        @endforeach

                        @if (count($jumlahTdiW)>0)
                            <td class="text-wrap bg-soft-success">Total W</td>
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
                            <td class="text-wrap bg-soft-danger">Total S-W</td>
                            @for ($i = 0; $i < count($jumlahTdiW[0]); $i++) <td class="text-wrap">
                            {{ ($jumlahTdiS->sum($i) - $jumlahTdiW->sum($i)) }}</td>
                            @endfor

                            @for ($totalSW = 0; $totalSW < count($jumlahOdiW[0]); $totalSW++) <td class="text-wrap">
                                {{ $jumlahOdiS->sum($totalSW) - $jumlahOdiW->sum($totalSW) }}</td>
                            @endfor

                        @endif
                        <td>{{ $totalS-$totalW }}</td>
                        </tr>


                                        {{-- @foreach ($totalPerkolomS as $kolomS)
                        @if ($kolomS != 0)
                        <td class="text-wrap">{{ $kolomS }}</td>
                                        @endif
                                        @endforeach
                                        <td>{{ $totalSTonS }}</td>
                                        </tr> --}}
                                        {{-- <tr>




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
                                        </tr> --}}
                    </tbody>
                </table>
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
