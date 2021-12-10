<?php

use App\Http\Controllers\ProposalController;
use App\Http\Livewire\Analisys\DaftarProposal;
use App\Http\Livewire\Anggota\Create as AnggotaCreate;
use App\Http\Livewire\Anggota\Index as AnggotaIndex;
use App\Http\Livewire\Anggota\Update as AnggotaUpdate;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\IndikatorKegiatan\DaftarProposal as IndikatorKegiatanDaftarProposal;
use App\Http\Livewire\IndikatorKegiatan\Index as IndikatorKegiatanIndex;
use App\Http\Livewire\IndikatorTujuan\Create as IndikatorTujuanCreate;
use App\Http\Livewire\IndikatorTujuan\DaftarProposal as IndikatorTujuanDaftarProposal;
use App\Http\Livewire\IndikatorTujuan\Index as IndikatorTujuanIndex;
use App\Http\Livewire\Kondisi\Create as KondisiCreate;
use App\Http\Livewire\Kondisi\DaftarProposal as KondisiDaftarProposal;
use App\Http\Livewire\Kondisi\Index as KondisiIndex;
use App\Http\Livewire\Kondisi\Update as KondisiUpdate;
use App\Http\Livewire\PenentuanRencana\DaftarProposal as PenentuanRencanaDaftarProposal;
use App\Http\Livewire\PenentuanRencana\Index as PenentuanRencanaIndex;
use App\Http\Livewire\Proposal\Create;
use App\Http\Livewire\Proposal\Download;
use App\Http\Livewire\Proposal\Index;
use App\Http\Livewire\Proposal\Show;
use App\Http\Livewire\Proposal\Update;
use App\Http\Livewire\Strategi\Create as StrategiCreate;
use App\Http\Livewire\Strategi\DaftarProposal as StrategiDaftarProposal;
use App\Http\Livewire\Strategi\Index as StrategiIndex;
use App\Http\Livewire\Strategi\Show as StrategiShow;
use App\Http\Livewire\Strategi\Update as StrategiUpdate;
use App\Http\Livewire\Survey\Create as SurveyCreate;
use App\Http\Livewire\Survey\Index as SurveyIndex;
use App\Http\Livewire\SurveyKondisi\DaftarProposal as SurveyKondisiDaftarProposal;
use App\Http\Livewire\SurveyKondisi\InputNilai;
use App\Http\Livewire\SurveyKondisi\IsiSurvey;
use App\Http\Livewire\Tujuan\Create as TujuanCreate;
use App\Http\Livewire\Tujuan\Index as TujuanIndex;
use App\Http\Livewire\Tujuan\Update as TujuanUpdate;
use App\Http\Livewire\User\Create as UserCreate;
use App\Http\Livewire\User\Index as UserIndex;
use App\Http\Livewire\User\Update as UserUpdate;
use App\Models\Anggota;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});
Route::get('tentang', \App\Http\Livewire\Tentang::class)->name('tentang');
Route::get('contact-us', \App\Http\Livewire\ContactUs::class)->name('contact-us');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('tentang', Dashboard\Tentang::class)->name('dashboard.tentang');
    Route::get('instrument', Dashboard\Instrumen::class)->name('dashboard.instrumen');
    Route::group(['prefix' => 'proposal'], function () {
        Route::get('/', Index::class)->name('proposal.index');
        Route::get('ubah-proposal/{id}', Update::class)->name('proposal.update-proposal');
        Route::get('tambah-proposal', Create::class)->name('proposal.tambah-proposal');
        Route::get('lihat-proposal/{id}', Show::class)->name('proposal.lihat-proposal');
        Route::get('download-proposal/{id}', [ProposalController::class, 'downloadPdf'])->name('proposal.download');
    });

    Route::group(['prefix' => 'anggota'], function () {
        Route::get('/', AnggotaIndex::class)->name('anggota.index');
        Route::get('tambah-anggota/{proposal_id}', AnggotaCreate::class)->name('anggota.create');
        Route::get('update-anggota', AnggotaUpdate::class)->name('anggota.update');
    });

    Route::group(['prefix' => 'survey'], function () {
        Route::get('/', DaftarProposal::class)->name('daftar-proposal');
        Route::get('daftar-survey/{proposal_id}', SurveyIndex::class)->name('survey.index');
        Route::get('tambah-survey/{proposal_id}', SurveyCreate::class)->name('survey.create')->withoutMiddleware('auth');
    });

    Route::group(['prefix' => 'kondisi'], function () {
        Route::get('/', KondisiIndex::class)->name('kondisi.index');
        Route::get('tambah-kondisi/{proposal_id}', KondisiCreate::class)->name('kondisi.create');
        Route::get('edit-kondisi', KondisiUpdate::class)->name('kondisi.update');
        Route::get('daftar-proposal', KondisiDaftarProposal::class)->name('kondisi.daftar-proposal');
    });

    Route::group(['prefix' => 'strategi'], function () {
        Route::get('/', StrategiIndex::class)->name('strategi.index');
        Route::get('/daftar-proposal', StrategiDaftarProposal::class)->name('strategi.daftar-proposal');
        Route::get('tambah-strategi/{proposal_id}', StrategiCreate::class)->name('strategi.create');
        Route::get('edit-strategi', StrategiUpdate::class)->name('stretegi.update');
        Route::get('show-strategi/{strategi_id}', StrategiShow::class)->name('strategi.show');
    });

    Route::group(['prefix' => 'tujuan'], function () {
        Route::get('/', TujuanIndex::class)->name('tujuan.index');
        Route::get('tambah-tujuan/{proposal_id}', TujuanCreate::class)->name('tujuan.create');
        Route::get('edit-tujuan', TujuanUpdate::class)->name('tujuan.update');
        Route::get('daftar-proposal', KondisiDaftarProposal::class)->name('tujuan.daftar-proposal');
    });

    Route::group(['prefix' => 'survey-kondisi'], function () {
        Route::get('daftar-proposal', SurveyKondisiDaftarProposal::class)->name('survey-kondisi.daftar-proposal');
        Route::get('jawab-survey-kondisi/{proposal_id}', IsiSurvey::class)->name('survey-kondisi.jawab-survey');
        Route::get('input-nilai/{proposal_id}', InputNilai::class)->name('survey-kondisi.input-nilai');
    });

    Route::group(['prefix' => 'indikator-tujuan'], function () {
        Route::get('/tujuan/{proposal_id}', IndikatorTujuanIndex::class)->name('indikator-tujuan.index');
        Route::get('daftar-proposal', IndikatorTujuanDaftarProposal::class)->name('indikator.daftar-proposal');
        Route::get('tambah/', IndikatorTujuanCreate::class)->name('indikator.tambah');
    });

    Route::group(['prefix' => 'indikator-kegiatan'], function () {
        Route::get('daftar-proposal', IndikatorKegiatanDaftarProposal::class)->name('indikator-kegiatan.daftar-proposal');
        Route::get('tambah/{proposal_id}', IndikatorKegiatanIndex::class)->name('indikator-kegiatan.index');
    });

    Route::group(['prefix' => 'penentuan-rencana'], function () {
        Route::get('daftar-proposal', PenentuanRencanaDaftarProposal::class)->name('rencana.daftar-proposal');
        Route::get('tambah/{proposal_id}', PenentuanRencanaIndex::class)->name('rencana.index');
    });

    Route::group(['prefix' => 'pengguna'], function () {
        Route::get('semua', UserIndex::class)->name('pengguna.index');
        Route::get('tambah', UserCreate::class)->name('pengguna.create');
        Route::get('ubah/{id}', UserUpdate::class)->name('pengguna.update');
    });

    Route::group(['prefix' => 'pengaturan'],function (){
        Route::get('general', \App\Http\Livewire\Pengaturan\General::class)->name('pengaturan.general');
    });
});
Route::get('/keluar', function () {
    Auth::logout();
    return redirect('/login');
})->name('keluar');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', Dashboard::class)->name('dashboard');
