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

        return redirect('/formkegiatan')->with('success', 'Data Berhasil Di Tambahlan!');
    }
}
