<?php

use App\Http\Controllers\artikelController;
use App\Http\Controllers\donaturController;
use App\Http\Controllers\galeryController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [profileController::class, 'beranda'])->name('beranda');
Route::prefix('/artikel')->name('artikel.')->group(function() {
    Route::get('/', [profileController::class, 'artikel'])->name('artikel');
    Route::get('/art1', [artikelController::class, 'show1'])->name('art1');
    Route::get('/art2', [artikelController::class, 'show2'])->name('art2');
    Route::get('/art3', [artikelController::class, 'show3'])->name('art3');
    Route::get('/art4', [artikelController::class, 'show4'])->name('art4');
    Route::get('/art5', [artikelController::class, 'show5'])->name('art5');
    Route::get('/art6', [artikelController::class, 'show6'])->name('art6');
});

Route::get('/sejarah', [profileController::class, 'sejarah'])->name('sejarah');
Route::get('/struktur', [profileController::class, 'struktur'])->name('struktur');
Route::prefix('/kegiatan')->name('kegiatan.')->group(function () {
    Route::get('/marhaba', [profileController::class, 'marhaba'])->name('marhaba');
    Route::get('/pengajian', [profileController::class, 'pengajian'])->name('pengajian');
    Route::get('/shalawat', [profileController::class, 'shalawat'])->name('shalawat');
});

Route::get('/galery', [galeryController::class, 'index'])->name('galery');
Route::get('/donatur', [donaturController::class, 'index'])->name('donatur');
