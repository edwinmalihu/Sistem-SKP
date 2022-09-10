<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    //
    public function index()
    {
        return view('formunitkerja');
    }

    public function createUnit(Request $request)
    {
        $validated = $request->validate([
            'nama_units_kerja' => 'required'
        ]);
        
        Unit::create($validated);

        return redirect('/formunitkerja')->with('Success', 'Data Berhasil Di Tambahkan!');
    }

    // tabel
    public function daftarUnitKerja()
    {

        $unit = Unit::all();
        return view('tabelunitkerja',[
            'unit' => $unit
        ]);
    }

    // update
    public function updateUnitKerja($id)
    {
        $unit = Unit::find($id);
        return view('updateunitkerja', [
            'unit' => $unit
        ]);
    }

    public function actEditUnitKerja(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_units_kerja' => 'required'
        ]);

        Unit::where('id_units', $id)->update($validated);
        return redirect('/tabelunitkerja')->with('Success', 'Data Berhasil Di Ubah!');
    }


}
