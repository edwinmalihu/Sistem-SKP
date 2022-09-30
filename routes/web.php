<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PangkatGolonganController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\SKPController;

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


// Login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/auth', [LoginController::class, 'authenticate']);



Route::group(['middleware' => 'auth'], function ()
{
    
    Route::post('/logout', [LoginController::class, 'logout']);
    // Layout
    Route::get('/layout', [DashboardController::class, 'index'])->name('layout');

    //jabatan
    Route::get('/formjabatan', [JabatanController::class, 'index'])->name('formjabatan');
    Route::post('/create-jabatan', [JabatanController::class, 'createJabatan']);
    Route::get('/tabeljabatan', [JabatanController::class, 'daftarJabatan'])->name('tabeljabatan');
    Route::get('/updatejabatan/{id}/jabatan', [JabatanController::class, 'updateJabatan'])->name('updatejabatan');
    Route::patch('/jabatan/{id}', [JabatanController::class, 'actEditJabatan']);
    
    // pangkat & golongan
    Route::get('/formpangkatgolongan', [PangkatGolonganController::class, 'index'])->name('formpangkatgolongan');
    Route::post('/create', [PangkatGolonganController::class, 'createPangkat']);
    Route::get('/tabelpangkatgolongan', [PangkatGolonganController::class, 'daftarPangkatGolongan'])->name('tabelpangkatgolongan');
    Route::get('/updatepangkatgolongan/{id}/pangkat', [PangkatGolonganController::class, 'updatePangkatGolongan'])->name('updatepangkatgolongan');
    Route::patch('/pangkat/{id}', [PangkatGolonganController::class, 'actEditPangkat']);
    
    // unit kerja
    Route::get('/formunitkerja', [UnitKerjaController::class, 'index'])->name('formunitkerja');
    Route::post('/create-unit', [UnitKerjaController::class, 'createUnit']);
    Route::get('/tabelunitkerja', [UnitKerjaController::class, 'daftarUnitKerja'])->name('tabelunitkerja');
    Route::get('/updateunitkerja/{id}/unit', [UnitKerjaController::class, 'updateUnitKerja'])->name('updateUnitKerja');
    Route::patch('/unit/{id}', [UnitKerjaController::class, 'actEditUnitKerja']);

    // pegawai
    Route::get('/formpegawai', [PegawaiController::class, 'index'])->name('formpegawai');
    Route::post('/create-pegawai', [PegawaiController::class, 'registrasiPegawai']);
    Route::get('/tabelpegawai', [PegawaiController::class, 'daftarPegawai'])->name('tabelpegawai');
    Route::get('/update/{id}/pegawai', [PegawaiController::class, 'updatePegawai'])->name('updatePegawai');
    Route::patch('/edit/{id}', [PegawaiController::class, 'actUpdate']);
    
    // kegiatan
    Route::get('/formkegiatan', [KegiatanController::class, 'index'])->name('formkegiatan');
    Route::post('/create-kegiatan', [KegiatanController::class, 'createKegiatan']);
    Route::get('/tabelkegiatan', [KegiatanController::class, 'daftarKegiatan'])->name('tabelkegiatan');
    Route::get('/updatekegiatan/{id}/kegiatan', [KegiatanController::class, 'updateKegiatan'])->name('updateKegiatan');
    Route::patch('/kegiatan/{id}', [KegiatanController::class, 'actKegiatan']);

    // SKP
    Route::get('/formskp',[SKPController::class, 'index'])->name('formskp');
    Route::get('/skpform/{id}',[SKPController::class, 'getList']);
    Route::post('/create-data-skp',[SKPController::class, 'createData']);

    Route::get('/tabeldataskp', [SKPController::class, 'index'])->name('tabeldataskp');
    Route::get('/formdataskp',[SKPController::class, 'DataSKPView'])->name('formdataskp');
    // Route::get('/printdataskp', [SKPController::class, 'PrintDataSKP'])->name('printdataskp');
    Route::get('/detail-skp/{id}', [SKPController::class, 'detailSkp']);
    Route::get('/updatedataskp/{id}/edit', [SKPController::class, 'UpdateDataSKP'])->name('updatedataskp');
<<<<<<< HEAD
    Route::patch('/action/{id}/edit', [SKPController::class, 'actionUpdate']);
=======
>>>>>>> 8b90a0e458e6806638eef5185a6d466bf2ff215f
});