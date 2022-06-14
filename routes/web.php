<?php

use App\Http\Controllers\DokumenController;
use App\Http\Controllers\LemariController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::name('rels.')->group(function () {
        Route::get('rels', [RelController::class, 'index'])->name('index');
    });

    Route::name('lemaris.')->group(function () {
        Route::get('lemaris', [LemariController::class, 'index'])->name('index');
    });

    Route::name('raks.')->group(function () {
        Route::get('raks', [RakController::class, 'index'])->name('index');
    });

    Route::name('dokumens.')->group(function () {
        Route::get('dokumens', [DokumenController::class, 'index'])->name('index');
    });

    Route::name('perangkat_daerahs.')->group(function () {
        Route::get('perangkat_daerahs', [PerangkatDaerahController::class, 'index'])->name('index');
    });

    Route::name('pegawais.')->group(function () {
        Route::get('pegawais', [PegawaiController::class, 'index'])->name('index');
    });

    Route::name('ardis.')->group(function () {
        Route::get('ardis', [RakController::class, 'index'])->name('index');
    });

    Route::name('users.')->group(function () {
        Route::get('users', [UserController::class, 'index'])->name('index');
    });
});
