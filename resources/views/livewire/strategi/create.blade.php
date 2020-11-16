<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Analisys</a></li>
                        <li class="breadcrumb-item active">Kondisi</li>
                    </ol>
                </div>
                <h4 class="page-title">Catat Strategi</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info">
                <h5>Petunjuk:</h5>
                <ol type="1" class="pl-2">
                    <li>Dengan memanfaatkan Tabel V, FPM menentukan Killer Weakneses serta Skor Tertinggi Skor S-W (Gunakan FORM IV)</li>
                    <li>Hasil dari FORM IV dimasukkan ke Tabel berikut </li>
                </ol>
            </div>
        </div>

        <div class="col-md-12 ">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">
                    Buat Strategi
                </h5>
                <div class="card-body">
                    <p>Berdasarkan hasil survei di atas dapat diketahui bahwa:</p>
                    <form wire:submit.prevent ='store'>
                        <ol type="1" class="p-2">
                            <h5>Killer weakness proyek “{{ $proposal->judul }}” adalah:</h5>
                            <li >
                                <div class="form-group-custom form-row align-items-center">
                                    <div class="col my-1">
                                        <input wire:model='killerweakness1' type="text" class="form-control shadow-none">
                                    </div>
                                    <div class="col-auto my-1">
                                        <label class="form-check-label mx-auto">
                                            KW 1
                                        </label>
                                    </div>
                                    <div class="col my-1">
                                        <input type="text" wire:model='kw1' class="form-control shadow-none">
                                    </div>
                                    <div class="col-auto my-1">
                                        <label class="form-check-label mx-auto">
                                            tujuan Prioritas 1
                                        </label>
                                    </div>
                                    <div class="col my-1">
                                        <input type="text" wire:model='tujuan1' class="form-control shadow-none">
                                    </div>
                                </div>
                            </li>

                            <li >
                                <div class="form-group-custom form-row align-items-center">
                                    <div class="col my-1">
                                        <input type="text" wire:model='killerweakness2' class="form-control">
                                    </div>
                                    <div class="col-auto my-1">
                                        <label class="form-check-label mx-auto">
                                            KW 1
                                        </label>
                                    </div>
                                    <div class="col my-1">
                                        <input type="text" wire:model='kw2' class="form-control shadow-none">
                                    </div>
                                    <div class="col-auto my-1">
                                        <label class="form-check-label mx-auto">
                                            tujuan Prioritas 2
                                        </label>
                                    </div>
                                    <div class="col my-1">
                                        <input type="text" wire:model='tujuan2' class="form-control shadow-none">
                                    </div>
                                </div>
                            </li>

                            <h5>
                                Sementara itu, Skor Tertinggi Skor S-W
                            </h5>

                            <li >
                                <div class="form-group-custom form-row align-items-center">
                                    <div class="col my-1">
                                        <input wire:model='killerweakness3' type="text" class="form-control">
                                    </div>
                                    <div class="col-auto my-1">
                                        <label class="form-check-label mx-auto">
                                            SW 1
                                        </label>
                                    </div>
                                    <div class="col my-1">
                                        <input type="text" wire:model='sw1' class="form-control shadow-none">
                                    </div>
                                    <div class="col-auto my-1">
                                        <label class="form-check-label mx-auto">
                                            tujuan Prioritas 3
                                        </label>
                                    </div>
                                    <div class="col my-1">
                                        <input type="text" wire:model='tujuan3' class="form-control shadow-none">
                                    </div>
                                </div>
                            </li>

                            <li >
                                <div class="form-group-custom form-row align-items-center">
                                    <div class="col my-1">
                                        <input wire:model='killerweakness4' type="text" class="form-control">
                                    </div>
                                    <div class="col-auto my-1">
                                        <label class="form-check-label mx-auto">
                                            SW 1
                                        </label>
                                    </div>
                                    <div class="col my-1">
                                        <input type="text" wire:model='sw2' class="form-control shadow-none">
                                    </div>
                                    <div class="col-auto my-1">
                                        <label class="form-check-label mx-auto">
                                            tujuan Prioritas 4
                                        </label>
                                    </div>
                                    <div class="col my-1">
                                        <input type="text" wire:model='tujuan4' class="form-control shadow-none">
                                    </div>
                                </div>
                            </li>
                        </ol>
                        <div class="form-group">
                            <button class="btn btn-outline-blue pl-3">Simpan Strategi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@push('js')
    <script>
        Livewire.on('success', function(){
            Swal.fire(
                'Good job!',
                'Data berhasil disimpan!',
                'success'
            )
        })
    </script>
@endpush
