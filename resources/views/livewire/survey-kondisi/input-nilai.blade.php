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
                            <label for="">Pilih Streng</label>
                            <select class="custom-select shadow-none" wire:model='kondisi' name="" id="">
                                <option selected>Pilih Streng</option>
                                <optgroup label="Strenght">
                                    @foreach ($kondisis as $key => $kondisi)
                                        <option value="{{ $kondisi->kondisi }}">S{{ $key+1 }} - {{ $kondisi->kondisi }}</option>
                                    @endforeach
                                </optgroup>
                                <optgroup label="Weakness">
                                    @foreach ($weakness as $key => $w)
                                        <option value="{{ $w->kondisi }}">W{{ $key+1 }} - {{ $w->kondisi }}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8">
                                <label for="">Pilih Threat</label>
                                <select class="custom-select shadow-none" wire:model='dampak' name="" id="">
                                    <option selected>Pilih Streng</option>
                                    @foreach ($threats as $key => $threat)
                                        <option value="{{ $threat->kondisi }}">T{{ $key+1 }} - {{ $threat->kondisi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">Nilai Threat</label>
                                <input type="text" class="form-control shadow-none" wire:model='nilai_dampak'>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8">
                                <label for="">Pilih Opportunity</label>
                                <select class="custom-select shadow-none" wire:model='manfaat' name="" id="">
                                    <option selected>Pilih Streng</option>
                                    @foreach ($opportunities as $key => $opportunity)
                                        <option value="{{ $opportunity->kondisi }}">O{{ $key+1 }} - {{ $opportunity->kondisi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">Nilai Threat</label>
                                <input type="text" class="form-control shadow-none" wire:model='nilai_manfaat'>
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
                <div class="card-header bg-white border-bottom">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Data Nilai Strength</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url()->previous() }}">
                                <button class="btn btn-light btn-sm float-right">Kembali</button>
                            </a>
                            <a href="{{ url()->previous() }}">
                                <button class="btn btn-light btn-sm float-right">Kembali</button>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-sm table-responsive">
                        <thead class="thead-white">
                            {{-- <tr>
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
                            </tr> --}}

                            <tr>
                                <td>NO</td>
                                <th>PENGARUH</th>
                                <th>TERHADAP PENGURANGAN DAMPAK</th>
                                <th>NILAI</th>
                                <th>TERHADAP PEMANFAATAN</th>
                                <th>NILAI</th>
                                <th>TOTAL THREAT</th>
                                <th>TOTAL STRENGHT</th>
                            </tr>

                            </thead>
                            <tbody>
                                @foreach ($surveyKondisis as $key => $kondisi)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $kondisi->pengaruh }}</td>
                                        <td>T{{ $key+1 }}</td>
                                        <td>{{ $kondisi->nilaiKondisi[0]->nilai }}</td>
                                        <td>O{{ $key+1 }}</td>
                                        <td>{{ $kondisi->nilaiManfaat[0]->nilai }}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <th>Total Skor S</th>
                                </tr>
                                {{-- <tr>
                                    <td>W1</td>
                                </tr>
                                <tr>
                                    <td>W2</td>
                                </tr>
                                <tr>
                                    <td>W3</td>
                                </tr>
                                <tr>
                                    <th>Total Skor W</th>
                                </tr>
                                <tr>
                                    <th>Total Skor W-S</th>
                                </tr> --}}
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
