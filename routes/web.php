<?php

use App\Http\Controllers\ArdiController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\LemariController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PerangkatDaerahController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\RelController;
use App\Http\Controllers\UserController;
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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('auth.login');
});


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [RelController::class, 'dashboard'])->name('dashboard');
    Route::get('/get_rels', [RelController::class, 'get_rels'])->name('get_rels');
    Route::get('/get_raks', [RakController::class, 'get_raks'])->name('get_raks');
    Route::get('/get_lemaris', [LemariController::class, 'get_lemaris'])->name('get_lemaris');
    Route::get('/get_pegawais', [PegawaiController::class, 'get_pegawais'])->name('get_pegawais');
    Route::get('/get_dokumens', [DokumenController::class, 'get_dokumens'])->name('get_dokumens');
    Route::get('/get_files/{file_name}/{pegawai_nip}', [ArdiController::class, 'get_files'])->name('get_files');
    Route::get('/get_perangkat_daerahs', [PerangkatDaerahController::class, 'get_perangkat_daerahs'])->name('get_perangkat_daerahs');

    Route::resource('rels', RelController::class);
    Route::resource('raks', RakController::class);
    Route::resource('users', UserController::class);
    Route::resource('lemaris', LemariController::class);
    Route::resource('lokasis', LokasiController::class);
    Route::resource('dokumens', DokumenController::class);
    Route::resource('pegawais', PegawaiController::class);
    Route::resource('perangkat_daerahs', PerangkatDaerahController::class);

    Route::name('ardis.')->group(function () {
        Route::get('ardis', [ArdiController::class, 'index'])->name('index');
        Route::post('store', [ArdiController::class, 'store'])->name('store');
        Route::get('edit/{pegawai}', [ArdiController::class, 'edit'])->name('edit');
        Route::get('create/{pegawai}', [ArdiController::class, 'create'])->name('create');
        Route::get('/detach/{dokumen_id}/{pegawai_id}', [ArdiController::class, 'detach'])->name('detach');
    });
});
