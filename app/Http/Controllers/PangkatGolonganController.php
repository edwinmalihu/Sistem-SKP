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
        $pangkat = Pangkat::all();
        return view('tabelpangkatgolongan',[
            'pangkat' => $pangkat
        ]);
    }

    public function updatePangkatGolongan($id)
    {
        $pangkat = Pangkat::find($id);
        return view('updatepangkatgolongan',[
            'pangkat' => $pangkat
        ]);
    }

    public function actEditPangkat(Request $request, $id)
    {
        $validated = $request->validate([
            'jenis_pangkat_golongan' => 'required'
        ]);

        Pangkat::where('id_pangkat_golongan', $id)->update($validated);
        return redirect('/tabelpangkatgolongan')->with('Success', 'Data Berhasil Di Edit!');
    }
}
