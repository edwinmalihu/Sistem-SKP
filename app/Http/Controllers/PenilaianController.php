<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSKP;
use App\Models\NilaiRealisasi;
use App\Models\PerilakuKerja;

class PenilaianController extends Controller
{


    public function detailPenilaian($id)
    {
        $skp = DataSKP::find($id);
        $nilaiverikal = NilaiRealisasi::where('id_skpnr', $id)->first();
        $perilaku = PerilakuKerja::where('id_skp', $id)->first();
        return view('printpenilaian', [
            'skp' => $skp,
            'nilai_r' => $nilaiverikal,
            'perilaku' => $perilaku
        ]);
    }
}
