<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSKP;
use App\Models\User;
use App\Models\Jabatan;
use App\Models\Unit;
use App\Models\Pangkat;
use Illuminate\Http\Response;

class SKPController extends Controller
{
    //tabel data skp view
    public function index()
    {
        $data = DataSKP::join('users as dinilai', 'dinilai.id', '=', 'data_skp.id_dinilai')
        ->join('users as penilai', 'penilai.id', '=', 'data_skp.id_penilai')
        ->join('users as pejabat', 'pejabat.id', '=', 'data_skp.id_app')
        ->get(['data_skp.*', 'dinilai.nama_pegawai as nama_dinilai', 'penilai.nama_pegawai as nama_penilai', 'pejabat.nama_pegawai as nama_pejabat']);
        return view('tabeldataskp', [
            'dataSkp' => $data
        ]);
    }

    // data skp view
    public function DataSKPView()
    {

        $data = User::where('status', 'pegawai')->get();
        return view('formdataskp', [
            'user' => $data
        ]);
        
    }

    public function getList($id)
    {

        $data = User::join('jabatan', 'jabatan.id_jabatan', '=', 'users.id_jabatan')
        ->join('pangkat_golongan', 'pangkat_golongan.id_pangkat_golongan', '=', 'users.id_pangkat_golongan')
        ->join('units', 'units.id_units', '=', 'users.id_unit_kerja')
        ->where('users.id', $id)
        ->get(['users.*', 'units.nama_units_kerja', 'pangkat_golongan.jenis_pangkat_golongan', 'jabatan.jenis_jabatan']);
        // $data = User::find($id);
        return response()->json($data);
        
    }

    public function createData(Request $request)
    {
        $validated = $request->validate([
            'id_dinilai' => 'required',
            'nip_dinilai' => 'required',
            'id_godi' => 'required',
            'id_jadi' => 'required',
            'id_udi' => 'required',
            'id_penilai' => 'required',
            'nip_penilai' => 'required',
            'id_gope' => 'required',
            'id_jape' => 'required',
            'id_upe' => 'required',
            'id_app' => 'required',
            'nip_app' => 'required',
            'id_gpp' => 'required',
            'id_jpp' => 'required',
            'id_upp' => 'required',
            'semester' => 'required',
            'tahun' => 'required',
        ]);

        DataSKP::create($validated);

        return redirect('/formdataskp')->with('Success', 'Data Berhasil Di Tambahkan!');
    }

    // Print data skp
    public function PrintDataSKP()
    {
        return view('printdataskp');
        
    }

    // Update data skp
    public function UpdateDataSKP()
    {
        return view('updatedataskp');
        
    }
}
