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


    public function updatePerilakuKerja($id)
    {
        $skp = DataSKP::find($id);
        $nilaiverikal = NilaiRealisasi::where('id_skpnr', $id)->first();
        $perilaku = PerilakuKerja::where('id_skp', $id)->first();
        return view('updateperilakukerja', [
            'skp' => $skp,
            'nilai_r' => $nilaiverikal,
            'perilaku' => $perilaku
        ]);
    }

    public function ActionUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'n_op' => 'nullable',
            's_op' => 'nullable',
            'n_i' => 'nullable',
            's_i' => 'nullable',
            'n_k' => 'nullable',
            's_k' => 'nullable',
            'n_d' => 'nullable',
            's_d' => 'nullable',
            'n_ks' => 'nullable',
            's_ks' => 'nullable',
            'n_kp' => 'nullable',
            's_kp' => 'nullable',
            'n_jml' => 'nullable',
            's_jml' => 'nullable',
            'n_rr' => 'nullable',
            's_rr' => 'nullable',
        ]);
        PerilakuKerja::where('id_skp', $id)->update($validated);
        return redirect('/tabeldataskp')->with('Success', 'Data Berhasil Di Ubah!');
    }

    public function detailPerilakuKerja($id)
    {
        $skp = DataSKP::find($id);
        $nilaiverikal = NilaiRealisasi::where('id_skpnr', $id)->first();
        $perilaku = PerilakuKerja::where('id_skp', $id)->first();
        return view('printperilakukerja', [
            'skp' => $skp,
            'nilai_r' => $nilaiverikal,
            'perilaku' => $perilaku
        ]);
    }

    public function pdfPerilakuKerja()
    {
        return view('pdf_perilakukerja');
    }
}
