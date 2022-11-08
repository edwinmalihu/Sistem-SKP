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
use App\Http\Controllers\NilaiSKPController;
use App\Http\Controllers\PerhitunganSKPController;
use App\Http\Controllers\PerilakuKerjaController;
use App\Http\Controllers\PenilaianController;

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



// Route::group(['middleware' => 'auth'], function ()
// {
    
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
    Route::get('/listuser/{id}', [PegawaiController::class, 'ListUser']);
    
    // kegiatan
    Route::get('/formkegiatan', [KegiatanController::class, 'index'])->name('formkegiatan');
    Route::post('/create-kegiatan', [KegiatanController::class, 'createKegiatan']);
    Route::get('/tabelkegiatan', [KegiatanController::class, 'daftarKegiatan'])->name('tabelkegiatan');
    Route::get('/updatekegiatan/{id}/kegiatan', [KegiatanController::class, 'updateKegiatan'])->name('updateKegiatan');
    Route::patch('/kegiatan/{id}', [KegiatanController::class, 'actKegiatan']);
    Route::get('/listkegiatan/{id}', [KegiatanController::class, 'KegiatanJson']);

    // DATA SKP
    Route::get('/formskp',[SKPController::class, 'index'])->name('formskp');
    Route::get('/skpform/{id}',[SKPController::class, 'getList']);
    Route::post('/create-data-skp',[SKPController::class, 'createData']);

    Route::get('/tabeldataskp', [SKPController::class, 'index'])->name('tabeldataskp');
    Route::get('/formdataskp',[SKPController::class, 'DataSKPView'])->name('formdataskp');
    Route::get('/printdataskp', [SKPController::class, 'PrintDataSKP'])->name('dataskppdf');
    Route::get('/detail-skp/{id}', [SKPController::class, 'detailSkp']);
    Route::get('/updatedataskp/{id}/edit', [SKPController::class, 'UpdateDataSKP'])->name('updatedataskp');
    Route::patch('/action/{id}/edit', [SKPController::class, 'actionUpdate']);

    // SKP NILAI
    Route::get('/forminputnilaiskp/{id}', [NilaiSKPController::class, 'FormInputSKP'])->name('forminputnilaiskp');
    Route::get('/updateinputnilaiskp/{id}', [NilaiSKPController::class, 'UpdateInputSKP'])->name('updateinputnilaiskp');
    Route::get('/detail-nilaiskp/{id}', [NilaiSKPController::class, 'DetailSKP'])->name('detailnilaiskp');
    Route::post('/createNilai', [NilaiSKPController::class, 'createNilai']);
    Route::patch('/update-nilai/{id}', [NilaiSKPController::class, 'ActionUpdate']);

    // SKP PERHITUNGAN
    Route::get('/formperhitunganskp/{id}', [PerhitunganSKPController::class, 'index'])->name('formperhitunganskp');
    Route::post( '/add-realisasi', [PerhitunganSKPController::class, 'add']);
    Route::get('/updateperhitunganskp/{id}', [PerhitunganSKPController::class, 'updatePerhitungan'])->name('updateerhitunganskp');
    Route::patch('/update-realisasi/{id}', [PerhitunganSKPController::class, 'updateRealisasi']);
    Route::get('/printperhitunganskp/{id}', [PerhitunganSKPController::class, 'detailPerhitungan'])->name('printperhitunganskp'); 
    Route::get('/perhitunganskppdf/{id}', [PerhitunganSKPController::class, 'PDFPerhitungan'])->name('perhitunganskppdf');

    // SKP PERILAKU KERJA
    Route::get('/formperilakukerja/{id}', [PerilakuKerjaController::class, 'index'])->name('formperilakukerja');
    Route::post('/action-perilaku', [PerilakuKerjaController::class, 'AddPerilaku']);
    Route::get('/updateperilakukerja/{id}', [PerilakuKerjaController::class, 'updatePerilakuKerja'])->name('updateperilakukerja');
    Route::patch('/update-perilaku/{id}', [PerilakuKerjaController::class, 'ActionUpdate']);
    Route::get('/detail-perilakukerja/{id}', [PerilakuKerjaController::class, 'detailPerilakuKerja'])->name('detail-perilakukerja');

    // PENILAIAN
    Route::get('/detailpenilaian', [PenilaianController::class, 'detailPenilaian'])->name('detailpenilaian');

    // });