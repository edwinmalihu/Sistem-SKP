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

    public function updatePerhitungan($id)
    {
        $realisasi = NilaiRealisasi::where('id_skpnr', $id)->first();
        $data = Kegiatan::all();
        $skp = DataSKP::find($id);
        $nilai = NilaiTarget::where('id_skpnt', $id)->first();
        return view('updateperhitunganskp', [
            'data' => $data,
            'skp' => $skp,
            'nilai' => $nilai,
            'realisasi' => $realisasi
        ]);
    }

    public function updateRealisasi(Request $request, $id)
    {
        $validated = $request->validate([
            'id_ka' => 'nullable',
            'raka' => 'nullable',
            'rkua' => 'nullable',
            'routa' => 'nullable',
            'rmuta' => 'nullable',
            'rtimea' => 'nullable',
            'rtmda' => 'nullable',
            'rbiayaa' => 'nullable',
            'perhitungan_a' => 'nullable',
            'skp_a' => 'nullable',
            'id_kb' => 'nullable',
            'rakb' => 'nullable',
            'rkub' => 'nullable',
            'routb' => 'nullable',
            'rmutb' => 'nullable',
            'rtimeb' => 'nullable',
            'rtmdb' => 'nullable',
            'rbiayab' => 'nullable',
            'perhitungan_b' => 'nullable',
            'skp_b' => 'nullable',
            'id_kc' => 'nullable',
            'rakc' => 'nullable',
            'rkuc' => 'nullable',
            'routc' => 'nullable',
            'rmutc' => 'nullable',
            'rtimec' => 'nullable',
            'rtmdc' => 'nullable',
            'rbiayac' => 'nullable',
            'perhitungan_c' => 'nullable',
            'skp_c' => 'nullable',
            'id_kd' => 'nullable',
            'rakd' => 'nullable',
            'rkud' => 'nullable',
            'routd' => 'nullable',
            'rmutd' => 'nullable',
            'rtimed' => 'nullable',
            'rtmdd' => 'nullable',
            'rbiayad' => 'nullable',
            'perhitungan_d' => 'nullable',
            'skp_d' => 'nullable',
            'id_ke' => 'nullable',
            'rake' => 'nullable',
            'rkue' => 'nullable',
            'route' => 'nullable',
            'rmute' => 'nullable',
            'rtimee' => 'nullable',
            'rtmde' => 'nullable',
            'rbiayae' => 'nullable',
            'perhitungan_e' => 'nullable',
            'skp_e' => 'nullable',
            'id_kf' => 'nullable',
            'rakf' => 'nullable',
            'rkuf' => 'nullable',
            'routf' => 'nullable',
            'rmutf' => 'nullable',
            'rtimef' => 'nullable',
            'rtmdf' => 'nullable',
            'rbiayaf' => 'nullable',
            'perhitungan_f' => 'nullable',
            'skp_f' => 'nullable',
            'id_kg' => 'nullable',
            'rakg' => 'nullable',
            'rkug' => 'nullable',
            'routg' => 'nullable',
            'rmutg' => 'nullable',
            'rtimeg' => 'nullable',
            'rtmdg' => 'nullable',
            'rbiayag' => 'nullable',
            'perhitungan_g' => 'nullable',
            'skp_g' => 'nullable',
            'id_kh' => 'nullable',
            'rakh' => 'nullable',
            'rkuh' => 'nullable',
            'routh' => 'nullable',
            'rmuth' => 'nullable',
            'rtimeh' => 'nullable',
            'rtmdh' => 'nullable',
            'rbiayah' => 'nullable',
            'perhitungan_h' => 'nullable',
            'skp_h' => 'nullable',
            'id_ki' => 'nullable',
            'raki' => 'nullable',
            'rkui' => 'nullable',
            'routi' => 'nullable',
            'rmuti' => 'nullable',
            'rtimei' => 'nullable',
            'rtmdi' => 'nullable',
            'rbiayai' => 'nullable',
            'perhitungan_i' => 'nullable',
            'skp_i' => 'nullable',
            'id_kj' => 'nullable',
            'rakj' => 'nullable',
            'rkuj' => 'nullable',
            'routj' => 'nullable',
            'rmutj' => 'nullable',
            'rtimej' => 'nullable',
            'rtmdj' => 'nullable',
            'rbiayaj' => 'nullable',
            'perhitungan_j' => 'nullable',
            'skp_j' => 'nullable',
            'id_kk' => 'nullable',
            'rakk' => 'nullable',
            'rkuk' => 'nullable',
            'routk' => 'nullable',
            'rmutk' => 'nullable',
            'rtimek' => 'nullable',
            'rtmdk' => 'nullable',
            'rbiayak' => 'nullable',
            'perhitungan_k' => 'nullable',
            'skp_k' => 'nullable',
            'id_kl' => 'nullable',
            'rakl' => 'nullable',
            'rkul' => 'nullable',
            'routl' => 'nullable',
            'rmutl' => 'nullable',
            'rtimel' => 'nullable',
            'rtmdl' => 'nullable',
            'rbiayal' => 'nullable',
            'perhitungan_l' => 'nullable',
            'skp_l' => 'nullable',
            'id_km' => 'nullable',
            'rakm' => 'nullable',
            'rkum' => 'nullable',
            'routm' => 'nullable',
            'rmutm' => 'nullable',
            'rtimem' => 'nullable',
            'rtmdm' => 'nullable',
            'rbiayam' => 'nullable',
            'perhitungan_m' => 'nullable',
            'skp_m' => 'nullable',

        ]);
        NilaiRealisasi::where('id_skpnr', $id)->update($validated);
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
