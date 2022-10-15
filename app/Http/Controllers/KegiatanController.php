<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    //
    public function index()
    {
        return view('formkegiatan');
    }

    public function createKegiatan(Request $request)
    {
        $validated = $request->validate([
            'nama_kegiatan' => 'required'
        ]);
        
        Kegiatan::create($validated);

        return redirect('/formkegiatan')->with('Success', 'Data Berhasil Di Tambahkan!');
    }

  
    public function daftarKegiatan()
    {
        $kegiatan = Kegiatan::all();
        return view('tabelkegiatan',[
            'kegiatan' => $kegiatan
        ]);
    }

      
    public function updateKegiatan($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('updatekegiatan',[
            'kegiatan' => $kegiatan
        ]);
    }

    public function actKegiatan(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_kegiatan' => 'required'
        ]);

        Kegiatan::where('id_kegiatan', $id)->update($validated);
        return redirect('/tabelkegiatan')->with('Success', 'Data Berhasil Di Ubah!');
    }

    // Kegiatan return json
    public function KegiatanJson($id)
    {
        $data = Kegiatan::find($id);
        return response()->json($data);
    }

}
