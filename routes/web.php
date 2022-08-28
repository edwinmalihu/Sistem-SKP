<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PangkatGolonganController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KegiatanController;

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

Route::get('/login', function () {
    // return view('login');
});

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/layout', [DashboardController::class, 'index'])->name('layout');

//jabatan
Route::get('/formjabatan', [JabatanController::class, 'index'])->name('formjabatan');
Route::post('/create-jabatan', [JabatanController::class, 'createJabatan']);

// pangkat & golongan
Route::get('/formpangkatgolongan', [PangkatGolonganController::class, 'index'])->name('formpangkatgolongan');
Route::post('/create', [PangkatGolonganController::class, 'createPangkat']);


Route::get('/formunitkerja', [UnitKerjaController::class, 'index'])->name('formunitkerja');
Route::get('/formpegawai', [PegawaiController::class, 'index'])->name('formpegawai');

// kegiatan
Route::get('/formkegiatan', [KegiatanController::class, 'index'])->name('formkegiatan');
Route::post('/create-kegiatan', [KegiatanController::class, 'createKegiatan']);