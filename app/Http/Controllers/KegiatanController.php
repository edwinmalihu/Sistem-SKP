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
        return view('tabelkegiatan');
    }

}
