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
</div>
