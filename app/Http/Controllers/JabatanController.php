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

        return redirect('/formjabatan')->with('Success', 'Data Berhasil Di Tambahkan!');
    }

    // view daftar jabatan
    public function daftarJabatan()
    {
        $jabatan = Jabatan::all();
        return view('tabeljabatan',[
            'jabatan' => $jabatan
        ]);
    }

    public function updateJabatan($id)
    {
        $jabatan = Jabatan::find($id);
        return view('updatejabatan',[
            'jabatan' => $jabatan
        ]);
    }

    public function actEditJabatan(Request $request, $id)
    {
        $validated = $request->validate([
            'jenis_jabatan' => 'required'
        ]);

        Jabatan::where('id_jabatan', $id)->update($validated);
        return redirect('/tabeljabatan')->with('Success', 'Data Berhasil Di Ubah!');
    }
}
