@extends('layout')

@section('container')
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Form Edit Perhitungan SKP</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
      <li class="breadcrumb-item active">Edit Perhitungan SKP</li>
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
                    <h5>{{$skp->semester}} {{$skp->tahun}}</h5>
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
                            <td align="center"><input type="text" class="form-control" name="rkub" id="rkb" value="{{$realisasi->rkub}}" /><input type="text" class="form-control" name="routb" value="{{$realisasi->routb}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutb" id="rmutb" value="{{$realisasi->rmutb}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimeb" id="rtimeb" value="{{$realisasi->rtimeb}}" /><input type="text" class="form-control" name="rtmdb" value="{{$realisasi->rtmdb}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayab" id="rbiayab" value="{{$realisasi->rbiayab}}" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_b"  value="{{$realisasi->perhitungan_b}}" id="perhitungan_b" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_b" value="{{$realisasi->skp_b}}" id="skp_b" readonly/></td>
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
                            <td align="center"><input type="text" class="form-control" name="rakc" value="{{$realisasi->rakc}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkuc" id="rkc" value="{{$realisasi->rkuc}}" /><input type="text" class="form-control" name="routc" value="{{$realisasi->routc}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutc" id="rmutc"  value="{{$realisasi->rmutc}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimec" id="rtimec" value="{{$realisasi->rtimec}}" /><input type="text" class="form-control" name="rtmdc" value="{{$realisasi->rtmdc}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayac" id="rbiayac" value="{{$realisasi->rbiayac}}" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_c"  value="{{$realisasi->perhitungan_c}}" id="perhitungan_c" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_c" value="{{$realisasi->skp_c}}" id="skp_c" readonly/></td>
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
                            <td align="center"><input type="text" class="form-control" name="rakd" value="{{$realisasi->rakd}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkud" id="rkd" value="{{$realisasi->rkud}}" /><input type="text" class="form-control" name="routd" value="{{$realisasi->routd}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutd" id="rmutd" value="{{$realisasi->rmutd}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimed" id="rtimed" value="{{$realisasi->rtimed}}" /><input type="text" class="form-control" name="rtmdd" value="{{$realisasi->rtmdd}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayad" id="rbiayad" value="{{$realisasi->rbiayad}}" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_d" value="{{$realisasi->perhitungan_d}}" id="perhitungan_d" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_d" value="{{$realisasi->skp_d}}" id="skp_d" readonly/></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">5</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_ke}}" id="id_ke" name="id_ke">
                            <p id="label-k-e"></p>
                            </td>
                            <td align="center" id="nilalike">{{$nilai->ake}}</td>
                            <td align="center" id="nilaikue">{{$nilai->kue}}</td>
                            <td align="center" id="nilaimute">{{$nilai->mute}}</td>
                            <td align="center" id="nilaitimee">{{$nilai->timee}}</td>
                            <td align="center" id="nilaibiayae">{{$nilai->biayae}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="rake" value="{{$realisasi->rake}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkue" id="rke" value="{{$realisasi->rkue}}" /><input type="text" class="form-control" name="route" value="{{$realisasi->route}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmute" id="rmute" value="{{$realisasi->rmute}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimee" id="rtimee" value="{{$realisasi->rtimee}}" /><input type="text" class="form-control" name="rtmde" value="{{$realisasi->rtmde}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayae" id="rbiayae" value="{{$realisasi->rbiayae}}" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_e" value="{{$realisasi->perhitungan_e}}" id="perhitungan_e" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_e" value="{{$realisasi->skp_e}}" id="skp_e" readonly/></td>
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
                            <td align="center"><input type="text" class="form-control" name="rakf" value="{{$realisasi->rakf}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkuf" id="rkf" value="{{$realisasi->rkuf}}" /><input type="text" class="form-control" name="routf" value="{{$realisasi->routf}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutf" id="rmutf" value="{{$realisasi->rmutf}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimef" id="rtimef" value="{{$realisasi->rtimef}}" /><input type="text" class="form-control" name="rtmdf" value="{{$realisasi->rtmdf}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayaf" id="rbiayaf" value="{{$realisasi->rbiayaf}}" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_f" value="{{$realisasi->perhitungan_f}}" id="perhitungan_f" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_f" value="{{$realisasi->skp_f}}" id="skp_f" readonly/></td>
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
                            <td align="center"><input type="text" class="form-control" name="rakg" value="{{$realisasi->rakg}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkug" id="rkg" value="{{$realisasi->rkug}}" /><input type="text" class="form-control" name="routg" value="{{$realisasi->routg}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutg" id="rmutg" value="{{$realisasi->rmutg}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimeg" id="rtimeg" value="{{$realisasi->rtimeg}}" /><input type="text" class="form-control" name="rtmdg" value="{{$realisasi->rtmdg}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayag" id="rbiayag" value="{{$realisasi->rbiayag}}" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_g" value="{{$realisasi->perhitungan_g}}" id="perhitungan_g" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_g" value="{{$realisasi->skp_g}}" id="skp_g" readonly/></td>
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
                            <td align="center"><input type="text" class="form-control" name="rakh" value="{{$realisasi->rakh}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkuh" id="rkh" value="{{$realisasi->rkuh}}" /><input type="text" class="form-control" name="routh" value="{{$realisasi->routh}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmuth" id="rmuth" value="{{$realisasi->rmuth}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimeh" id="rtimeh" value="{{$realisasi->rtimeh}}" /><input type="text" class="form-control" name="rtmdh" value="{{$realisasi->rtmdh}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayah" id="rbiayah" value="{{$realisasi->rbiayah}}" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_h" value="{{$realisasi->perhitungan_h}}" id="perhitungan_h" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_h" value="{{$realisasi->skp_h}}" id="skp_h" readonly/></td>
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
                            <td align="center"><input type="text" class="form-control" name="raki" value="{{$realisasi->raki}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkui" id="rki" value="{{$realisasi->rkui}}" /><input type="text" class="form-control" name="routi" value="{{$realisasi->routi}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmuti" id="rmuti" value="{{$realisasi->rmuti}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimei" id="rtimei" value="{{$realisasi->rtimei}}" /><input type="text" class="form-control" name="rtmdi" value="{{$realisasi->rtmdi}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayai" id="rbiayai" value="{{$realisasi->rbiayai}}" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_i" value="{{$realisasi->perhitungan_i}}" id="perhitungan_i" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_i" value="{{$realisasi->skp_i}}" id="skp_i" readonly/></td>
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
                            <td align="center"><input type="text" class="form-control" name="rakj" value="{{$realisasi->rakj}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkuj" id="rkj" value="{{$realisasi->rkuj}}" /><input type="text" class="form-control" name="routj" value="{{$realisasi->routj}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutj" id="rmutj" value="{{$realisasi->rmutj}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimej" id="rtimej" value="{{$realisasi->rtimej}}" /><input type="text" class="form-control" name="rtmdj" value="{{$realisasi->rtmdj}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayaj" id="rbiayaj" value="{{$realisasi->rbiayaj}}" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_j" value="{{$realisasi->perhitungan_j}}" id="perhitungan_j" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_j" value="{{$realisasi->skp_j}}" id="skp_j" readonly/></td>
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
                            <td align="center"><input type="text" class="form-control" name="rakk" value="{{$realisasi->rakk}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkuk" id="rkk" value="{{$realisasi->rkuk}}" /><input type="text" class="form-control" name="routk" value="{{$realisasi->routk}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutk" id="rmutk" value="{{$realisasi->rmutk}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimek" id="rtimek" value="{{$realisasi->rtimek}}" /><input type="text" class="form-control" name="rtmdk" value="{{$realisasi->rtmdk}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayak" id="rbiayak" value="{{$realisasi->rbiayak}}" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_k" value="{{$realisasi->perhitungan_k}}" id="perhitungan_k" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_k" value="{{$realisasi->skp_k}}" id="skp_k" readonly/></td>
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
                            <td align="center"><input type="text" class="form-control" name="rakl" value="{{$realisasi->rakl}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkul" id="rkl" value="{{$realisasi->rkul}}" /><input type="text" class="form-control" name="routl" value="{{$realisasi->routl}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutl" id="rmutl" value="{{$realisasi->rmutl}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimel" id="rtimel" value="{{$realisasi->rtimel}}" /><input type="text" class="form-control" name="rtmdl" value="{{$realisasi->rtmdl}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayal" id="rbiayal" value="{{$realisasi->rbiayal}}" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_l" value="{{$realisasi->perhitungan_l}}" id="perhitungan_l" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_l" value="{{$realisasi->skp_l}}" id="skp_l" readonly/></td>
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
                            <td align="center"><input type="text" class="form-control" name="rakm" value="{{$realisasi->rakm}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkum" id="rkm" value="{{$realisasi->rkum}}" /><input type="text" class="form-control" name="routm" value="{{$realisasi->routm}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rmutm" id="rmutm" value="{{$realisasi->rmutm}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimem" id="rtimem" value="{{$realisasi->rtimem}}" /><input type="text" class="form-control" name="rtmdm" value="{{$realisasi->rtmdm}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayam" id="rbiayam" value="{{$realisasi->rbiayam}}" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_m" value="{{$realisasi->perhitungan_m}}" id="perhitungan_m" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_m" value="{{$realisasi->skp_m}}" id="skp_m" readonly/></td>
                        </tr>

                        
                        <!-- TERBARU TAMBAHAN -->
                        <tr>
                            <!-- TARGET -->
                            <td align="center">14</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kn}}" id="id_kn" name="id_kn">
                            <p id="label-k-n"></p>
                            </td>
                            <td align="center" id="nilalikn">{{$nilai->akn}}</td>
                            <td align="center" id="nilaikun">{{$nilai->kun}}</td>
                            <td align="center" id="nilaimutn">{{$nilai->mutn}}</td>
                            <td align="center" id="nilaitimen">{{$nilai->timen}}</td>
                            <td align="center" id="nilaibiayan">{{$nilai->biayan}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="rakn" value="{{$realisasi->rakn}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rkun" id="rkn" value="{{$realisasi->rkun}}" /><input type="text" class="form-control" name="routn" value="{{$realisasi->routn}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rmutn" id="rmutn" value="{{$realisasi->rmutn}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rtimen" id="rtimen" value="{{$realisasi->rtimen}}" /><input type="text" class="form-control" name="rtmdn" value="{{$realisasi->rtmdn}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayan" id="rbiayan" value="{{$realisasi->rbiayan}}"/></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_n" value="{{$realisasi->perhitungan_n}}" id="perhitungan_n" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_n" value="{{$realisasi->skp_n}}" id="skp_n" readonly/></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">15</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_ko}}" id="id_ko" name="id_ko">
                            <p id="label-k-o"></p>
                            </td>
                            <td align="center" id="nilaliko">{{$nilai->ako}}</td>
                            <td align="center" id="nilaikuo">{{$nilai->kuo}}</td>
                            <td align="center" id="nilaimuto">{{$nilai->muto}}</td>
                            <td align="center" id="nilaitimeo">{{$nilai->timeo}}</td>
                            <td align="center" id="nilaibiayao">{{$nilai->biayao}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="rako" value="{{$realisasi->rako}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rkuo" id="rko" value="{{$realisasi->rkuo}}" /><input type="text" class="form-control" name="routo" value="{{$realisasi->routo}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rmuto" id="rmuto" value="{{$realisasi->rmuto}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimeo" id="rtimeo" value="{{$realisasi->rtimeo}}" /><input type="text" class="form-control" name="rtmdo" value="{{$realisasi->rtmdo}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayao" id="rbiayao" value="{{$realisasi->rbiayao}}"/></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_o" value="{{$realisasi->perhitungan_o}}" id="perhitungan_o" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_o" value="{{$realisasi->skp_o}}" id="skp_o" readonly/></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">16</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kp}}" id="id_kp" name="id_kp">
                            <p id="label-k-p"></p>
                            </td>
                            <td align="center" id="nilalikp">{{$nilai->akp}}</td>
                            <td align="center" id="nilaikup">{{$nilai->kup}}</td>
                            <td align="center" id="nilaimutp">{{$nilai->mutp}}</td>
                            <td align="center" id="nilaitimep">{{$nilai->timep}}</td>
                            <td align="center" id="nilaibiayap">{{$nilai->biayap}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center"><input type="text" class="form-control" name="rakp" value="{{$realisasi->rakp}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rkup" id="rkp" value="{{$realisasi->rkup}}"/><input type="text" class="form-control" name="routp" value="{{$realisasi->routp}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rmutp" id="rmutp" value="{{$realisasi->rmutp}}" /></td>
                            <td align="center"><input type="text" class="form-control" name="rtimep" id="rtimep" value="{{$realisasi->rtimep}}" /><input type="text" class="form-control" name="rtmdp"  value="{{$realisasi->rtmdp}}"/></td>
                            <td align="center"><input type="text" class="form-control" name="rbiayap" id="rbiayap" value="{{$realisasi->rbiayap}}" /></td>
                            <td align="center"> <input type="text" class="form-control" name="perhitungan_p"  value="{{$realisasi->perhitungan_p}}" id="perhitungan_p" readonly /></td>
                            <td align="center"><input type="text" class="form-control" name="skp_p" value="{{$realisasi->skp_p}}" id="skp_p" readonly/></td>
                        </tr>

                        <!-- TUGAS TAMBAHAN -->
                        <!-- TUGAS TAMBAHAN -->
                        <tr>
                            <td></td>
                            <td colspan="14" style="font-weight:bold">II. TUGAS TAMBAHAN DAN KREATIVITAS</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td colspan="2"><input type="text" class="form-control" name="name_dnta" id="name_dnta" /></td>
                            <!-- input -->
                            <td></td> 
                            <td colspan="4"></td>
                            <!-- input -->
                            <td></td>
                            <td colspan="5"></td>
                            <td rowspan="2"><input type="text" class="form-control" name="dnta" id="dnta" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2"><input type="text" class="form-control" /></td>
                            <!-- input -->
                            <td></td> 
                            <td colspan="4"></td>
                            <!-- input -->
                            <td></td>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="2"><input type="text" class="form-control" name="name_dntb" id="name_dntb" /></td>
                            <!-- input -->
                            <td></td> 
                            <td colspan="4"></td>
                            <!-- input -->
                            <td></td>
                            <td colspan="5"></td>
                            <td rowspan="2"><input type="text" class="form-control" name="dntb" id="dntb" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2"><input type="text" class="form-control"/></td>
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
                            <td><input type="text" class="form-control" value="{{$realisasi->tnr}}" id="tnr" name="tnr" /><input type="text" class="form-control" value="{{$realisasi->snr}}" id="snr" name="snr" /></td>
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

    var id_kn = $('#id_kn').attr('value')
    $.get('/listkegiatan/'+ id_kn, function (data) {
        console.log(data.nama_kegiatan);
            $('#label-k-n').text(data.nama_kegiatan)
    });

    var id_ko = $('#id_ko').attr('value')
    $.get('/listkegiatan/'+ id_ko, function (data) {
        console.log(data.nama_kegiatan);
            $('#label-k-o').text(data.nama_kegiatan)
    });

    var id_kp = $('#id_kp').attr('value')
    $.get('/listkegiatan/'+ id_kp, function (data) {
        console.log(data.nama_kegiatan);
            $('#label-k-p').text(data.nama_kegiatan)
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
    // ----------------kegiatan 14----------------------
    var nilaikun = $('#nilaikun').text()
    var nilaimutn = $('#nilaimutn').text()
    var nilaitimen = $('#nilaitimen').text()
    var nilaibiayan = $('#nilaibiayan').text()
    // ----------------kegiatan 15----------------------
    var nilaikuo = $('#nilaikuo').text()
    var nilaimuto = $('#nilaimuto').text()
    var nilaitimeo = $('#nilaitimeo').text()
    var nilaibiayao = $('#nilaibiayao').text()
    // ----------------kegiatan 16----------------------
    var nilaikup = $('#nilaikup').text()
    var nilaimutp = $('#nilaimutp').text()
    var nilaitimep = $('#nilaitimep').text()
    var nilaibiayap = $('#nilaibiayap').text()
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

    // ----------------------------Kegiatan 14-----------------------------------------

    $('#rkn, #rmutn, #rtimen, #rbiayan').keyup(function(){

        // nilai kuantitatif 
        var rkm = $('#rkn').val()
        var kuantitatif = (rkm / nilaikun) * 100

        // Nilai Kualitatif 
        var rmutm = $('#rmutn').val()
        var Kualitatif = (rmutm / nilaimutn) * 100

        // Nilai time
        var rtimem = $('#rtimen').val()
        var waktu = 100 - (rtimem / nilaitimen * 100)
        if (waktu < ketentuan){
            var step_one = 1.76 * nilaitimen - rtimem
            var step_two = step_one / nilaitimen
            var result_waktu = step_two * 100

        }else {
            step_one = 1.76 * nilaitimen - rtimem
            step_two = (step_one / nilaitimen) * 100
            var step_tri = step_two - 100
            var result_waktu = 76 - step_tri
        }

        // nilai biaya
        if (nilaibiayan != 0 ){
            var rbiayam = $('#rbiayan').val()
            var biayaa = 100 - (rbiayam / nilaibiayan * 100)
            if (biayaa >= ketentuan)
            {   
                var set_one = 1.76 * nilaibiayan - rbiayam 
                var set_two = (set_one / nilaibiayan) * 100
                var set_tri = set_two - 100
                var result_biayaa = 76 - set_tri
            }else {
                set_one = 1.76 * (nilaibiayan - rbiayam)
                result_biayaa =  set_one / nilaibiayan * 100
                
            }
        }else{
            nilaibiayan = 0
        }


        // perhitungan tanpa biaya 
        if (nilaibiayan != 0){
            var perhitungan = kuantitatif + Kualitatif + result_waktu + result_biayaa
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_n').val(pertitungan_a)

        }else{
            perhitungan = kuantitatif + Kualitatif + result_waktu 
            pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_n').val(pertitungan_a) // benar hasilnya
        }

        //skp 
        var skp = perhitungan / 3
        var skp_a = skp.toFixed(2)
        $('#skp_n').val(skp_a) // benar hasilnya
    });	

    // ----------------------------Kegiatan 15-----------------------------------------
    $('#rko, #rmuto, #rtimeo, #rbiayao').keyup(function(){

        // nilai kuantitatif 
        var rkm = $('#rko').val()
        var kuantitatif = (rkm / nilaikuo) * 100

        // Nilai Kualitatif 
        var rmutm = $('#rmuto').val()
        var Kualitatif = (rmutm / nilaimuto) * 100

        // Nilai time
        var rtimem = $('#rtimeo').val()
        var waktu = 100 - (rtimem / nilaitimeo * 100)
        if (waktu < ketentuan){
            var step_one = 1.76 * nilaitimeo - rtimem
            var step_two = step_one / nilaitimeo
            var result_waktu = step_two * 100

        }else {
            step_one = 1.76 * nilaitimeo - rtimem
            step_two = (step_one / nilaitimeo) * 100
            var step_tri = step_two - 100
            var result_waktu = 76 - step_tri
        }

        // nilai biaya
        if (nilaibiayao != 0 ){
            var rbiayam = $('#rbiayao').val()
            var biayaa = 100 - (rbiayam / nilaibiayao * 100)
            if (biayaa >= ketentuan)
            {   
                var set_one = 1.76 * nilaibiayao - rbiayam 
                var set_two = (set_one / nilaibiayao) * 100
                var set_tri = set_two - 100
                var result_biayaa = 76 - set_tri
            }else {
                set_one = 1.76 * (nilaibiayao - rbiayam)
                result_biayaa =  set_one / nilaibiayao * 100
                
            }
        }else{
            nilaibiayao = 0
        }


        // perhitungan tanpa biaya 
        if (nilaibiayao != 0){
            var perhitungan = kuantitatif + Kualitatif + result_waktu + result_biayaa
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_o').val(pertitungan_a)

        }else{
            perhitungan = kuantitatif + Kualitatif + result_waktu 
            pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_o').val(pertitungan_a) // benar hasilnya
        }

        //skp 
        var skp = perhitungan / 3
        var skp_a = skp.toFixed(2)
        $('#skp_o').val(skp_a) // benar hasilnya
    });	

    // ----------------------------Kegiatan 16-----------------------------------------
    $('#rkp, #rmutp, #rtimep, #rbiayap').keyup(function(){

        // nilai kuantitatif 
        var rkm = $('#rkp').val()
        var kuantitatif = (rkm / nilaikup) * 100

        // Nilai Kualitatif 
        var rmutm = $('#rmutp').val()
        var Kualitatif = (rmutm / nilaimutp) * 100

        // Nilai time
        var rtimem = $('#rtimep').val()
        var waktu = 100 - (rtimem / nilaitimep * 100)
        if (waktu < ketentuan){
            var step_one = 1.76 * nilaitimep - rtimem
            var step_two = step_one / nilaitimep
            var result_waktu = step_two * 100

        }else {
            step_one = 1.76 * nilaitimep - rtimem
            step_two = (step_one / nilaitimep) * 100
            var step_tri = step_two - 100
            var result_waktu = 76 - step_tri
        }

        // nilai biaya
        if (nilaibiayap != 0 ){
            var rbiayam = $('#rbiayap').val()
            var biayaa = 100 - (rbiayam / nilaibiayap * 100)
            if (biayaa >= ketentuan)
            {   
                var set_one = 1.76 * nilaibiayap - rbiayam 
                var set_two = (set_one / nilaibiayap) * 100
                var set_tri = set_two - 100
                var result_biayaa = 76 - set_tri
            }else {
                set_one = 1.76 * (nilaibiayap - rbiayam)
                result_biayaa =  set_one / nilaibiayap * 100
                
            }
        }else{
            nilaibiayap = 0
        }


        // perhitungan tanpa biaya 
        if (nilaibiayap != 0){
            var perhitungan = kuantitatif + Kualitatif + result_waktu + result_biayaa
            var pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_p').val(pertitungan_a)

        }else{
            perhitungan = kuantitatif + Kualitatif + result_waktu 
            pertitungan_a = perhitungan.toFixed(0);
            $('#perhitungan_p').val(pertitungan_a) // benar hasilnya
        }

        //skp 
        var skp = perhitungan / 3
        var skp_a = skp.toFixed(2)
        $('#skp_p').val(skp_a) // benar hasilnya
    });	

    // cek nilai kuantitas != 0
    if (nilaikua != 0){
       var a = 1
    }
    else{
        a = 0
    }
    //------------------
    if (nilaikub != 0){
        var b = 1
    }else{
        b = 0
    }
    //------------------
    if (nilaikuc != 0){
        var c = 1
    }else{
        c = 0
    }
    // -----------------
    if (nilaikud != 0){
        var d = 1
    }else{
        d = 0
    }
    // -----------------
    if (nilaikue != 0){
        var e = 1
    }else{
        e = 0
    }
    // -----------------
    if (nilaikuf != 0){
        var f = 1
    }else{
        f = 0
    }
    // -----------------
    if (nilaikug != 0){
        var g = 1
    }else{
        g = 0
    }
    // -----------------
    if (nilaikuh != 0){
        var h = 1
    }else{
        h = 0
    }
    // -----------------
    if (nilaikui != 0){
        var i = 1
    }else{
        i = 0
    }
     // -----------------
     if (nilaikuj != 0){
        var j = 1
    }else{
        j = 0
    }
     // -----------------
    if (nilaikuk != 0){
        var k = 1
    }else{
        k = 0
    }
     // -----------------
    if (nilaikul != 0){
        var l = 1
    }else{
        l = 0
    }
    // -----------------
    if (nilaikum != 0){
        var m = 1
    }else{
        m = 0
    }
        // -----------------
        if (nilaikun != 0){
        var n = 1
    }else{
        n = 0
    }
    // --------------------
    if (nilaikuo != 0){
        var o = 1
    }else{
        o = 0
    }
    // --------------------
    if (nilaikup != 0){
        var p = 1
    }else{
        p = 0
    }
    var sumNilai = a+b+c+d+e+f+g+h+i+j+k+l+m+n+o+p
    console.log("ini nilai a : " + a);
    console.log("ini nilai b : " + b);
    console.log("ini nilai c : " + c);
    console.log("ini nilai d : " + d);
    console.log("ini nilai e : " + e);
    console.log("ini nilai f : " + f);
    console.log("ini nilai g : " + g);
    console.log("ini nilai h : " + h);
    console.log("ini nilai i : " + i);
    console.log("ini nilai j : " + j);
    console.log("ini nilai k : " + k);
    console.log("ini nilai l : " + l);
    console.log("ini nilai m : " + m);
    console.log("ini nilai n : " + n);
    console.log("ini nilai o : " + o);
    console.log("ini nilai p : " + p);
    console.log("ini nilai Sum Nilai : " + sumNilai);

    // ===========================================================

    $('#rka, #rkb, #rkc, #rkd, #rkd, #rke, #rkf, #rkg, #rkh, #rki, #rkj, #rkk, #rkl, #rkm, #rkn, #rko, #rbiayao, #rkp, #rbiayap').keyup(function(){
        var skp_1 = $('#skp_a').val() * 1
        var skp_2 = $('#skp_b').val() * 1
        var skp_3 = $('#skp_c').val() * 1
        var skp_4 = $('#skp_d').val() * 1
        var skp_5 = $('#skp_e').val() * 1
        var skp_6 = $('#skp_f').val() * 1
        var skp_7 = $('#skp_g').val() * 1
        var skp_8 = $('#skp_h').val() * 1
        var skp_9 = $('#skp_i').val() * 1
        var skp_10 = $('#skp_j').val() * 1
        var skp_11 = $('#skp_k').val() * 1
        var skp_12 = $('#skp_l').val() * 1
        var skp_13 = $('#skp_m').val() * 1
        var skp_14 = $('#skp_n').val() * 1
        var skp_15 = $('#skp_o').val() * 1
        var skp_16 = $('#skp_p').val() * 1
        var dnta = $('#dnta').val() * 1
        var dntb = $('#dntb').val() * 1
        var buruk = "Buruk"
        var sedang = "Sedang"
        var cukup = "Cukup"
        var baik = "Baik"
        var sb = "Sangat Baik"

        console.log(skp_1);
        console.log(skp_2);
        console.log(skp_3);
        console.log(skp_4);
        console.log(skp_5);
        console.log(skp_6);
        console.log(skp_7);
        console.log(skp_8);
        console.log(skp_9);
        console.log(skp_10);
        console.log(skp_11);
        console.log(skp_12);
        console.log(skp_13);
        console.log(skp_14);
        console.log(skp_15);
        console.log(skp_16);
            
        var sumSKP = skp_1+skp_2+skp_3+skp_4+skp_5+skp_6+skp_7+skp_8+skp_9+skp_10+skp_11+skp_12+skp_13+skp_14+skp_15+skp_16
        var sumNilaiTambahan = dnta+dntb

        var nilaiTotal = (sumSKP/sumNilai) + sumNilaiTambahan

        console.log('nilaiTotal' + nilaiTotal);
        
        $('#tnr').val(nilaiTotal.toFixed(2))

        if (nilaiTotal <= 50){
            $('#snr').val(buruk)
        }
        else if (nilaiTotal <= 60){
            $('#snr').val(sedang)
        }
        else if(nilaiTotal <= 75){
            $('#snr').val(cukup)
        }
        else if (nilaiTotal <= 90){
            $('#snr').val(baik)
        }
        else{
            $('#snr').val(sb)
        }

    })

});
</script>
@endpush