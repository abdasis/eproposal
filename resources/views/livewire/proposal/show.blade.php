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
                <h4 class="page-title"><a href="{{ url()->previous() }}"><i class="fa fa-arrow-circle-left text-info"></i></a> Detail Proposal</h4>
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
                    </div>
                    <div class="card-text lokasi">
                        <h5>Lokasi</h5>
                        <p>{{ $proposal->dusun }}, {{ $proposal->desa }}, {{ $proposal->kecamatan }}, {{ $proposal->kabupaten }}, {{ $proposal->provinsi }}, {{ $proposal->rtrw }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
