<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\DataSKP;
use App\Models\NilaiSKP;
use App\Models\NilaiTarget;
use App\Models\NilaiRealisasi;

class PerhitunganSKPController extends Controller
{

    //
    public function index($id)
    {
        $data = Kegiatan::all();
        $skp = DataSKP::find($id);
        $nilai = NilaiTarget::where('id_skpnt', $id)->first();
        return view('formperhitunganskp', [
            'data' => $data,
            'skp' => $skp,
            'nilai' => $nilai
        ]);
    }

    public function add(Request $request)
    {
        $data = $request->all();
        // dd($data);
        NilaiRealisasi::create($data);
        return redirect('/tabeldataskp')->with('Success', 'Data Berhasil Di Tambahkan!');
    }

    public function updatePerhitungan()
    {
        return view('updateperhitunganskp');
    }

    public function detailPerhitungan()
    {
        return view('printperhitunganskp');
    }

    public function PDFPerhitungan()
    {
        return view('perhitunganskppdf');
    }
}
