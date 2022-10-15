<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\DataSKP;
use App\Models\NilaiSKP;
use App\Models\NilaiTarget;

class NilaiSKPController extends Controller
{
    
    public function FormInputSKP($id){
        $data = Kegiatan::all();
        $skp = DataSKP::find($id);
        return view('forminputnilaiskp', [
            'data' => $data,
            'skp' => $skp
        ]);
    }

    public function createNilai(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $nilai_target = New NilaiTarget;
        
        $nilai_target->id_skpnt = $data['id_skpnt'];
        $nilai_target->id_ka = $data['id_ka'];
        $nilai_target->aka = $data['aka'];
        $nilai_target->kua = $data['kua'];
        $nilai_target->outa = $data['outa'];
        $nilai_target->muta = $data['muta'];
        $nilai_target->timea = $data['timea'];
        $nilai_target->tmda = $data['tmda'];
        $nilai_target->biayaa = $data['biayaa'];
        $nilai_target->id_kb = $data['id_kb'];
        $nilai_target->akb = $data['akb'];
        $nilai_target->kub = $data['kub'];
        $nilai_target->outb = $data['outb'];
        $nilai_target->mutb = $data['mutb'];
        $nilai_target->timeb = $data['timeb'];
        $nilai_target->tmdb = $data['tmdb'];
        $nilai_target->biayab = $data['biayab'];
        $nilai_target->id_kc = $data['id_kc'];
        $nilai_target->akc = $data['akc'];
        $nilai_target->kuc = $data['kuc'];
        $nilai_target->outc = $data['outc'];
        $nilai_target->mutc = $data['mutc'];
        $nilai_target->timec = $data['timec'];
        $nilai_target->tmdc = $data['tmdc'];
        $nilai_target->biayac = $data['biayac'];
        $nilai_target->id_kd = $data['id_kd'];
        $nilai_target->akd = $data['akd'];
        $nilai_target->kud = $data['kud'];
        $nilai_target->outd = $data['outd'];
        $nilai_target->mutd = $data['mutd'];
        $nilai_target->timed = $data['timed'];
        $nilai_target->tmdd = $data['tmdd'];
        $nilai_target->biayad = $data['biayad'];
        $nilai_target->id_ke = $data['id_ke'];
        $nilai_target->ake = $data['ake'];
        $nilai_target->kue = $data['kue'];
        $nilai_target->oute = $data['oute'];
        $nilai_target->mute = $data['mute'];
        $nilai_target->timee = $data['timee'];
        $nilai_target->tmde = $data['tmde'];
        $nilai_target->biayae = $data['biayae'];
        $nilai_target->id_kf = $data['id_kf'];
        $nilai_target->akf = $data['akf'];
        $nilai_target->kuf = $data['kuf'];
        $nilai_target->outf = $data['outf'];
        $nilai_target->mutf = $data['mutf'];
        $nilai_target->timef = $data['timef'];
        $nilai_target->tmdf = $data['tmdf'];
        $nilai_target->biayaf = $data['biayaf'];
        $nilai_target->id_kg = $data['id_kg'];
        $nilai_target->akg = $data['akg'];
        $nilai_target->kug = $data['kug'];
        $nilai_target->outg = $data['outg'];
        $nilai_target->mutg = $data['mutg'];
        $nilai_target->timeg = $data['timeg'];
        $nilai_target->tmdg = $data['tmdg'];
        $nilai_target->biayag = $data['biayag'];
        $nilai_target->id_kh = $data['id_kh'];
        $nilai_target->akh = $data['akh'];
        $nilai_target->kuh = $data['kuh'];
        $nilai_target->outh = $data['outh'];
        $nilai_target->muth = $data['muth'];
        $nilai_target->timeh = $data['timeh'];
        $nilai_target->tmdh = $data['tmdh'];
        $nilai_target->biayah = $data['biayah'];
        $nilai_target->id_ki = $data['id_ki'];
        $nilai_target->aki = $data['aki'];
        $nilai_target->kui = $data['kui'];
        $nilai_target->outi = $data['outi'];
        $nilai_target->muti = $data['muti'];
        $nilai_target->timei = $data['timei'];
        $nilai_target->tmdi = $data['tmdi'];
        $nilai_target->biayai = $data['biayai'];
        $nilai_target->id_kj = $data['id_kj'];
        $nilai_target->akj = $data['akj'];
        $nilai_target->kuj = $data['kuj'];
        $nilai_target->outj = $data['outj'];
        $nilai_target->mutj = $data['mutj'];
        $nilai_target->timej = $data['timej'];
        $nilai_target->tmdj = $data['tmdj'];
        $nilai_target->biayaj = $data['biayaj'];
        $nilai_target->id_kk = $data['id_kk'];
        $nilai_target->akk = $data['akk'];
        $nilai_target->kuk = $data['kuk'];
        $nilai_target->outk = $data['outk'];
        $nilai_target->mutk = $data['mutk'];
        $nilai_target->timek = $data['timek'];
        $nilai_target->tmdk = $data['tmdk'];
        $nilai_target->biayak = $data['biayak'];
        $nilai_target->id_kl = $data['id_kl'];
        $nilai_target->akl = $data['akl'];
        $nilai_target->kul = $data['kul'];
        $nilai_target->outl = $data['outl'];
        $nilai_target->mutl = $data['mutl'];
        $nilai_target->timel = $data['timel'];
        $nilai_target->tmdl = $data['tmdl'];
        $nilai_target->biayal = $data['biayal'];
        $nilai_target->id_km = $data['id_km'];
        $nilai_target->akm = $data['akm'];
        $nilai_target->kum = $data['kum'];
        $nilai_target->outm = $data['outm'];
        $nilai_target->mutm = $data['mutm'];
        $nilai_target->timem = $data['timem'];
        $nilai_target->tmdm = $data['tmdm'];
        $nilai_target->biayam = $data['biayam'];
        $nilai_target->id_kn = $data['id_kn'];
        $nilai_target->akn = $data['akn'];
        $nilai_target->kun = $data['kun'];
        $nilai_target->outn = $data['outn'];
        $nilai_target->mutn = $data['mutn'];
        $nilai_target->timen = $data['timen'];
        $nilai_target->tmdn = $data['tmdn'];
        $nilai_target->biayan = $data['biayan'];
        $nilai_target->id_ko = $data['id_ko'];
        $nilai_target->ako = $data['ako'];
        $nilai_target->kuo = $data['kuo'];
        $nilai_target->outo = $data['outo'];
        $nilai_target->muto = $data['muto'];
        $nilai_target->timeo = $data['timeo'];
        $nilai_target->tmdo = $data['tmdo'];
        $nilai_target->biayao = $data['biayao'];
        

        $nilai_target->save();

        $skp_nilait = New NilaiTarget;

        $skp_nilait->id_nt = $nilai_target->id_nt;
        $skp_nilait->id_skp = $data['id_skpnt'];
        $skp_nilait->id_dinilai = $data['id_dinilai'];
        $skp_nilait->id_penilai = $data['id_penilai'];
        $skp_nilait->periode = $data['periode'];
        $skp_nilait->tahun = $data['tahun'];

        $skp_nilait->save();


        // dd($data);



        return redirect('/tabeldataskp')->with('Success', 'Data Berhasil Di Tambahkan!');
    }

    public function UpdateInputSKP(){
        return view('updateinputnilaiskp');
    }

    public function detailSKP($id){

        $skp = DataSKP::find($id);
        $nilai = NilaiTarget::where('id_skpnt', $id)->first();


        return view('printinputnilaiskp', [
            'skp' => $skp,
            'nilai' => $nilai
        ]);
    }

}
