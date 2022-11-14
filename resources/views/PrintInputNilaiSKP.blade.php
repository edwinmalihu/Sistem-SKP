@extends('layout')

@section('container')
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Detail Nilai SKP</h1>
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
        <a href="/pdf-nilai-skp/{{$skp->id_data_skp}}" target="_blank" class="btn btn-primary col-md-1 wb-print"> PRINT</a>   
        </div>
        <br>
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title" style="text-align:center">FORMULIR SASARAN KERJA </br> PEGAWAI UNMUS</h3>
        </div>

          <div class="panel-body container-fluid">
            <table border="1" class="table table-striped table-bordered">
                <tr>
                    <td style="font-weight:bold">NO</td>
                    <td colspan="2" style="font-weight:bold">I. NAMA PEJABAT PENILAI</td>
                    <td style="font-weight:bold; text-align:center">NO</td>
                    <td colspan="6" style="font-weight:bold">II. PEGAWAI NEGERI SIPIL YANG DINILAI</td>
                </tr>
                <tr>
                    <td align="center">1</td>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" id="id_penilai" value="{{$skp->id_penilai}}" name="id_penilai">
                        <p id="label-nape"></p>
                    </td>
                    <td align="center">1</td>
                    <td>Nama</td>
                    <td colspan="4">
                        <input type="hidden" id="id_dinilai" value="{{$skp->id_dinilai}}" name="id_dinilai">
                        <p id="label-nad"></p>
                    </td>
                </tr>
                <tr>
                    <td align="center">2</td>
                    <td>NIP</td>
                    <td id="label-nip-penilai"></td>
                    <td align="center">2</td>
                    <td>NIP</td>
                    <td colspan="4" id="label-nip"></td>
                </tr>
                <tr>
                    <td align="center">3</td>
                    <td>Pangkat/Gol</td>
                    <td id="label-id-gope"></td>
                    <td align="center">3</td>
                    <td>Pangkat/Gol</td>
                    <td colspan="4" id="label-golongan"></td>
                </tr>
                <tr>
                    <td align="center">4</td>
                    <td>Jabatan</td>
                    <td id="label-id-jape"></td>
                    <td align="center">4</td>
                    <td>Jabatan</td>
                    <td colspan="4" id="label-jabatan"></td>
                </tr>
                <tr>
                    <td align="center">5</td>
                    <td>Unit Kerja</td>
                    <td id="label-id-upe"></td>
                    <td align="center">5</td>
                    <td>Unit Kerja</td>
                    <td colspan="4" id="label-unit"></td>
                </tr>
                <tr>
                    <td rowspan="2" style="font-weight:bold; text-align:center"></br>NO</td>
                    <td rowspan="2" colspan="2" style="font-weight:bold; text-align:center"></br>III. KEGIATAN TUGAS JABATAN</td>
                    <td rowspan="2" style="font-weight:bold; text-align:center"></br>AK</td>
                    <td colspan="6" align="center" style="font-weight:bold">TARGET</td>
                </tr>
                <tr>
                    <td style="font-weight:bold; text-align:center">KUANT/OUTPUT</td>
                    <td style="font-weight:bold; text-align:center">KUAL/MUTU</td>
                    <td style="font-weight:bold; text-align:center">WAKTU</td>
                    <td style="font-weight:bold; text-align:center">BIAYA</td>
                </tr>
                <!-- <tr>
                    <td align="center">1</td>
                    <td align="center" colspan="2">2</td>
                    <td align="center">3</td>
                    <td align="center">4</td>
                    <td align="center">5</td>
                    <td align="center">6</td>
                    <td align="center">7</td>
                </tr> -->
                <tr>
                    <td align="center">1</td>
                    <td align="center" colspan="2">
                        <input type="hidden" value="{{$nilai->id_ka}}" id="id_ka">
                        <p id="lebel-k-a"></p>
                    </td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->aka}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->kua}}" /><input type="text" class="form-control" value="{{$nilai->outa}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->muta}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->timea}}" /><input type="text" class="form-control" value="{{$nilai->tmda}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->biayaa}}" /></td>
                </tr>
                <tr>
                    <td align="center">2</td>
                    <td align="center" colspan="2">
                       <input type="hidden" value="{{$nilai->id_kb}}" id="id_kb">
                       <p id="label-k-b"></p>
                    </td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->akb}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->kub}}" /><input type="text" class="form-control" value="{{$nilai->outb}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->mutb}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->timeb}}" /><input type="text" class="form-control" value="{{$nilai->tmdb}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->biayab}}" /></td>
                </tr>
                <tr>
                    <td align="center">3</td>
                    <td align="center" colspan="2">
                    <input type="hidden" value="{{$nilai->id_kc}}" id="id_kc">
                       <p id="label-k-c"></p>
                    </td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->akc}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->kuc}}" /><input type="text" class="form-control" value="{{$nilai->outc}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->mutc}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->timec}}" /><input type="text" class="form-control" value="{{$nilai->tmdc}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->biayac}}" /></td>
                </tr>
                <tr>
                    <td align="center">4</td>
                    <td align="center" colspan="2">
                    <input type="hidden" value="{{$nilai->id_kd}}" id="id_kd">
                       <p id="label-k-d"></p>
                    </td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->akd}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->kud}}" /><input type="text" class="form-control" value="{{$nilai->outd}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->mutd}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->timed}}" /><input type="text" class="form-control" value="{{$nilai->tmdd}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->biayad}}" /></td>
                </tr>
                <tr>
                    <td align="center">5</td>
                    <td align="center" colspan="2">
                    <input type="hidden" value="{{$nilai->id_ke}}" id="id_ke">
                       <p id="label-k-e"></p>
                    </td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->ake}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->kue}}" /><input type="text" class="form-control" value="{{$nilai->oute}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->mute}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->timee}}" /><input type="text" class="form-control" value="{{$nilai->tmde}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->biayae}}" /></td>
                </tr>
                <tr>
                    <td align="center">6</td>
                    <td align="center" colspan="2">
                    <input type="hidden" value="{{$nilai->id_kf}}" id="id_kf">
                       <p id="label-k-f"></p>
                    </td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->akf}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->kuf}}" /><input type="text" class="form-control" value="{{$nilai->outf}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->mutf}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->timef}}" /><input type="text" class="form-control" value="{{$nilai->tmdf}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->biayaf}}" /></td>
                </tr>
                <tr>
                    <td align="center">7</td>
                    <td align="center" colspan="2">
                    <input type="hidden" value="{{$nilai->id_kg}}" id="id_kg">
                       <p id="label-k-g"></p>
                    </td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->akg}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->kug}}" /><input type="text" class="form-control" value="{{$nilai->outg}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->mutg}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->timeg}}" /><input type="text" class="form-control" value="{{$nilai->tmdg}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->biayag}}" /></td>
                </tr>
                <tr>
                    <td align="center">8</td>
                    <td align="center" colspan="2">
                    <input type="hidden" value="{{$nilai->id_kh}}" id="id_kh">
                       <p id="label-k-h"></p>
                    </td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->akh}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->kuh}}" /><input type="text" class="form-control" value="{{$nilai->outh}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->muth}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->timeh}}" /><input type="text" class="form-control" value="{{$nilai->tmdh}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->biayah}}" /></td>
                </tr>
                <tr>
                    <td align="center">9</td>
                    <td align="center" colspan="2">
                    <input type="hidden" value="{{$nilai->id_ki}}" id="id_ki">
                       <p id="label-k-i"></p>
                    </td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->aki}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->kui}}" /><input type="text" class="form-control" value="{{$nilai->outi}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->muti}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->timei}}" /><input type="text" class="form-control" value="{{$nilai->tmdi}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->biayai}}" /></td>
                </tr>
                <tr>
                    <td align="center">10</td>
                    <td align="center" colspan="2">
                    <input type="hidden" value="{{$nilai->id_kj}}" id="id_kj">
                       <p id="label-k-j"></p>
                    </td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->akj}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->kuj}}" /><input type="text" class="form-control" value="{{$nilai->outj}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->mutj}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->timej}}" /><input type="text" class="form-control" value="{{$nilai->tmdj}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->biayaj}}" /></td>
                </tr>
                <tr>
                    <td align="center">11</td>
                    <td align="center" colspan="2">
                    <input type="hidden" value="{{$nilai->id_kk}}" id="id_kk">
                       <p id="label-k-k"></p>
                    </td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->akk}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->kuk}}" /><input type="text" class="form-control" value="{{$nilai->outk}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->mutk}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->timek}}" /><input type="text" class="form-control" value="{{$nilai->tmdk}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->biayak}}" /></td>
                </tr>
                <tr>
                    <td align="center"></td>
                    <td align="center" colspan="2" style="font-weight:bold">II. PELAKSANAAN PENELITIAN</td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                </tr>
                <tr>
                    <td align="center">12</td>
                    <td align="center" colspan="2">
                    <input type="hidden" value="{{$nilai->id_kl}}" id="id_kl">
                       <p id="label-k-l"></p>
                    </td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->akl}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->kul}}" /><input type="text" class="form-control" value="{{$nilai->outl}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->mutl}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->timel}}" /><input type="text" class="form-control" value="{{$nilai->tmdl}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->biayal}}" /></td>
                </tr>
                <tr>
                    <td align="center">13</td>
                    <td align="center" colspan="2">
                    <input type="hidden" value="{{$nilai->id_km}}" id="id_km">
                       <p id="label-k-m"></p>
                    </td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->akm}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->kum}}" /><input type="text" class="form-control" value="{{$nilai->outm}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->mutm}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->timem}}" /><input type="text" class="form-control" value="{{$nilai->tmdm}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->biayam}}" /></td>
                </tr>
                <tr>
                    <td align="center"></td>
                    <td align="center" colspan="2" style="font-weight:bold;">III. PELAKSANAAN PENGABDIAN KEPADA MASYARAKAT</td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                </tr>
                <tr>
                    <td align="center">14</td>
                    <td align="center" colspan="2">
                    <input type="hidden" value="{{$nilai->id_kn}}" id="id_kn">
                       <p id="label-k-n"></p>
                    </td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->akn}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->kun}}" /><input type="text" class="form-control" value="{{$nilai->outn}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->mutn}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->timen}}" /><input type="text" class="form-control" value="{{$nilai->tmdn}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->biayan}}" /></td>
                </tr>
                <tr>
                    <td align="center">15</td>
                    <td align="center" colspan="2">
                    <input type="hidden" value="{{$nilai->id_ko}}" id="id_ko">
                       <p id="label-k-o"></p>
                    </td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->ako}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->kuo}}" /><input type="text" class="form-control" value="{{$nilai->auto}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->muto}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->timeo}}" /><input type="text" class="form-control" value="{{$nilai->tmdo}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->biayao}}" /></td>
                </tr>
                <tr>
                    <td align="center">16</td>
                    <td align="center" colspan="2">
                    <input type="hidden" value="{{$nilai->id_kp}}" id="id_kp">
                       <p id="label-k-p"></p>
                    </td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->akp}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->kup}}" /><input type="text" class="form-control" value="{{$nilai->autp}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->mutp}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->timep}}" /><input type="text" class="form-control" value="{{$nilai->tmdp}}" /></td>
                    <td align="center"><input type="text" class="form-control" value="{{$nilai->biayap}}" /></td>
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
    
      var id = $('#id_dinilai').attr('value')
      $.get('/skpform/'+ id, function (data) {
            $('#label-nip').text(data[0].nip_pegawai)
            $('#label-nad').text(data[0].nama_pegawai)
            $('#label-golongan').text(data[0].jenis_pangkat_golongan)
            $('#label-jabatan').text(data[0].jenis_jabatan)
            $('#label-unit').text(data[0].nama_units_kerja)
          });


    
      var id_penilai = $('#id_penilai').attr('value')
    //   console.log(id_penilai);
      $.get('/skpform/'+ id_penilai, function (data) {
            $('#label-nape').text(data[0].nama_pegawai)
            $('#label-nip-penilai').text(data[0].nip_pegawai)
            $('#label-id-gope').text(data[0].jenis_pangkat_golongan)
            $('#label-id-jape').text(data[0].jenis_jabatan)
            $('#label-id-upe').text(data[0].nama_units_kerja)
          });

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

});
</script>
@endpush