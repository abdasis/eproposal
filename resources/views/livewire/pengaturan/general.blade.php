<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pengaturan</a></li>
                        <li class="breadcrumb-item active">General</li>
                    </ol>
                </div>
                <h4 class="page-title"> <a href="{{ url()->previous() }}"><i
                            class="fa fa-arrow-circle-left text-info"></i></a> Pengaturan</h4>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-white border-light border-bottom">
                    <strong>Pengaturan Situs</strong>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="simpan" action="">
                        <div class="form-group">
                            <label for="">Tanda Tangan</label>
                            <input type="text" class="form-control shadow-none" placeholder="Masukan tanda tangan" name="" id="" wire:model="ttd">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary shadow-none">
                                Simpan Pengaturan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
