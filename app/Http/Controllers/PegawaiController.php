<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jabatan;
use App\Models\Kegiatan;
use App\Models\Pangkat;
use App\Models\Unit;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //
    public function index()
    {
        $jabatan = Jabatan::all();
        $kegiatan = Kegiatan::all();
        $pangkat = Pangkat::all();
        $unit = Unit::all();

        return view('formpegawai', [
            'jabatan' => $jabatan,
            'kegiatan' => $kegiatan,
            'pangkat' => $pangkat,
            'unit' => $unit
        ]);
    }

    public function registrasiPegawai(Request $request)
    {
        $validated = $request->validate([
            'nama_pegawai' => 'required',
            'nik_pegawai' => 'required',
            'nip_pegawai' => 'required',
            'id_pangkat_golongan' => 'required',
            'id_jabatan' => 'required',
            'id_unit_kerja' => 'required',
            'jenis_pegawai' => 'required',
            'hak_akses' => 'required',
            'name' => 'required',
            'password' => 'required',
        ]);
        
        User::create($validated);

        return redirect('/formpegawai')->with('Success', 'Data Berhasil Di Tambahkan!');
    }

    public function daftarPegawai()
    {
        return view('tabelpegawai');
    }
}
