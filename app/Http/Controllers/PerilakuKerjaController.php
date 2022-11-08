<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSKP;
use App\Models\User;
use App\Models\NilaiRealisasi;
use App\Models\PerilakuKerja;

class PerilakuKerjaController extends Controller
{
    //
    public function index($id)
    {
        $skp = DataSKP::find($id);
        $nilaiverikal = NilaiRealisasi::where('id_skpnr', $id)->first();
        return view('formperilakukerja', [
            'skp' => $skp,
            'nilai_r' => $nilaiverikal,
        ]);
    }

    public function AddPerilaku(Request $request)
    {
        $data = $request->all();
        // dd($data);
        PerilakuKerja::create($data);
        return redirect('/tabeldataskp')->with('Success', 'Data Berhasil Di Tambahkan!');
    }


    public function updatePerilakuKerja()
    {
        return view('updateperilakukerja');
    }

    public function detailPerilakuKerja()
    {
        return view('printperilakukerja');
    }
}
