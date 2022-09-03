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

        return redirect('/formunitkerja')->with('success', 'Data Berhasil Di Tambahlan!');
    }
}
