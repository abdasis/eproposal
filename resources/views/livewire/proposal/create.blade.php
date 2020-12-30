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
                <h4 class="page-title"> <a href="{{ url()->previous() }}"><i
                            class="fa fa-arrow-circle-left text-info"></i></a> Pembuatan Proposal</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info border-left">
                <h5 class="alert-heading">Petunjuk</h5>
                <ol type="1">
                    <li>
                        FPM mungkin telah memiliki misi dan topik PEL sendiri berdasarkan penugasannya. Jika demikian,
                        maka bisa langsung “dimulai”
                    </li>
                    <li>
                        Jika FPM belum memiliki topik PEL, maka perlu diskusi awal dengan pembuat keputusan utama di
                        lokasi, misalnya kepala desa/dusun/RT/RT beserta aparat/pengurusnya untuk memutuskan topik PEL
                        yang akan dikembangkan di tempat tersebut. GUNAKAN FORM I untuk mengidentifikasi topik PEL. Jika
                        sudah ditemukan topik PEL, maka bisa langsung “dimulai”
                    </li>
                </ol>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">
                    Tambah Proposal
                </h5>
                <div class="card-body">
                    <form wire:submit.prevent='store'>
                        <div class="form-group">
                            <label for="judul">Judul Proyek PEL</label>
                            <input type="text" wire:model='judul'
                                class="form-control shadow-none @error('judul') is-invalid @enderror">
                            <div class="small text-muted">
                                (Tuliskan judul / topik PEL yang akan disusun. Misalya: “Pengembangan Ekonomi
                                Rumahtangga melalui Pengelolaan Sampah Domestik”; “Pengembangan Produk Pisang Dusun Suka
                                Makmur”; “Pengembangan Kerajinan Gerabah Desa Suka Usaha”; dst.)
                            </div>
                            @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="">Provinsi</label>
                                <input type="text"
                                    class="form-control shadow-none @error('provinsi') is-invalid @enderror"
                                    wire:model='provinsi'>
                                @error('provinsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="">Kabupaten</label>
                                <input type="text"
                                    class="form-control shadow-none @error('kabupaten') is-invalid @enderror"
                                    wire:model='kabupaten'>
                                @error('kabupaten')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="">Kecamatan</label>
                                <input type="text"
                                    class="form-control shadow-none @error('kecamatan') is-invalid @enderror"
                                    wire:model='kecamatan'>
                                @error('kecamatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="">Desa</label>
                                <input type="text" class="form-control shadow-none @error('desa') is-invalid @enderror"
                                    wire:model='desa'>
                                @error('desa')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="">Dusun</label>
                                <input type="text" class="form-control shadow-none @error('Dusun') is-invalid @enderror"
                                    wire:model='dusun'>
                                @error('Dusun')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="">RT/RW</label>
                                <input type="text" class="form-control shadow-none @error('rtrw') is-invalid @enderror"
                                    wire:model='rtrw'>
                                @error('rtrw')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="permasalahan">1.1 Permasalahan</label>
                            <textarea class="form-control shadow-none" wire:model="permasalahan" id="permasalahan"
                                rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="potensi">1.2 Potensi</label>
                            <textarea class="form-control shadow-none" wire:model="potensi" id="potensi"
                                rows="3"></textarea>
                        </div>

                        <div class="form-group" wire:ignore>
                            <label for="">Latar Belakang</label>
                            <textarea id="latar_belakang" wire:model='latar_belakarang' class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn float-right btn-outline-info"><i class="fa fa-save mr-1"></i>Simpan
                                Proposal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">
                    Diskripsi
                </h5>
                <div class="card-body">
                    <p><b>Judul:</b> {{ $judul }}</p>
                    <p><b>Pronvinsi:</b> {{ $provinsi }}</p>
                    <p><b>Kabupaten:</b> {{ $kabupaten }}</p>
                    <p><b>Kecamatan:</b> {{ $kecamatan }}</p>
                    <p><b>Desa:</b> {{ $desa }}</p>
                    <p><b>Dusun:</b> {{ $dusun }}</p>
                    <p><b>RT/RW:</b> {{ $rtrw }}</p>
                    <p><b>Latar Belakang:</b> {!! $latar_belakang !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
    tinymce.init({
        selector: 'textarea#latar_belakang',
        plugins: 'advlist lists autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
        toolbar: 'undo redo | formatselect | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
        height: 500,
        setup: function(editor){
            editor.on('keyup', function(e){
                @this.set('latar_belakang', tinymce.activeEditor.getContent())
            })
        }
    });

    Livewire.on('success', function(){
        Swal.fire(
            'Good job!',
            'Data berhasil disimpan!',
            'success'
        )
    })
</script>
@endpush
