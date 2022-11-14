@extends('layout')

@section('container')
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Detail Perhitungan SKP</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
      <li class="breadcrumb-item active">Detail Nilai SKP</li>
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
        <div class="text-right">
          <a href="/perhitunganskppdf/{{$realisasi->id_skpnr}}" class="btn btn-primary col-md-1 wb-download">PDF</a>  
        </div>
        <br>
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title" style="text-align:center">FORMULIR SASARAN KERJA </br> PEGAWAI UNMUS</h3>
        </div>

          <div class="panel-body container-fluid">
          <h5>Jangka Waktu Penilaian</h5>
          <h5>{{$skp->semester}} {{$skp->tahun}}</h5>
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
                            <td align="center">{{$nilai->aka}}</td>
                            <td align="center">{{$nilai->kua}}</td>
                            <td align="center">{{$nilai->muta}}</td>
                            <td align="center">{{$nilai->timea}}</td>
                            <td align="center">{{$nilai->biayaa}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center">{{$realisasi->raka}}</td>
                            <td align="center">{{$realisasi->rkua}} {{$realisasi->routa}}</td>
                            <td align="center">{{$realisasi->rmuta}}</td>
                            <td align="center">{{$realisasi->rtimea}} {{$realisasi->rtmda}}</td>
                            <td align="center">{{$realisasi->rbiayaa}}</td>
                            <td align="center">{{$realisasi->perhitungan_a}}</td>
                            <td align="center">{{$realisasi->skp_a}}</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">2</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kb}}" id="id_kb" name="id_kb">
                                <p id="lebel-k-b"></p>
                            </td>
                            <td align="center">{{$nilai->akb}}</td>
                            <td align="center">{{$nilai->kub}}</td>
                            <td align="center">{{$nilai->mutb}}</td>
                            <td align="center">{{$nilai->timeb}}</td>
                            <td align="center">{{$nilai->biayab}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center">{{$realisasi->rakb}}</td>
                            <td align="center">{{$realisasi->rkub}} {{$realisasi->routb}}</td>
                            <td align="center">{{$realisasi->rmutb}}</td>
                            <td align="center">{{$realisasi->rtimeb}} {{$realisasi->rtmdb}}</td>
                            <td align="center">{{$realisasi->rbiayab}}</td>
                            <td align="center">{{$realisasi->perhitungan_b}}</td>
                            <td align="center">{{$realisasi->skp_b}}</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">3</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kc}}" id="id_kc" name="id_kc">
                                <p id="lebel-k-c"></p>
                            </td>
                            <td align="center">{{$nilai->akc}}</td>
                            <td align="center">{{$nilai->kuc}}</td>
                            <td align="center">{{$nilai->mutc}}</td>
                            <td align="center">{{$nilai->timec}}</td>
                            <td align="center">{{$nilai->biayac}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center">{{$realisasi->rakc}}</td>
                            <td align="center">{{$realisasi->rkuc}} {{$realisasi->routc}}</td>
                            <td align="center">{{$realisasi->rmutc}}</td>
                            <td align="center">{{$realisasi->rtimec}} {{$realisasi->rtmdc}}</td>
                            <td align="center">{{$realisasi->rbiayac}}</td>
                            <td align="center">{{$realisasi->perhitungan_c}}</td>
                            <td align="center">{{$realisasi->skp_c}}</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">4</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kd}}" id="id_kd" name="id_kd">
                                <p id="lebel-k-d"></p>
                            </td>
                            <td align="center">{{$nilai->akd}}</td>
                            <td align="center">{{$nilai->kud}}</td>
                            <td align="center">{{$nilai->mutd}}</td>
                            <td align="center">{{$nilai->timed}}</td>
                            <td align="center">{{$nilai->biayad}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center">{{$realisasi->rakd}}</td>
                            <td align="center">{{$realisasi->rkud}} {{$realisasi->routd}}</td>
                            <td align="center">{{$realisasi->rmutd}}</td>
                            <td align="center">{{$realisasi->rtimed}} {{$realisasi->rtmdd}}</td>
                            <td align="center">{{$realisasi->rbiayad}}</td>
                            <td align="center">{{$realisasi->perhitungan_d}}</td>
                            <td align="center">{{$realisasi->skp_d}}</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">5</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_ke}}" id="id_ke" name="id_ke">
                                <p id="lebel-k-e"></p>
                            </td>
                            <td align="center">{{$nilai->ake}}</td>
                            <td align="center">{{$nilai->kue}}</td>
                            <td align="center">{{$nilai->mute}}</td>
                            <td align="center">{{$nilai->timee}}</td>
                            <td align="center">{{$nilai->biayae}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center">{{$realisasi->rake}}</td>
                            <td align="center">{{$realisasi->rkue}} {{$realisasi->route}}</td>
                            <td align="center">{{$realisasi->rmute}}</td>
                            <td align="center">{{$realisasi->rtimee}} {{$realisasi->rtmde}}</td>
                            <td align="center">{{$realisasi->rbiayae}}</td>
                            <td align="center">{{$realisasi->perhitungan_e}}</td>
                            <td align="center">{{$realisasi->skp_e}}</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">6</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kf}}" id="id_kf" name="id_kf">
                                <p id="lebel-k-f"></p>
                            </td>
                            <td align="center">{{$nilai->akf}}</td>
                            <td align="center">{{$nilai->kuf}}</td>
                            <td align="center">{{$nilai->mutf}}</td>
                            <td align="center">{{$nilai->timef}}</td>
                            <td align="center">{{$nilai->biayaf}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center">{{$realisasi->rakf}}</td>
                            <td align="center">{{$realisasi->rkuf}} {{$realisasi->routf}}</td>
                            <td align="center">{{$realisasi->rmutf}}</td>
                            <td align="center">{{$realisasi->rtimef}} {{$realisasi->rtmdf}}</td>
                            <td align="center">{{$realisasi->rbiayaf}}</td>
                            <td align="center">{{$realisasi->perhitungan_f}}</td>
                            <td align="center">{{$realisasi->skp_f}}</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">7</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kg}}" id="id_kg" name="id_kg">
                                <p id="lebel-k-g"></p>
                            </td>
                            <td align="center">{{$nilai->akg}}</td>
                            <td align="center">{{$nilai->kug}}</td>
                            <td align="center">{{$nilai->mutg}}</td>
                            <td align="center">{{$nilai->timeg}}</td>
                            <td align="center">{{$nilai->biayag}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center">{{$realisasi->rakg}}</td>
                            <td align="center">{{$realisasi->rkug}} {{$realisasi->routg}}</td>
                            <td align="center">{{$realisasi->rmutg}}</td>
                            <td align="center">{{$realisasi->rtimeg}} {{$realisasi->rtmdg}}</td>
                            <td align="center">{{$realisasi->rbiayag}}</td>
                            <td align="center">{{$realisasi->perhitungan_g}}</td>
                            <td align="center">{{$realisasi->skp_g}}</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">8</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kh}}" id="id_kh" name="id_kh">
                                <p id="lebel-k-h"></p>
                            </td>
                            <td align="center">{{$nilai->akh}}</td>
                            <td align="center">{{$nilai->kuh}}</td>
                            <td align="center">{{$nilai->muth}}</td>
                            <td align="center">{{$nilai->timeh}}</td>
                            <td align="center">{{$nilai->biayah}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center">{{$realisasi->rakh}}</td>
                            <td align="center">{{$realisasi->rkuh}} {{$realisasi->routh}}</td>
                            <td align="center">{{$realisasi->rmuth}}</td>
                            <td align="center">{{$realisasi->rtimeh}} {{$realisasi->rtmdh}}</td>
                            <td align="center">{{$realisasi->rbiayah}}</td>
                            <td align="center">{{$realisasi->perhitungan_h}}</td>
                            <td align="center">{{$realisasi->skp_h}}</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">9</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_ki}}" id="id_ki" name="id_ki">
                                <p id="lebel-k-i"></p>
                            </td>
                            <td align="center">{{$nilai->aki}}</td>
                            <td align="center">{{$nilai->kui}}</td>
                            <td align="center">{{$nilai->muti}}</td>
                            <td align="center">{{$nilai->timei}}</td>
                            <td align="center">{{$nilai->biayai}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center">{{$realisasi->raki}}</td>
                            <td align="center">{{$realisasi->rkui}} {{$realisasi->routi}}</td>
                            <td align="center">{{$realisasi->rmuti}}</td>
                            <td align="center">{{$realisasi->rtimei}} {{$realisasi->rtmdi}}</td>
                            <td align="center">{{$realisasi->rbiayai}}</td>
                            <td align="center">{{$realisasi->perhitungan_i}}</td>
                            <td align="center">{{$realisasi->skp_i}}</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">10</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kj}}" id="id_kj" name="id_kj">
                                <p id="lebel-k-j"></p>
                            </td>
                            <td align="center">{{$nilai->akj}}</td>
                            <td align="center">{{$nilai->kuj}}</td>
                            <td align="center">{{$nilai->mutj}}</td>
                            <td align="center">{{$nilai->timej}}</td>
                            <td align="center">{{$nilai->biayaj}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center">{{$realisasi->rakj}}</td>
                            <td align="center">{{$realisasi->rkuj}} {{$realisasi->routj}}</td>
                            <td align="center">{{$realisasi->rmutj}}</td>
                            <td align="center">{{$realisasi->rtimej}} {{$realisasi->rtmdj}}</td>
                            <td align="center">{{$realisasi->rbiayaj}}</td>
                            <td align="center">{{$realisasi->perhitungan_j}}</td>
                            <td align="center">{{$realisasi->skp_j}}</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">11</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kk}}" id="id_kk" name="id_kk">
                                <p id="lebel-k-k"></p>
                            </td>
                            <td align="center">{{$nilai->akk}}</td>
                            <td align="center">{{$nilai->kuk}}</td>
                            <td align="center">{{$nilai->mutk}}</td>
                            <td align="center">{{$nilai->timek}}</td>
                            <td align="center">{{$nilai->biayak}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center">{{$realisasi->rakk}}</td>
                            <td align="center">{{$realisasi->rkuk}} {{$realisasi->routk}}</td>
                            <td align="center">{{$realisasi->rmutk}}</td>
                            <td align="center">{{$realisasi->rtimek}} {{$realisasi->rtmdk}}</td>
                            <td align="center">{{$realisasi->rbiayak}}</td>
                            <td align="center">{{$realisasi->perhitungan_k}}</td>
                            <td align="center">{{$realisasi->skp_k}}</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">12</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kl}}" id="id_kl" name="id_kl">
                                <p id="lebel-k-l"></p>
                            </td>
                            <td align="center">{{$nilai->akl}}</td>
                            <td align="center">{{$nilai->kul}}</td>
                            <td align="center">{{$nilai->mutl}}</td>
                            <td align="center">{{$nilai->timel}}</td>
                            <td align="center">{{$nilai->biayal}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center">{{$realisasi->rakl}}</td>
                            <td align="center">{{$realisasi->rkul}} {{$realisasi->routl}}</td>
                            <td align="center">{{$realisasi->rmutl}}</td>
                            <td align="center">{{$realisasi->rtimel}} {{$realisasi->rtmdl}}</td>
                            <td align="center">{{$realisasi->rbiayal}}</td>
                            <td align="center">{{$realisasi->perhitungan_l}}</td>
                            <td align="center">{{$realisasi->skp_l}}</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">13</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_km}}" id="id_km" name="id_km">
                                <p id="lebel-k-m"></p>
                            </td>
                            <td align="center">{{$nilai->akm}}</td>
                            <td align="center">{{$nilai->kum}}</td>
                            <td align="center">{{$nilai->mutm}}</td>
                            <td align="center">{{$nilai->timem}}</td>
                            <td align="center">{{$nilai->biayam}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center">{{$realisasi->rakm}}</td>
                            <td align="center">{{$realisasi->rkum}} {{$realisasi->routm}}</td>
                            <td align="center">{{$realisasi->rmutm}}</td>
                            <td align="center">{{$realisasi->rtimem}} {{$realisasi->rtmdm}}</td>
                            <td align="center">{{$realisasi->rbiayam}}</td>
                            <td align="center">{{$realisasi->perhitungan_m}}</td>
                            <td align="center">{{$realisasi->skp_m}}</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">14</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kn}}" id="id_kn" name="id_kn">
                                <p id="lebel-k-n"></p>
                            </td>
                            <td align="center">{{$nilai->akn}}</td>
                            <td align="center">{{$nilai->kun}}</td>
                            <td align="center">{{$nilai->mutn}}</td>
                            <td align="center">{{$nilai->timen}}</td>
                            <td align="center">{{$nilai->biayan}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center">{{$realisasi->rakn}}</td>
                            <td align="center">{{$realisasi->rkun}} {{$realisasi->routn}}</td>
                            <td align="center">{{$realisasi->rmutn}}</td>
                            <td align="center">{{$realisasi->rtimen}} {{$realisasi->rtmdn}}</td>
                            <td align="center">{{$realisasi->rbiayan}}</td>
                            <td align="center">{{$realisasi->perhitungan_n}}</td>
                            <td align="center">{{$realisasi->skp_n}}</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">15</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_ko}}" id="id_ko" name="id_ko">
                                <p id="lebel-k-o"></p>
                            </td>
                            <td align="center">{{$nilai->ako}}</td>
                            <td align="center">{{$nilai->kuo}}</td>
                            <td align="center">{{$nilai->muto}}</td>
                            <td align="center">{{$nilai->timeo}}</td>
                            <td align="center">{{$nilai->biayao}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center">{{$realisasi->rako}}</td>
                            <td align="center">{{$realisasi->rkuo}} {{$realisasi->routo}}</td>
                            <td align="center">{{$realisasi->rmuto}}</td>
                            <td align="center">{{$realisasi->rtimeo}} {{$realisasi->rtmdo}}</td>
                            <td align="center">{{$realisasi->rbiayao}}</td>
                            <td align="center">{{$realisasi->perhitungan_o}}</td>
                            <td align="center">{{$realisasi->skp_o}}</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">16</td>
                            <td align="center" colspan="2">
                            <input type="hidden" value="{{$nilai->id_kp}}" id="id_kp" name="id_kp">
                                <p id="lebel-k-p"></p>
                            </td>
                            <td align="center">{{$nilai->akp}}</td>
                            <td align="center">{{$nilai->kup}}</td>
                            <td align="center">{{$nilai->mutp}}</td>
                            <td align="center">{{$nilai->timep}}</td>
                            <td align="center">{{$nilai->biayap}}</td>
                            
                            <!-- REALISASI -->
                            <td align="center">{{$realisasi->rakp}}</td>
                            <td align="center">{{$realisasi->rkup}} {{$realisasi->routp}}</td>
                            <td align="center">{{$realisasi->rmutp}}</td>
                            <td align="center">{{$realisasi->rtimep}} {{$realisasi->rtmdp}}</td>
                            <td align="center">{{$realisasi->rbiayap}}</td>
                            <td align="center">{{$realisasi->perhitungan_p}}</td>
                            <td align="center">{{$realisasi->skp_p}}</td>
                        </tr>

                        <!-- TUGAS TAMBAHAN -->
                        <tr>
                            <td></td>
                            <td colspan="14" style="font-weight:bold">II. TUGAS TAMBAHAN DAN KREATIVITAS</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td colspan="2"></td>
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
                            <td colspan="2"></td>
                            <!-- input -->
                            <td></td> 
                            <td colspan="4"></td>
                            <!-- input -->
                            <td></td>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="2"></td>
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
                            <td colspan="2"></td>
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
                            <td rowspan="2" colspan="14" align="center" style="font-weight:bold">Nilai Capaian SKP</td>
                            <td>{{$realisasi->tnr}}<br> {{$realisasi->snr}}</td>                        
                        </tr>
                    </table>
            <br>
           <!-- <button type="submit" class="btn btn-primary col-md-12">Submit</button> -->
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
    

    var id_ka = $('#id_ka').val()
    $.get('/listkegiatan/'+ id_ka, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-a').text(data.nama_kegiatan)
    });
    
    var id_kb = $('#id_kb').val()
    $.get('/listkegiatan/'+ id_kb, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-b').text(data.nama_kegiatan)
    });

    var id_kc = $('#id_kc').val()
    $.get('/listkegiatan/'+ id_kc, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-c').text(data.nama_kegiatan)
    });

    var id_kd = $('#id_kd').val()
    $.get('/listkegiatan/'+ id_kd, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-d').text(data.nama_kegiatan)
    });

    var id_ke = $('#id_ke').val()
    $.get('/listkegiatan/'+ id_ke, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-e').text(data.nama_kegiatan)
    });

    var id_kf = $('#id_kf').val()
    $.get('/listkegiatan/'+ id_kf, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-f').text(data.nama_kegiatan)
    });

    var id_kg = $('#id_kg').val()
    $.get('/listkegiatan/'+ id_kg, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-g').text(data.nama_kegiatan)
    });
    
    var id_kh = $('#id_kh').val()
    $.get('/listkegiatan/'+ id_kh, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-h').text(data.nama_kegiatan)
    });

    var id_ki = $('#id_ki').val()
    $.get('/listkegiatan/'+ id_ki, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-i').text(data.nama_kegiatan)
    });

    var id_kj = $('#id_kj').val()
    $.get('/listkegiatan/'+ id_kj, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-j').text(data.nama_kegiatan)
    });

    var id_kk = $('#id_kk').val()
    $.get('/listkegiatan/'+ id_kk, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-k').text(data.nama_kegiatan)
    });

    var id_kl = $('#id_kl').val()
    $.get('/listkegiatan/'+ id_kl, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-l').text(data.nama_kegiatan)
    });

    var id_km = $('#id_km').val()
    $.get('/listkegiatan/'+ id_km, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-m').text(data.nama_kegiatan)
    });

    var id_ko = $('#id_ko').val()
    $.get('/listkegiatan/'+ id_ko, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-o').text(data.nama_kegiatan)
    });

    var id_kn = $('#id_kn').val()
    $.get('/listkegiatan/'+ id_kn, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-n').text(data.nama_kegiatan)
    });

    var id_kp = $('#id_kp').val()
    $.get('/listkegiatan/'+ id_kp, function (data) {
        console.log(data.nama_kegiatan);
            $('#lebel-k-p').text(data.nama_kegiatan)
    });


});

</script>
@endpush