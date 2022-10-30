@extends('layout')

@section('container')
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Form Perhitungan SKP</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
      <li class="breadcrumb-item active">Tambah Perhitungan SKP</li>
    </ol>
    <!-- <div class="page-header-actions">
      <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round"
        data-toggle="tooltip" data-original-title="Edit">
        <i class="icon wb-pencil" aria-hidden="true"></i>
      </button>
      <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round"
        data-toggle="tooltip" data-original-title="Refresh">
        <i class="icon wb-refresh" aria-hidden="true"></i>
      </button>
      <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round"
        data-toggle="tooltip" data-original-title="Setting">
        <i class="icon wb-settings" aria-hidden="true"></i>
      </button>
    </div> -->
  </div>
  
  <div class="page-content container-fluid">
        <div class="row">
        
        
        <div class="col-md-12">
            <!-- Panel Floating Labels -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-align:center">FORMULIR SASARAN KERJA </br> PEGAWAI UNMUS</h3>
                </div>
                <div class="panel-body container-fluid">

                <form action="/update-realisasi/{{$realisasi->id_skpnr}}" method="post">
                    @method('patch')
                    @csrf
                    <h5>Jangka Waktu Penilaian</h5>
                    <h5>Januari s/d Desember 2018</h5>
                    <input type="hidden" value="{{$nilai->id_skpnt}}" id="id_skpnr" name="id_skpnr">
                    <table border="1" class="table table-striped table-bordered">
                        <tr>
                            <td rowspan="2" style="font-weight:bold">NO</td>
                            <td rowspan="2" colspan="2" style="font-weight:bold">I. KEGIATAN TUGAS JABATAN</td>
                            <td rowspan="2" align="center" style="font-weight:bold">AK</td>
                            <td colspan="4" align="center" style="font-weight:bold">TARGET</td>
                            <td rowspan="2" align="center" style="font-weight:bold">AK</td>
                            <td colspan="4" align="center" style="font-weight:bold">REALISASI</td>
                            <td rowspan="2" align="center" colspan="1" style="font-weight:bold"></br></br>PERHITUNGAN</td>
                            <td rowspan="2" colspan="1" align="center" style="font-weight:bold"></br>NILAI CAPAIAN SKP</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center" style="font-weight:bold">KUANT/OUTPUT</td>
                            <td align="center" style="font-weight:bold">KUAL/MUTU</td>
                            <td align="center" style="font-weight:bold">WAKTU</td>
                            <td align="center" style="font-weight:bold">BIAYA</td>
                            <!-- REALISASI -->
                            <td align="center" style="font-weight:bold">KUANT/OUTPUT</td>
                            <td align="center" style="font-weight:bold">KUAL/MUTU</td>
                            <td align="center" style="font-weight:bold">WAKTU</td>
                            <td align="center" style="font-weight:bold">BIAYA</td>
                        </tr>
                        <tr>
                            <td align="center">1</td>
                            <td align="center" colspan="2">2</td>
                            <td align="center">3</td>
                            <td align="center">4</td>
                            <td align="center">5</td>
                            <td align="center">6</td>
                            <td align="center">7</td>
                            <td align="center">8</td>
                            <td align="center">9</td>
                            <td align="center">10</td>
                            <td align="center">11</td>
                            <td align="center">12</td>
                            <td align="center">13</td>
                            <td align="center">14</td>
                        </tr>
                        
                        <tr>
                            <!-- TARGET -->
                            <td align="center">1</td>
                            <td align="center" colspan="2">
                                <input type="hidden" value="{{$nilai->id_ka}}" id="id_ka" name="id_ka">
                                <p id="lebel-k-a"></p>
                            </td>
                            <td align="center" id="nilalika">{{$nilai->aka}}</td>
                            <td align="center" id="nilaikua">{{$nilai->kua}}</td>
                            <td align="center" id="nilaimuta">{{$nilai->muta}}</td>
                            <td align="center" id="nilaitimea">{{$nilai->timea}}</td>
                            <td align="center" id="nilaibiayaa">{{$nilai->biayaa}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="raka" value="{{$realisasi->raka}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkua" id="rka" value="{{$realisasi->rkua}}" /><input type="text" class="form-control" name="routa" value="{{$realisasi->routa}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmuta" id="rmuta" value="{{$realisasi->rmuta}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimea" id="rtimea" value="{{$realisasi->rtimea}}" /><input type="text" class="form-control" name="rtmda" value="{{$realisasi->rtmda}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayaa" id="rbiayaa" value="{{$realisasi->rbiayaa}}" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_a" value="{{$realisasi->perhitungan_a}}" id="perhitungan_a" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_a" value="{{$realisasi->skp_a}}" id="skp_a" readonly/></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">2</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kb}}" id="id_kb" name="id_kb">
                            <p id="label-k-b"></p>
                            </td>
                            <td align="center" id="nilalikb">{{$nilai->akb}}</td>
                            <td align="center" id="nilaikub">{{$nilai->kub}}</td>
                            <td align="center" id="nilaimutb">{{$nilai->mutb}}</td>
                            <td align="center" id="nilaitimeb">{{$nilai->timeb}}</td>
                            <td align="center" id="nilaibiayab">{{$nilai->biayab}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="rakb" value="{{$realisasi->rakb}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkub" id="rkb" value="{{$realisasi->rkub}}" /><input type="text" class="form-control" name="routb" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutb" id="rmutb" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimeb" id="rtimeb" /><input type="text" class="form-control" name="rtmdb" /></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayab" id="rbiayab" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_b" id="perhitungan_b" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_b" id="skp_b" readonly/></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">3</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kc}}" id="id_kc" name="id_kc">
                            <p id="label-k-c"></p>
                            </td>
                            <td align="center" id="nilalikc">{{$nilai->akc}}</td>
                            <td align="center" id="nilaikuc">{{$nilai->kuc}}</td>
                            <td align="center" id="nilaimutc">{{$nilai->mutc}}</td>
                            <td align="center" id="nilaitimec">{{$nilai->timec}}</td>
                            <td align="center" id="nilaibiayac">{{$nilai->biayac}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="rakc" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkuc" id="rkc" /><input type="text" class="form-control" name="routc" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutc" id="rmutc" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimec" id="rtimec" /><input type="text" class="form-control" name="rtmdc" /></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayac" id="rbiayac" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_c" id="perhitungan_c" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_c" id="skp_c" readonly/></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">4</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kd}}" id="id_kd" name="id_kd">
                            <p id="label-k-d"></p>
                            </td>
                            <td align="center" id="nilalikd">{{$nilai->akd}}</td>
                            <td align="center" id="nilaikud">{{$nilai->kud}}</td>
                            <td align="center" id="nilaimutd">{{$nilai->mutd}}</td>
                            <td align="center" id="nilaitimed">{{$nilai->timed}}</td>
                            <td align="center" id="nilaibiayad">{{$nilai->biayad}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="rakd" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkud" id="rkd" /><input type="text" class="form-control" name="routd" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutd" id="rmutd" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimed" id="rtimed" /><input type="text" class="form-control" name="rtmdd" /></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayad" id="rbiayad" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_d" id="perhitungan_d" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_d" id="skp_d" readonly/></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">5</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_ke}}" id="id_ke" name="id_ke">
                            <p id="label-k-e"></p>
                            </td>
                            <td align="center" id="nilalike">{{$nilai->ake}}</td>
                            <td align="center" id="nilaikuv">{{$nilai->kue}}</td>
                            <td align="center" id="nilaimute">{{$nilai->mute}}</td>
                            <td align="center" id="nilaitimee">{{$nilai->timee}}</td>
                            <td align="center" id="nilaibiayae">{{$nilai->biayae}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="rake" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkue" id="rke" /><input type="text" class="form-control" name="route" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmute" id="rmute" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimee" id="rtimee" /><input type="text" class="form-control" name="rtmde" /></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayae" id="rbiayae" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_e" id="perhitungan_e" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_e" id="skp_e" readonly/></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">6</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kf}}" id="id_kf" name="id_kf">
                            <p id="label-k-f"></p>
                            </td>
                            <td align="center" id="nilalikf">{{$nilai->akf}}</td>
                            <td align="center" id="nilaikuf">{{$nilai->kuf}}</td>
                            <td align="center" id="nilaimutf">{{$nilai->mutf}}</td>
                            <td align="center" id="nilaitimef">{{$nilai->timef}}</td>
                            <td align="center" id="nilaibiayaf">{{$nilai->biayaf}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="rakf" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkuf" id="rkf" /><input type="text" class="form-control" name="routf" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutf" id="rmutf" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimef" id="rtimef" /><input type="text" class="form-control" name="rtmdf" /></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayaf" id="rbiayaf" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_f" id="perhitungan_f" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_f" id="skp_f" readonly/></td>
                        </tr>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">7</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kg}}" id="id_kg" name="id_kg">
                            <p id="label-k-g"></p>
                            </td>
                            <td align="center" id="nilalikg">{{$nilai->akg}}</td>
                            <td align="center" id="nilaikug">{{$nilai->kug}}</td>
                            <td align="center" id="nilaimutg">{{$nilai->mutg}}</td>
                            <td align="center" id="nilaitimeg">{{$nilai->timeg}}</td>
                            <td align="center" id="nilaibiayag">{{$nilai->biayag}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="rakg" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkug" id="rkg" /><input type="text" class="form-control" name="routg" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutg" id="rmutg" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimeg" id="rtimeg" /><input type="text" class="form-control" name="rtmdg" /></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayag" id="rbiayag" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_g" id="perhitungan_g" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_g" id="skp_g" readonly/></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">8</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kh}}" id="id_kh" name="id_kh">
                            <p id="label-k-h"></p>
                            </td>
                            <td align="center" id="nilalikh">{{$nilai->akh}}</td>
                            <td align="center" id="nilaikuh">{{$nilai->kuh}}</td>
                            <td align="center" id="nilaimuth">{{$nilai->muth}}</td>
                            <td align="center" id="nilaitimeh">{{$nilai->timeh}}</td>
                            <td align="center" id="nilaibiayah">{{$nilai->biayah}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="rakh" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkuh" id="rkh" /><input type="text" class="form-control" name="routh" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmuth" id="rmuth" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimeh" id="rtimeh" /><input type="text" class="form-control" name="rtmdh" /></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayah" id="rbiayah" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_h" id="perhitungan_h" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_h" id="skp_h" readonly/></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">9</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_ki}}" id="id_ki" name="id_ki">
                            <p id="label-k-i"></p>
                            </td>
                            <td align="center" id="nilaliki">{{$nilai->aki}}</td>
                            <td align="center" id="nilaikui">{{$nilai->kui}}</td>
                            <td align="center" id="nilaimuti">{{$nilai->muti}}</td>
                            <td align="center" id="nilaitimei">{{$nilai->timei}}</td>
                            <td align="center" id="nilaibiayai">{{$nilai->biayai}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="raki" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkui" id="rki" /><input type="text" class="form-control" name="routi" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmuti" id="rmuti" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimei" id="rtimei" /><input type="text" class="form-control" name="rtmdi" /></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayai" id="rbiayai" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_i" id="perhitungan_i" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_i" id="skp_i" readonly/></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">10</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kj}}" id="id_kj" name="id_kj">
                            <p id="label-k-j"></p>
                            </td>
                            <td align="center" id="nilalikj">{{$nilai->akj}}</td>
                            <td align="center" id="nilaikuj">{{$nilai->kuj}}</td>
                            <td align="center" id="nilaimutj">{{$nilai->mutj}}</td>
                            <td align="center" id="nilaitimej">{{$nilai->timej}}</td>
                            <td align="center" id="nilaibiayaj">{{$nilai->biayaj}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="rakj" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkuj" id="rkj" /><input type="text" class="form-control" name="routj" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutj" id="rmutj" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimej" id="rtimej" /><input type="text" class="form-control" name="rtmdj" /></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayaj" id="rbiayaj" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_j" id="perhitungan_j" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_j" id="skp_j" readonly/></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">11</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kk}}" id="id_kk" name="id_kk">
                            <p id="label-k-k"></p>
                            </td>
                            <td align="center" id="nilalikk">{{$nilai->akk}}</td>
                            <td align="center" id="nilaikuk">{{$nilai->kuk}}</td>
                            <td align="center" id="nilaimutk">{{$nilai->mutk}}</td>
                            <td align="center" id="nilaitimek">{{$nilai->timek}}</td>
                            <td align="center" id="nilaibiayak">{{$nilai->biayak}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="rakk" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkuk" id="rkk" /><input type="text" class="form-control" name="routk" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutk" id="rmutk" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimek" id="rtimek" /><input type="text" class="form-control" name="rtmdk" /></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayak" id="rbiayak" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_k" id="perhitungan_k" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_k" id="skp_k" readonly/></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">12</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kl}}" id="id_kl" name="id_kl">
                            <p id="label-k-l"></p>
                            </td>
                            <td align="center" id="nilalikl">{{$nilai->akl}}</td>
                            <td align="center" id="nilaikul">{{$nilai->kul}}</td>
                            <td align="center" id="nilaimutl">{{$nilai->mutl}}</td>
                            <td align="center" id="nilaitimel">{{$nilai->timel}}</td>
                            <td align="center" id="nilaibiayal">{{$nilai->biayal}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="rakl" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkul" id="rkl" /><input type="text" class="form-control" name="routl" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutl" id="rmutl" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimel" id="rtimel" /><input type="text" class="form-control" name="rtmdl" /></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayal" id="rbiayal" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_l" id="perhitungan_l" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_l" id="skp_l" readonly/></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">13</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_km}}" id="id_km" name="id_km">
                            <p id="label-k-m"></p>
                            </td>
                            <td align="center" id="nilalikm">{{$nilai->akm}}</td>
                            <td align="center" id="nilaikum">{{$nilai->kum}}</td>
                            <td align="center" id="nilaimutm">{{$nilai->mutm}}</td>
                            <td align="center" id="nilaitimem">{{$nilai->timem}}</td>
                            <td align="center" id="nilaibiayam">{{$nilai->biayam}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="rakm" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkum" id="rkm" /><input type="text" class="form-control" name="routm" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutm" id="rmutm" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimem" id="rtimem" /><input type="text" class="form-control" name="rtmdm" /></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayam" id="rbiayam" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_m" id="perhitungan_m" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_m" id="skp_m" readonly/></td>
                        </tr>

                        <!-- TUGAS TAMBAHAN -->
                        <tr>
                            <td></td>
                            <td colspan="14" style="font-weight:bold">II. TUGAS TAMBAHAN DAN KREATIVITAS</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td colspan="2"><input type="text" class="form-control" name="dnta" /></td>
                            <!-- input -->
                            <td></td> 
                            <td colspan="4"></td>
                            <!-- input -->
                            <td></td>
                            <td colspan="5"></td>
                            <td rowspan="2"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2"><input type="text" class="form-control" name="dntb" /></td>
                            <!-- input -->
                            <td></td> 
                            <td colspan="4"></td>
                            <!-- input -->
                            <td></td>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="2"><input type="text" class="form-control" name="dntc" /></td>
                            <!-- input -->
                            <td></td> 
                            <td colspan="4"></td>
                            <!-- input -->
                            <td></td>
                            <td colspan="5"></td>
                            <td rowspan="2"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2"><input type="text" class="form-control" name="dntd" /></td>
                            <!-- input -->
                            <td></td> 
                            <td colspan="4"></td>
                            <!-- input -->
                            <td></td>
                            <td colspan="5"></td>
                        </tr>
                        
                        <!-- BARIS PEMBATAS -->
                        <tr>
                            <td colspan="15"><h5></h5></td>
                        </tr>

                        <tr>
                            <td rowspan="2" colspan="14" align="center" style="font-weight:bold"></br>Nilai Capaian SKP</td>
                            <td><input type="text" class="form-control" id="tnr" name="tnr" /><input type="text" class="form-control" id="snr" name="snr" /></td>
                        </tr>
                    </table>
                    <br>
                    <button type="submit" class="btn btn-primary col-md-12">Submit</button>
                </form>   
            </div>
        </div>
        <!-- End Panel Floating Labels -->
    </div>
    </div>
  </div>
</div>
<!-- End Page -->
@endsection

@push('scripts')
<script>
  $(document).ready( function () {
    

    var id_ka = $('#id_ka').attr('value')
    $.get('/listkegiatan/'+ id_ka, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-a').text(data.nama_kegiatan)
    });
    
    var id_kb = $('#id_kb').attr('value')
    $.get('/listkegiatan/'+ id_kb, function (data) {
        console.log(data.nama_kegiatan);
            $('#label-k-b').text(data.nama_kegiatan)
    });

    var id_kc = $('#id_kc').attr('value')
    $.get('/listkegiatan/'+ id_kc, function (data) {
        console.log(data.nama_kegiatan);
            $('#label-k-c').text(data.nama_kegiatan)
    });

    var id_kd = $('#id_kd').attr('value')
    $.get('/listkegiatan/'+ id_kd, function (data) {
        console.log(data.nama_kegiatan);
            $('#label-k-d').text(data.nama_kegiatan)
    });

    var id_ke = $('#id_ke').attr('value')
    $.get('/listkegiatan/'+ id_ke, function (data) {
        console.log(data.nama_kegiatan);
            $('#label-k-e').text(data.nama_kegiatan)
    });

    var id_kf = $('#id_kf').attr('value')
    $.get('/listkegiatan/'+ id_kf, function (data) {
        console.log(data.nama_kegiatan);
            $('#label-k-f').text(data.nama_kegiatan)
    });

    var id_kg = $('#id_kg').attr('value')
    $.get('/listkegiatan/'+ id_kg, function (data) {
        console.log(data.nama_kegiatan);
            $('#label-k-g').text(data.nama_kegiatan)
    });
    
    var id_kh = $('#id_kh').attr('value')
    $.get('/listkegiatan/'+ id_kh, function (data) {
        console.log(data.nama_kegiatan);
            $('#label-k-h').text(data.nama_kegiatan)
    });

    var id_ki = $('#id_ki').attr('value')
    $.get('/listkegiatan/'+ id_ki, function (data) {
        console.log(data.nama_kegiatan);
            $('#label-k-i').text(data.nama_kegiatan)
    });

    var id_kj = $('#id_kj').attr('value')
    $.get('/listkegiatan/'+ id_kj, function (data) {
        console.log(data.nama_kegiatan);
            $('#label-k-j').text(data.nama_kegiatan)
    });

    var id_kk = $('#id_kk').attr('value')
    $.get('/listkegiatan/'+ id_kk, function (data) {
        console.log(data.nama_kegiatan);
            $('#label-k-k').text(data.nama_kegiatan)
    });

    var id_kl = $('#id_kl').attr('value')
    $.get('/listkegiatan/'+ id_kl, function (data) {
        console.log(data.nama_kegiatan);
            $('#label-k-l').text(data.nama_kegiatan)
    });

    var id_km = $('#id_km').attr('value')
    $.get('/listkegiatan/'+ id_km, function (data) {
        console.log(data.nama_kegiatan);
            $('#label-k-m').text(data.nama_kegiatan)
    });

// --------------------Declarasi-----------------------
    var ketentuan = 24;   
   
    // ----------------kegiatan 1----------------------
    var nilaikua = $('#nilaikua').text()
    var nilaimuta = $('#nilaimuta').text()
    var nilaitimea = $('#nilaitimea').text()
    var nilaibiayaa = $('#nilaibiayaa').text()
    // ----------------kegiatan 2----------------------
    var nilaikub = $('#nilaikub').text()
    var nilaimutb = $('#nilaimutb').text()
    var nilaitimeb = $('#nilaitimeb').text()
    var nilaibiayab = $('#nilaibiayab').text()
    // ----------------kegiatan 3----------------------
    var nilaikuc = $('#nilaikuc').text()
    var nilaimutc = $('#nilaimutc').text()
    var nilaitimec = $('#nilaitimec').text()
    var nilaibiayac = $('#nilaibiayac').text()
    // ----------------kegiatan 4----------------------
    var nilaikud = $('#nilaikud').text()
    var nilaimutd = $('#nilaimutd').text()
    var nilaitimed = $('#nilaitimed').text()
    var nilaibiayad = $('#nilaibiayad').text()
     // ----------------kegiatan 5----------------------
    var nilaikue = $('#nilaikue').text()
    var nilaimute = $('#nilaimute').text()
    var nilaitimee = $('#nilaitimee').text()
    var nilaibiayae = $('#nilaibiayae').text()
    // ----------------kegiatan 6----------------------
    var nilaikuf = $('#nilaikuf').text()
    var nilaimutf = $('#nilaimutf').text()
    var nilaitimef = $('#nilaitimef').text()
    var nilaibiayaf = $('#nilaibiayaf').text()
    // ----------------kegiatan 7----------------------
    var nilaikug = $('#nilaikug').text()
    var nilaimutg = $('#nilaimutg').text()
    var nilaitimeg = $('#nilaitimeg').text()
    var nilaibiayag = $('#nilaibiayag').text()
    // ----------------kegiatan 8----------------------
    var nilaikuh = $('#nilaikuh').text()
    var nilaimuth = $('#nilaimuth').text()
    var nilaitimeh = $('#nilaitimeh').text()
    var nilaibiayah = $('#nilaibiayah').text()
    // ----------------kegiatan 9----------------------
    var nilaikui = $('#nilaikui').text()
    var nilaimuti = $('#nilaimuti').text()
    var nilaitimei = $('#nilaitimei').text()
    var nilaibiayai = $('#nilaibiayai').text()
    // ----------------kegiatan 10----------------------
    var nilaikuj = $('#nilaikuj').text()
    var nilaimutj = $('#nilaimutj').text()
    var nilaitimej = $('#nilaitimej').text()
    var nilaibiayaj = $('#nilaibiayaj').text()
    // ----------------kegiatan 11----------------------
    var nilaikuk = $('#nilaikuk').text()
    var nilaimutk = $('#nilaimutk').text()
    var nilaitimek = $('#nilaitimek').text()
    var nilaibiayak = $('#nilaibiayak').text()
    // ----------------kegiatan 12----------------------
    var nilaikul = $('#nilaikul').text()
    var nilaimutl = $('#nilaimutl').text()
    var nilaitimel = $('#nilaitimel').text()
    var nilaibiayal = $('#nilaibiayal').text()
    // ----------------kegiatan 13----------------------
    var nilaikum = $('#nilaikum').text()
    var nilaimutm = $('#nilaimutm').text()
    var nilaitimem = $('#nilaitimem').text()
    var nilaibiayam = $('#nilaibiayam').text()
    // ----------------end declare----------------------
    // -----------------------------Kegiatan 1-----------------------------
    $('#rka, #rmuta, #rtimea, #rbiayaa').keyup(function(){

        // nilai kuantitatif 
        var rka = $('#rka').val()
        var kuantitatif = (rka / nilaikua) * 100
        
        // Nilai Kualitatif 
        var rmuta = $('#rmuta').val()
        var Kualitatif = (rmuta / nilaimuta) * 100

        // Nilai time
        var rtimea = $('#rtimea').val()
        var waktu = 100 - (rtimea / nilaitimea * 100)
        if (waktu < ketentuan){
            var step_one = 1.76 * nilaitimea - rtimea
            var step_two = step_one / nilaitimea
            var result_waktu = step_two * 100
        }else {
            step_one = 1.76 * nilaitimea - rtimea
            step_two = (step_one / nilaitimea) * 100
            var step_tri = step_two - 100
            var result_waktu = 76 - step_tri
        }

        // nilai biaya
        if (nilaibiayaa != 0 ){
            var rbiayaa = $('#rbiayaa').val()
            var biayaa = 100 - (rbiayaa / nilaibiayaa * 100)
            if (biayaa >= ketentuan)
            {   
                var set_one = 1.76 * nilaibiayaa - rbiayaa 
                var set_two = (set_one / nilaibiayaa) * 100
                var set_tri = set_two - 100
                var result_biayaa = 76 - set_tri
            }else {
                set_one = 1.76 * (nilaibiayaa - rbiayaa)
                result_biayaa =  set_one / nilaibiayaa * 100
                
            }
        }else{
            nilaibiayaa = 0
        }
        

        // perhitungan tanpa biaya 
        if (nilaibiayaa != 0){
            var perhitungan = kuantitatif + Kualitatif + result_waktu + result_biayaa
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_a').text(pertitungan_a)

        }else{
            var perhitungan = kuantitatif + Kualitatif + result_waktu 
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_a').val(pertitungan_a) // benar hasilnya
        }

        //skp 
        var skp = perhitungan / 3
        var skp_a = skp.toFixed(2)
        $('#skp_a').val(skp_a) // benar hasilnya
	});	
    

    // ----------------------------Kegiatan 2---------------------------------------
    $('#rkb, #rmutb, #rtimeb, #rbiayab').keyup(function(){

        // nilai kuantitatif 
        var rkb = $('#rkb').val()
        var kuantitatif = (rkb / nilaikub) * 100
        
        // Nilai Kualitatif 
        var rmutb = $('#rmutb').val()
        var Kualitatif = (rmutb / nilaimutb) * 100

        // Nilai time
        var rtimeb = $('#rtimeb').val()
        console.log("nilai input time : " + rtimeb);
        var waktu = 100 - (rtimeb / nilaitimeb * 100)
        console.log("nilai waktu : "+ waktu);
        if (waktu < ketentuan){
            var step_one = 1.76 * nilaitimeb - rtimeb
            var step_two = step_one / nilaitimeb
            var result_waktu = step_two * 100
            console.log("nilai result waktu > : "+ result_waktu);

        }else {
            step_one = 1.76 * nilaitimeb - rtimeb
            step_two = (step_one / nilaitimeb) * 100
            var step_tri = step_two - 100
            var result_waktu = 76 - step_tri
            console.log("nilai result waktu < : "+ result_waktu);
        }

        // nilai biaya
        if (nilaibiayab != 0 ){
            var rbiayab = $('#rbiayab').val()
            var biayaa = 100 - (rbiayab / nilaibiayab * 100)
            if (biayaa >= ketentuan)
            {   
                var set_one = 1.76 * nilaibiayab - rbiayab 
                var set_two = (set_one / nilaibiayab) * 100
                var set_tri = set_two - 100
                var result_biayaa = 76 - set_tri
            }else {
                set_one = 1.76 * (nilaibiayaa - rbiayaa)
                result_biayaa =  set_one / nilaibiayaa * 100
                
            }
        }else{
            nilaibiayab = 0
        }
        

        // perhitungan tanpa biaya 
        if (nilaibiayab != 0){
            var perhitungan = kuantitatif + Kualitatif + result_waktu + result_biayaa
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_b').val(pertitungan_a)

        }else{
            perhitungan = kuantitatif + Kualitatif + result_waktu 
            pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_b').val(pertitungan_a) // benar hasilnya
        }

        //skp 
        var skp = perhitungan / 3
        var skp_a = skp.toFixed(2)
        $('#skp_b').val(skp_a) // benar hasilnya
	});	

    // ----------------------------Kegiatan 3---------------------------------------
    $('#rkc, #rmutc, #rtimec, #rbiayac').keyup(function(){

        // nilai kuantitatif 
        var rkc = $('#rkc').val()
        var kuantitatif = (rkc / nilaikuc) * 100

        // Nilai Kualitatif 
        var rmutc = $('#rmutc').val()
        var Kualitatif = (rmutc / nilaimutc) * 100

        // Nilai time
        var rtimec = $('#rtimec').val()
        console.log("nilai input time : " + rtimec);
        var waktu = 100 - (rtimec / nilaitimec * 100)
        console.log("nilai waktu : "+ waktu);
        if (waktu < ketentuan){
            var step_one = 1.76 * nilaitimec - rtimec
            var step_two = step_one / nilaitimec
            var result_waktu = step_two * 100
            console.log("nilai result waktu > : "+ result_waktu);

        }else {
            step_one = 1.76 * nilaitimec - rtimec
            step_two = (step_one / nilaitimec) * 100
            var step_tri = step_two - 100
            var result_waktu = 76 - step_tri
            console.log("nilai result waktu < : "+ result_waktu);
        }

        // nilai biaya
        if (nilaibiayac != 0 ){
            var rbiayac = $('#rbiayac').val()
            var biayaa = 100 - (rbiayac / nilaibiayac * 100)
            if (biayaa >= ketentuan)
            {   
                var set_one = 1.76 * nilaibiayac - rbiayac 
                var set_two = (set_one / nilaibiayac) * 100
                var set_tri = set_two - 100
                var result_biayaa = 76 - set_tri
            }else {
                set_one = 1.76 * (nilaibiayac - rbiayac)
                result_biayaa =  set_one / nilaibiayac * 100
                
            }
        }else{
            nilaibiayac = 0
        }


        // perhitungan tanpa biaya 
        if (nilaibiayac != 0){
            var perhitungan = kuantitatif + Kualitatif + result_waktu + result_biayaa
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_c').val(pertitungan_a)

        }else{
            perhitungan = kuantitatif + Kualitatif + result_waktu 
            pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_c').val(pertitungan_a) // benar hasilnya
        }

        //skp 
        var skp = perhitungan / 3
        var skp_a = skp.toFixed(2)
        $('#skp_c').val(skp_a) // benar hasilnya
    });	

     // ----------------------------Kegiatan 4----------------------------------------
    $('#rkd, #rmutd, #rtimed, #rbiayad').keyup(function(){

        // nilai kuantitatif 
        var rkd = $('#rkd').val()
        var kuantitatif = (rkd / nilaikud) * 100

        // Nilai Kualitatif 
        var rmutd = $('#rmutd').val()
        var Kualitatif = (rmutd / nilaimutd) * 100

        // Nilai time
        var rtimed = $('#rtimed').val()
        var waktu = 100 - (rtimed / nilaitimed * 100)
        if (waktu < ketentuan){
            var step_one = 1.76 * nilaitimed - rtimed
            var step_two = step_one / nilaitimed
            var result_waktu = step_two * 100

        }else {
            step_one = 1.76 * nilaitimed - rtimed
            step_two = (step_one / nilaitimed) * 100
            var step_tri = step_two - 100
            var result_waktu = 76 - step_tri
        }

        // nilai biaya
        if (nilaibiayad != 0 ){
            var rbiayad = $('#rbiayad').val()
            var biayaa = 100 - (rbiayad / nilaibiayad * 100)
            if (biayaa >= ketentuan)
            {   
                var set_one = 1.76 * nilaibiayad - rbiayad 
                var set_two = (set_one / nilaibiayad) * 100
                var set_tri = set_two - 100
                var result_biayaa = 76 - set_tri
            }else {
                set_one = 1.76 * (nilaibiayad - rbiayad)
                result_biayaa =  set_one / nilaibiayad * 100
                
            }
        }else{
            nilaibiayad = 0
        }


        // perhitungan tanpa biaya 
        if (nilaibiayad != 0){
            var perhitungan = kuantitatif + Kualitatif + result_waktu + result_biayaa
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_d').val(pertitungan_a)

        }else{
            perhitungan = kuantitatif + Kualitatif + result_waktu 
            pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_d').val(pertitungan_a) // benar hasilnya
        }

        //skp 
        var skp = perhitungan / 3
        var skp_a = skp.toFixed(2)
        $('#skp_d').val(skp_a) // benar hasilnya
    });	

    // ----------------------------Kegiatan 5-----------------------------------------
   
    $('#rke, #rmute, #rtimee, #rbiayae').keyup(function(){

        // nilai kuantitatif 
        var rke = $('#rke').val()
        var kuantitatif = (rke / nilaikue) * 100

        // Nilai Kualitatif 
        var rmute = $('#rmute').val()
        var Kualitatif = (rmute / nilaimute) * 100

        // Nilai time
        var rtimee = $('#rtimee').val()
        var waktu = 100 - (rtimee / nilaitimee * 100)
        if (waktu < ketentuan){
            var step_one = 1.76 * nilaitimee - rtimee
            var step_two = step_one / nilaitimee
            var result_waktu = step_two * 100

        }else {
            step_one = 1.76 * nilaitimee - rtimee
            step_two = (step_one / nilaitimee) * 100
            var step_tri = step_two - 100
            var result_waktu = 76 - step_tri
        }

        // nilai biaya
        if (nilaibiayae != 0 ){
            var rbiayae = $('#rbiayae').val()
            var biayaa = 100 - (rbiayae / nilaibiayae * 100)
            if (biayaa >= ketentuan)
            {   
                var set_one = 1.76 * nilaibiayae - rbiayae 
                var set_two = (set_one / nilaibiayae) * 100
                var set_tri = set_two - 100
                var result_biayaa = 76 - set_tri
            }else {
                set_one = 1.76 * (nilaibiayae - rbiayae)
                result_biayaa =  set_one / nilaibiayae * 100
                
            }
        }else{
            nilaibiayae = 0
        }


        // perhitungan tanpa biaya 
        if (nilaibiayae != 0){
            var perhitungan = kuantitatif + Kualitatif + result_waktu + result_biayaa
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_e').val(pertitungan_a)

        }else{
            perhitungan = kuantitatif + Kualitatif + result_waktu 
            pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_e').val(pertitungan_a) // benar hasilnya
        }

        //skp 
        var skp = perhitungan / 3
        var skp_a = skp.toFixed(2)
        $('#skp_e').val(skp_a) // benar hasilnya
    });	

    // ----------------------------Kegiatan 6-----------------------------------------
   
    $('#rkf, #rmutf, #rtimef, #rbiayaf').keyup(function(){
        
        // nilai kuantitatif 
        var rkf = $('#rkf').val()
        var kuantitatif = (rkf / nilaikuf) * 100

        // Nilai Kualitatif 
        var rmutf = $('#rmutf').val()
        var Kualitatif = (rmutf / nilaimutf) * 100

        // Nilai time
        var rtimef = $('#rtimef').val()
        var waktu = 100 - (rtimef / nilaitimef * 100)
        if (waktu < ketentuan){
            var step_one = 1.76 * nilaitimef - rtimef
            var step_two = step_one / nilaitimef
            var result_waktu = step_two * 100

        }else {
            step_one = 1.76 * nilaitimef - rtimef
            step_two = (step_one / nilaitimef) * 100
            var step_tri = step_two - 100
            var result_waktu = 76 - step_tri
        }

        // nilai biaya
        if (nilaibiayaf != 0 ){
            var rbiayaf = $('#rbiayaf').val()
            var biayaa = 100 - (rbiayaf / nilaibiayaf * 100)
            if (biayaa >= ketentuan)
            {   
                var set_one = 1.76 * nilaibiayaf - rbiayaf 
                var set_two = (set_one / nilaibiayaf) * 100
                var set_tri = set_two - 100
                var result_biayaa = 76 - set_tri
            }else {
                set_one = 1.76 * (nilaibiayaf - rbiayaf)
                result_biayaa =  set_one / nilaibiayaf * 100
                
            }
        }else{
            nilaibiayaf = 0
        }


        // perhitungan tanpa biaya 
        if (nilaibiayaf != 0){
            var perhitungan = kuantitatif + Kualitatif + result_waktu + result_biayaa
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_f').val(pertitungan_a)

        }else{
            perhitungan = kuantitatif + Kualitatif + result_waktu 
            pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_f').val(pertitungan_a) // benar hasilnya
        }

        //skp 
        var skp = perhitungan / 3
        var skp_a = skp.toFixed(2)
        $('#skp_f').val(skp_a) // benar hasilnya
    });	

    // ----------------------------Kegiatan 7-----------------------------------------
    
    $('#rkg, #rmutg, #rtimeg, #rbiayag').keyup(function(){

        // nilai kuantitatif 
        var rkg = $('#rkg').val()
        var kuantitatif = (rkg / nilaikug) * 100

        // Nilai Kualitatif 
        var rmutg = $('#rmutg').val()
        var Kualitatif = (rmutg / nilaimutg) * 100

        // Nilai time
        var rtimeg = $('#rtimeg').val()
        var waktu = 100 - (rtimeg / nilaitimeg * 100)
        if (waktu < ketentuan){
            var step_one = 1.76 * nilaitimeg - rtimeg
            var step_two = step_one / nilaitimeg
            var result_waktu = step_two * 100

        }else {
            step_one = 1.76 * nilaitimeg - rtimeg
            step_two = (step_one / nilaitimeg) * 100
            var step_tri = step_two - 100
            var result_waktu = 76 - step_tri
        }

        // nilai biaya
        if (nilaibiayag != 0 ){
            var rbiayag = $('#rbiayag').val()
            var biayaa = 100 - (rbiayag / nilaibiayag * 100)
            if (biayaa >= ketentuan)
            {   
                var set_one = 1.76 * nilaibiayag - rbiayag 
                var set_two = (set_one / nilaibiayag) * 100
                var set_tri = set_two - 100
                var result_biayaa = 76 - set_tri
            }else {
                set_one = 1.76 * (nilaibiayag - rbiayag)
                result_biayaa =  set_one / nilaibiayag * 100
                
            }
        }else{
            nilaibiayag = 0
        }


        // perhitungan tanpa biaya 
        if (nilaibiayag != 0){
            var perhitungan = kuantitatif + Kualitatif + result_waktu + result_biayaa
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_g').val(pertitungan_a)

        }else{
            perhitungan = kuantitatif + Kualitatif + result_waktu 
            pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_g').val(pertitungan_a) // benar hasilnya
        }

        //skp 
        var skp = perhitungan / 3
        var skp_a = skp.toFixed(2)
        $('#skp_g').val(skp_a) // benar hasilnya
    });	

    // ----------------------------Kegiatan 8-----------------------------------------
  

    $('#rkh, #rmuth, #rtimeh, #rbiayah').keyup(function(){

        // nilai kuantitatif 
        var rkh = $('#rkh').val()
        var kuantitatif = (rkh / nilaikuh) * 100

        // Nilai Kualitatif 
        var rmuth = $('#rmuth').val()
        var Kualitatif = (rmuth / nilaimuth) * 100

        // Nilai time
        var rtimeh = $('#rtimeh').val()
        var waktu = 100 - (rtimeh / nilaitimeh * 100)
        if (waktu < ketentuan){
            var step_one = 1.76 * nilaitimeh - rtimeh
            var step_two = step_one / nilaitimeh
            var result_waktu = step_two * 100

        }else {
            step_one = 1.76 * nilaitimeh - rtimeh
            step_two = (step_one / nilaitimeh) * 100
            var step_tri = step_two - 100
            var result_waktu = 76 - step_tri
        }

        // nilai biaya
        if (nilaibiayah != 0 ){
            var rbiayah = $('#rbiayah').val()
            var biayaa = 100 - (rbiayah / nilaibiayah * 100)
            if (biayaa >= ketentuan)
            {   
                var set_one = 1.76 * nilaibiayah - rbiayah 
                var set_two = (set_one / nilaibiayah) * 100
                var set_tri = set_two - 100
                var result_biayaa = 76 - set_tri
            }else {
                set_one = 1.76 * (nilaibiayah - rbiayah)
                result_biayaa =  set_one / nilaibiayah * 100
                
            }
        }else{
            nilaibiayah = 0
        }


        // perhitungan tanpa biaya 
        if (nilaibiayah != 0){
            var perhitungan = kuantitatif + Kualitatif + result_waktu + result_biayaa
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_h').val(pertitungan_a)

        }else{
            perhitungan = kuantitatif + Kualitatif + result_waktu 
            pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_h').val(pertitungan_a) // benar hasilnya
        }

        //skp 
        var skp = perhitungan / 3
        var skp_a = skp.toFixed(2)
        $('#skp_h').val(skp_a) // benar hasilnya
    });	

    // ----------------------------Kegiatan 9-----------------------------------------

    $('#rki, #rmuti, #rtimei, #rbiayai').keyup(function(){

        // nilai kuantitatif 
        var rki = $('#rki').val()
        var kuantitatif = (rki / nilaikui) * 100

        // Nilai Kualitatif 
        var rmuti = $('#rmuti').val()
        var Kualitatif = (rmuti / nilaimuti) * 100

        // Nilai time
        var rtimei = $('#rtimei').val()
        var waktu = 100 - (rtimei / nilaitimei * 100)
        if (waktu < ketentuan){
            var step_one = 1.76 * nilaitimei - rtimei
            var step_two = step_one / nilaitimei
            var result_waktu = step_two * 100

        }else {
            step_one = 1.76 * nilaitimei - rtimei
            step_two = (step_one / nilaitimei) * 100
            var step_tri = step_two - 100
            var result_waktu = 76 - step_tri
        }

        // nilai biaya
        if (nilaibiayai != 0 ){
            var rbiayai = $('#rbiayai').val()
            var biayaa = 100 - (rbiayai / nilaibiayai * 100)
            if (biayaa >= ketentuan)
            {   
                var set_one = 1.76 * nilaibiayai - rbiayai 
                var set_two = (set_one / nilaibiayai) * 100
                var set_tri = set_two - 100
                var result_biayaa = 76 - set_tri
            }else {
                set_one = 1.76 * (nilaibiayai - rbiayai)
                result_biayaa =  set_one / nilaibiayai * 100
                
            }
        }else{
            nilaibiayai = 0
        }


        // perhitungan tanpa biaya 
        if (nilaibiayai != 0){
            var perhitungan = kuantitatif + Kualitatif + result_waktu + result_biayaa
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_i').val(pertitungan_a)

        }else{
            perhitungan = kuantitatif + Kualitatif + result_waktu 
            pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_i').val(pertitungan_a) // benar hasilnya
        }

        //skp 
        var skp = perhitungan / 3
        var skp_a = skp.toFixed(2)
        $('#skp_i').val(skp_a) // benar hasilnya
    });	

     // ----------------------------Kegiatan 10---------------------------------------
     $('#rkj, #rmutj, #rtimej, #rbiayaj').keyup(function(){

        // nilai kuantitatif 
        var rkj = $('#rkj').val()
        var kuantitatif = (rkj / nilaikuj) * 100

        // Nilai Kualitatif 
        var rmutj = $('#rmutj').val()
        var Kualitatif = (rmutj / nilaimutj) * 100

        // Nilai time
        var rtimej = $('#rtimej').val()
        var waktu = 100 - (rtimej / nilaitimej * 100)
        if (waktu < ketentuan){
            var step_one = 1.76 * nilaitimej - rtimej
            var step_two = step_one / nilaitimej
            var result_waktu = step_two * 100

        }else {
            step_one = 1.76 * nilaitimej - rtimej
            step_two = (step_one / nilaitimej) * 100
            var step_tri = step_two - 100
            var result_waktu = 76 - step_tri
        }

        // nilai biaya
        if (nilaibiayaj != 0 ){
            var rbiayaj = $('#rbiayaj').val()
            var biayaa = 100 - (rbiayaj / nilaibiayaj * 100)
            if (biayaa >= ketentuan)
            {   
                var set_one = 1.76 * nilaibiayaj - rbiayaj 
                var set_two = (set_one / nilaibiayaj) * 100
                var set_tri = set_two - 100
                var result_biayaa = 76 - set_tri
            }else {
                set_one = 1.76 * (nilaibiayaj - rbiayaj)
                result_biayaa =  set_one / nilaibiayaj * 100
                
            }
        }else{
            nilaibiayaj = 0
        }


        // perhitungan tanpa biaya 
        if (nilaibiayaj != 0){
            var perhitungan = kuantitatif + Kualitatif + result_waktu + result_biayaa
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_j').val(pertitungan_a)

        }else{
            perhitungan = kuantitatif + Kualitatif + result_waktu 
            pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_j').val(pertitungan_a) // benar hasilnya
        }

        //skp 
        var skp = perhitungan / 3
        var skp_a = skp.toFixed(2)
        $('#skp_j').val(skp_a) // benar hasilnya
    });	

     // ----------------------------Kegiatan 11-----------------------------------------
     $('#rkk, #rmutk, #rtimek, #rbiayak').keyup(function(){

        // nilai kuantitatif 
        var rkk = $('#rkk').val()
        var kuantitatif = (rkk / nilaikuk) * 100

        // Nilai Kualitatif 
        var rmutk = $('#rmutk').val()
        var Kualitatif = (rmutk / nilaimutk) * 100

        // Nilai time
        var rtimek = $('#rtimek').val()
        var waktu = 100 - (rtimek / nilaitimek * 100)
        if (waktu < ketentuan){
            var step_one = 1.76 * nilaitimek - rtimek
            var step_two = step_one / nilaitimek
            var result_waktu = step_two * 100

        }else {
            step_one = 1.76 * nilaitimek - rtimek
            step_two = (step_one / nilaitimek) * 100
            var step_tri = step_two - 100
            var result_waktu = 76 - step_tri
        }

        // nilai biaya
        if (nilaibiayak != 0 ){
            var rbiayak = $('#rbiayak').val()
            var biayaa = 100 - (rbiayak / nilaibiayak * 100)
            if (biayaa >= ketentuan)
            {   
                var set_one = 1.76 * nilaibiayak - rbiayak 
                var set_two = (set_one / nilaibiayak) * 100
                var set_tri = set_two - 100
                var result_biayaa = 76 - set_tri
            }else {
                set_one = 1.76 * (nilaibiayak - rbiayak)
                result_biayaa =  set_one / nilaibiayak * 100
                
            }
        }else{
            nilaibiayak = 0
        }


        // perhitungan tanpa biaya 
        if (nilaibiayak != 0){
            var perhitungan = kuantitatif + Kualitatif + result_waktu + result_biayaa
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_k').val(pertitungan_a)

        }else{
            perhitungan = kuantitatif + Kualitatif + result_waktu 
            pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_k').val(pertitungan_a) // benar hasilnya
        }

        //skp 
        var skp = perhitungan / 3
        var skp_a = skp.toFixed(2)
        $('#skp_k').val(skp_a) // benar hasilnya
    });	

      // ----------------------------Kegiatan 12-----------------------------------------
      $('#rkl, #rmutl, #rtimel, #rbiayal').keyup(function(){

        // nilai kuantitatif 
        var rkl = $('#rkl').val()
        var kuantitatif = (rkl / nilaikul) * 100

        // Nilai Kualitatif 
        var rmutl = $('#rmutl').val()
        var Kualitatif = (rmutl / nilaimutl) * 100

        // Nilai time
        var rtimel = $('#rtimel').val()
        var waktu = 100 - (rtimel / nilaitimel * 100)
        if (waktu < ketentuan){
            var step_one = 1.76 * nilaitimel - rtimel
            var step_two = step_one / nilaitimel
            var result_waktu = step_two * 100

        }else {
            step_one = 1.76 * nilaitimel - rtimel
            step_two = (step_one / nilaitimel) * 100
            var step_tri = step_two - 100
            var result_waktu = 76 - step_tri
        }

        // nilai biaya
        if (nilaibiayal != 0 ){
            var rbiayal = $('#rbiayal').val()
            var biayaa = 100 - (rbiayal / nilaibiayal * 100)
            if (biayaa >= ketentuan)
            {   
                var set_one = 1.76 * nilaibiayal - rbiayal 
                var set_two = (set_one / nilaibiayal) * 100
                var set_tri = set_two - 100
                var result_biayaa = 76 - set_tri
            }else {
                set_one = 1.76 * (nilaibiayal - rbiayal)
                result_biayaa =  set_one / nilaibiayal * 100
                
            }
        }else{
            nilaibiayal = 0
        }


        // perhitungan tanpa biaya 
        if (nilaibiayal != 0){
            var perhitungan = kuantitatif + Kualitatif + result_waktu + result_biayaa
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_l').val(pertitungan_a)

        }else{
            perhitungan = kuantitatif + Kualitatif + result_waktu 
            pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_l').val(pertitungan_a) // benar hasilnya
        }

        //skp 
        var skp = perhitungan / 3
        var skp_a = skp.toFixed(2)
        $('#skp_l').val(skp_a) // benar hasilnya
    });	

     // ----------------------------Kegiatan 13-----------------------------------------
     $('#rkm, #rmutm, #rtimem, #rbiayam').keyup(function(){

        // nilai kuantitatif 
        var rkm = $('#rkm').val()
        var kuantitatif = (rkm / nilaikum) * 100

        // Nilai Kualitatif 
        var rmutm = $('#rmutm').val()
        var Kualitatif = (rmutm / nilaimutm) * 100

        // Nilai time
        var rtimem = $('#rtimem').val()
        var waktu = 100 - (rtimem / nilaitimem * 100)
        if (waktu < ketentuan){
            var step_one = 1.76 * nilaitimem - rtimem
            var step_two = step_one / nilaitimem
            var result_waktu = step_two * 100

        }else {
            step_one = 1.76 * nilaitimem - rtimem
            step_two = (step_one / nilaitimem) * 100
            var step_tri = step_two - 100
            var result_waktu = 76 - step_tri
        }

        // nilai biaya
        if (nilaibiayam != 0 ){
            var rbiayam = $('#rbiayam').val()
            var biayaa = 100 - (rbiayam / nilaibiayam * 100)
            if (biayaa >= ketentuan)
            {   
                var set_one = 1.76 * nilaibiayam - rbiayam 
                var set_two = (set_one / nilaibiayam) * 100
                var set_tri = set_two - 100
                var result_biayaa = 76 - set_tri
            }else {
                set_one = 1.76 * (nilaibiayam - rbiayam)
                result_biayaa =  set_one / nilaibiayam * 100
                
            }
        }else{
            nilaibiayam = 0
        }


        // perhitungan tanpa biaya 
        if (nilaibiayam != 0){
            var perhitungan = kuantitatif + Kualitatif + result_waktu + result_biayaa
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_m').val(pertitungan_a)

        }else{
            perhitungan = kuantitatif + Kualitatif + result_waktu 
            pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_m').val(pertitungan_a) // benar hasilnya
        }

        //skp 
        var skp = perhitungan / 3
        var skp_a = skp.toFixed(2)
        $('#skp_m').val(skp_a) // benar hasilnya
    });	

});
</script>
@endpush