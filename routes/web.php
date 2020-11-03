<?php

use App\Http\Livewire\Analisys\DaftarProposal;
use App\Http\Livewire\Anggota\Create as AnggotaCreate;
use App\Http\Livewire\Anggota\Index as AnggotaIndex;
use App\Http\Livewire\Anggota\Update as AnggotaUpdate;
use App\Http\Livewire\Kondisi\Create as KondisiCreate;
use App\Http\Livewire\Kondisi\DaftarProposal as KondisiDaftarProposal;
use App\Http\Livewire\Kondisi\Index as KondisiIndex;
use App\Http\Livewire\Kondisi\Update as KondisiUpdate;
use App\Http\Livewire\Proposal\Create;
use App\Http\Livewire\Proposal\Index;
use App\Http\Livewire\Proposal\Show;
use App\Http\Livewire\Proposal\Update;
use App\Http\Livewire\Survey\Create as SurveyCreate;
use App\Http\Livewire\Survey\Index as SurveyIndex;
use App\Models\Anggota;
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
    return redirect()->route('proposal.index');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'proposal'], function () {
        Route::get('/', Index::class)->name('proposal.index');
        Route::get('ubah-proposal/{id}', Update::class)->name('proposal.update-proposal');
        Route::get('tambah-proposal', Create::class)->name('proposal.tambah-proposal');
        Route::get('lihat-proposal/{id}', Show::class)->name('proposal.lihat-proposal');
    });

    Route::group(['prefix' => 'anggota'], function () {
        Route::get('/', AnggotaIndex::class)->name('anggota.index');
        Route::get('tambah-anggota/{proposal_id}', AnggotaCreate::class)->name('anggota.create');
        Route::get('update-anggota', AnggotaUpdate::class)->name('anggota.update');
    });

    Route::group(['prefix' => 'survey'], function () {
        Route::get('/', DaftarProposal::class)->name('daftar-proposal');
        Route::get('daftar-survey/{proposal_id}', SurveyIndex::class)->name('survey.index');
        Route::get('tambah-survey/{proposal_id}', SurveyCreate::class)->name('survey.create');
    });

    Route::group(['prefix' => 'kondisi'], function () {
        Route::get('/', KondisiIndex::class)->name('kondisi.index');
        Route::get('tambah-kondisi/{proposal_id}', KondisiCreate::class)->name('kondisi.create');
        Route::get('edit-kondisi', KondisiUpdate::class)->name('kondisi.update');
        Route::get('daftar-proposal', KondisiDaftarProposal::class)->name('kondisi.daftar-proposal');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
