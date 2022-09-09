<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pangkat;

class PangkatGolonganController extends Controller
{
    //
    public function index()
    {
        return view('formpangkatgolongan');
    }

    public function createPangkat(Request $request)
    {
        $validated = $request->validate([
            'jenis_pangkat_golongan' => 'required'
        ]);
        
        Pangkat::create($validated);

        return redirect('/formpangkatgolongan')->with('Success', 'Data Berhasil Di Tambahkan!');
    }

    // tabel pangkat golongan
    public function daftarPangkatGolongan()
    {
        return view('tabelpangkatgolongan');
    }
}
