<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSKP;
use App\Models\User;
use App\Models\Jabatan;
use App\Models\Unit;
use App\Models\Pangkat;
use Illuminate\Http\Response;
use PDF;

class SKPController extends Controller
{
    //tabel data skp view
    public function index()
    {
        $data = DataSKP::join('users as dinilai', 'dinilai.id', '=', 'data_skp.id_dinilai')
        ->join('users as penilai', 'penilai.id', '=', 'data_skp.id_penilai')
        ->join('users as pejabat', 'pejabat.id', '=', 'data_skp.id_app')
        ->get(['data_skp.nip_dinilai as nip_dinilai', 'data_skp.semester as periode', 'data_skp.tahun as thn', 'data_skp.id_data_skp as idData', 'dinilai.nama_pegawai as nama_dinilai', 'penilai.nama_pegawai as nama_penilai', 'pejabat.nama_pegawai as nama_pejabat']);
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
      public function detailSkp($id)
      {
        // $data = DataSKP::find($id);
        $data = DataSKP::join('users as dinilai', 'dinilai.id', '=', 'data_skp.id_dinilai')
        ->join('users as penilai', 'penilai.id', '=', 'data_skp.id_penilai')
        ->join('users as pejabat', 'pejabat.id', '=', 'data_skp.id_app')
        ->join('pangkat_golongan as godi', 'godi.id_pangkat_golongan', '=', 'data_skp.id_godi')
        ->join('pangkat_golongan as gope', 'gope.id_pangkat_golongan', '=', 'data_skp.id_gope')
        ->join('pangkat_golongan as gpp', 'gpp.id_pangkat_golongan', '=', 'data_skp.id_gpp')
        ->join('jabatan as jadi', 'jadi.id_jabatan', '=', 'data_skp.id_jadi')
        ->join('jabatan as jape', 'jape.id_jabatan', '=', 'data_skp.id_jape')
        ->join('jabatan as jpp', 'jpp.id_jabatan', '=', 'data_skp.id_jpp')
        ->join('units as udi', 'udi.id_units', '=', 'data_skp.id_udi')
        ->join('units as upe', 'upe.id_units', '=', 'data_skp.id_upe')
        ->join('units as upp', 'upp.id_units', '=', 'data_skp.id_upp')
        ->where('data_skp.id_data_skp', $id)
        ->get(['data_skp.*', 'dinilai.nama_pegawai as nama_dinilai', 'penilai.nama_pegawai as nama_penilai', 'pejabat.nama_pegawai as nama_pejabat', 'godi.jenis_pangkat_golongan as jenis_godi', 'jadi.jenis_jabatan as jenis_jadi', 'udi.nama_units_kerja as jenis_udi','gope.jenis_pangkat_golongan as gope', 'gpp.jenis_pangkat_golongan as jenis_gpp', 'jape.jenis_jabatan as jenis_jape', 'jpp.jenis_jabatan as jenis_jpp', 'upe.nama_units_kerja as jenis_upe', 'upp.nama_units_kerja as jenis_upp']);

        // dd($data);
        
        return view('printdataskp', [
            'data' => $data
        ]);
          
      }

    // Print data skp
    public function PrintDataSKP()
    {
        return view('dataskppdf');
        
    }

//     // Update data skp
    public function UpdateDataSKP($id)
    {
        $data = DataSKP::find($id);

        $id_user = User::all();
        $list_dosen = User::where('status', 'pegawai')->get();
        return view('updatedataskp', [
            'data' => $data,
            'list' => $list_dosen,
            'id_user' => $id_user
        ]);
    }

    public function actionUpdate(Request $request, $id)
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

        DataSKP::where('id_data_skp', $id)->update($validated);
        return redirect('/tabeldataskp')->with('Success', 'Data Berhasil Di Ubah!');
        $list_dosen = User::where('status', 'pegawai')->get();
        return view('updatedataskp', [
            'data' => $data,
            'list' => $list_dosen
        ]);

    }

    public function PrintSKP($id)
    {
        $data = DataSKP::join('users as dinilai', 'dinilai.id', '=', 'data_skp.id_dinilai')
        ->join('users as penilai', 'penilai.id', '=', 'data_skp.id_penilai')
        ->join('users as pejabat', 'pejabat.id', '=', 'data_skp.id_app')
        ->join('pangkat_golongan as godi', 'godi.id_pangkat_golongan', '=', 'data_skp.id_godi')
        ->join('pangkat_golongan as gope', 'gope.id_pangkat_golongan', '=', 'data_skp.id_gope')
        ->join('pangkat_golongan as gpp', 'gpp.id_pangkat_golongan', '=', 'data_skp.id_gpp')
        ->join('jabatan as jadi', 'jadi.id_jabatan', '=', 'data_skp.id_jadi')
        ->join('jabatan as jape', 'jape.id_jabatan', '=', 'data_skp.id_jape')
        ->join('jabatan as jpp', 'jpp.id_jabatan', '=', 'data_skp.id_jpp')
        ->join('units as udi', 'udi.id_units', '=', 'data_skp.id_udi')
        ->join('units as upe', 'upe.id_units', '=', 'data_skp.id_upe')
        ->join('units as upp', 'upp.id_units', '=', 'data_skp.id_upp')
        ->where('data_skp.id_data_skp', $id)
        ->get(['data_skp.*', 'dinilai.nama_pegawai as nama_dinilai', 'penilai.nama_pegawai as nama_penilai', 'pejabat.nama_pegawai as nama_pejabat', 'godi.jenis_pangkat_golongan as jenis_godi', 'jadi.jenis_jabatan as jenis_jadi', 'udi.nama_units_kerja as jenis_udi','gope.jenis_pangkat_golongan as gope', 'gpp.jenis_pangkat_golongan as jenis_gpp', 'jape.jenis_jabatan as jenis_jape', 'jpp.jenis_jabatan as jenis_jpp', 'upe.nama_units_kerja as jenis_upe', 'upp.nama_units_kerja as jenis_upp']);

        return view('pdf.DataSkpPDF', [
            'data' => $data
        ]);
    }

}
