<x-guest-layout>
    <div class="row"  style="min-height: 90vh">
        <div class="col-md-7 my-auto">
            <div class="content animate__animated  animate__fadeinleft">
                <h1 class="title-baner">{{\illuminate\support\str::title('selamat datang ')}}di <span class="text-success">SIRASTI</span></h1>
                <p class="text-banner">
                    sistem informasi ini dimaksudkan untuk membantu fasilitator pemberdayaan masyarakat (fmp) beserta pihak terkait lainnya dalam menyusun dokumen rencana aksi strategis (ras) pembangunan/pengembangan ekonomi masyarakat di tingkat lokal (rukun tangga/rukun warga, dusum atau desa/kelurahan). pembangunan ekonomi lokal (pel) bercirikan pemanfaatan sumberdaya (manusia, modal, alam dan sosial) lokal/setempat dan partisipatif. dengan mengikuti tahapan/proses penyusunan ras yang diarahkan oleh sistem informasi ini, tim perencana (fpm dan pihak terkait lainnya) diharapkan dapat menyusun sebuah dokumen ras sebuah topik pel yang dirumuskan dan disepakati secara partisipatif (bersama).
                </p>
                <a href="{{route('register')}}">
                    <button class="btn btn-secondary btn-lg px-5">Daftar Menjadi</button>
                </a>
            </div>

        </div>
        <div class="col-md-5 my-auto">
            <div class="img-banner text-center animate__animated animate__fadeinrightbig animate__delay-0.5s">
                <img src="{{asset('assets/images/checklist-bro.png')}}" class="img-fluid img-responsive" alt="">
            </div>
        </div>
    </div>
</x-guest-layout>
