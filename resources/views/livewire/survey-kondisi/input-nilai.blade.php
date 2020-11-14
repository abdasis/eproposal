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
                                @foreach ($kondisis as $key => $kondisi)
                                    <option value="{{ $kondisi->penyebab_langsung }}">S{{ $key+1 }} - {{ $kondisi->penyebab_langsung }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8">
                                <label for="">Pilih Threat</label>
                                <select class="custom-select shadow-none" wire:model='dampak' name="" id="">
                                    <option selected>Pilih Streng</option>
                                    @foreach ($threats as $key => $threat)
                                        <option value="{{ $threat->penyebab_langsung }}">T{{ $key+1 }} - {{ $threat->penyebab_langsung }}</option>
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
                                    @foreach ($threats as $key => $threat)
                                        <option value="{{ $threat->penyebab_langsung }}">O{{ $key+1 }} - {{ $threat->penyebab_langsung }}</option>
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
                            <h5>INPUT NILAI KONDISI STRENG</h5>
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
                    <table class="table table-bordered table-sm">
                        <thead class="thead-white">
                            <tr>
                                <th rowspan="2">Pengaruh</th>
                                <th colspan="3" class="text-center">Terhadap Pengurangan Dampak</th>
                                <th colspan="3" class="text-center">Terhadap Pemanfaatan</th>
                                <th rowspan="2">Total Skor</th>
                                <th rowspan="2">Option</th>
                            </tr>
                            <tr>
                                <th>T1</th>
                                <th>T2</th>
                                <th>T3</th>

                                <th>O1</th>
                                <th>O2</th>
                                <th>O3</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>S1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>S2</td>
                                </tr>
                                <tr>
                                    <td>S3</td>
                                </tr>
                                <tr>
                                    <th>Total Skor S</th>
                                </tr>
                                <tr>
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
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
