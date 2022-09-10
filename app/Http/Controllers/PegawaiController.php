<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jabatan;
use App\Models\Kegiatan;
use App\Models\Pangkat;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Models\ReferralForgotPassword;
use Illuminate\Support\Facades\Hash;
use Session;

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
        
        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect('/formpegawai')->with('Success', 'Data Berhasil Di Tambahkan!');
    }

    // tabel
    public function daftarPegawai()
    {
        
        $pegawai = User::join('Jabatan', 'Jabatan.id_jabatan', '=', 'users.id_jabatan')
        ->join('pangkat_golongan', 'pangkat_golongan.id_pangkat_golongan', '=', 'users.id_pangkat_golongan')
        ->join('units', 'units.id_units', '=', 'users.id_unit_kerja')
        ->get(['users.*', 'units.nama_units_kerja', 'pangkat_golongan.jenis_pangkat_golongan', 'Jabatan.jenis_jabatan']);

    
        return view('tabelpegawai', [
            'user' => $pegawai
        ]);
    }

    // update view
    public function updatePegawai($id)
    {
        $user = User::find($id);
        $jabatan = Jabatan::all();
        $kegiatan = Kegiatan::all();
        $pangkat = Pangkat::all();
        $unit = Unit::all();

        return view('updatepegawai', [
            'jabatan' => $jabatan,
            'kegiatan' => $kegiatan,
            'pangkat' => $pangkat,
            'unit' => $unit,
            'pegawai' => $user
        ]);
    }

    public function actUpdate(Request $request, $id)
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
        ]);

        User::where('id', $id)->update($validated);
        return redirect('/tabelpegawai')->with('Success', 'Data Berhasil Di Ubah!');
    }
}
