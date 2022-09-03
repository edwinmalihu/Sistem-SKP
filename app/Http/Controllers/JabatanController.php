<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    //
    public function index()
    {
        return view('formjabatan');
    }

    public function createJabatan(Request $request)
    {
        $validated = $request->validate([
            'jenis_jabatan' => 'required'
        ]);
        
        Jabatan::create($validated);

        return redirect('/formjabatan')->with('success', 'Data Berhasil Di Tambahlan!');
    }
}