<?php

use App\Http\Livewire\Proposal\Create;
use App\Http\Livewire\Proposal\Index;
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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'tahapan'], function () {
        Route::get('tahap-1', Index::class)->name('tahap-1');
        Route::get('tambah-proposal', Create::class)->name('tahap-1.tambah-proposal');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
