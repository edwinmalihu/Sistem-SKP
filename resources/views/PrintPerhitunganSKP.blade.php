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
          <h5>{{$periode->periode}} {{$periode->tahun}}</h5>
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
                            <td align="center">{{$realisasi->rkua}}</td>
                            <td align="center">{{$realisasi->routa}}</td>
                            <td align="center">{{$realisasi->rmuta}}</td>
                            <td align="center">{{$realisasi->rtimea}}</td>
                            <td align="center">{{$realisasi->rtmda}}</td>
                            <td align="center">{{$realisasi->rbiayaa}}</td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">2</td>
                            <td align="center" colspan="2"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            
                            <!-- REALISASI -->
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">3</td>
                            <td align="center" colspan="2"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            
                            <!-- REALISASI -->
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">4</td>
                            <td align="center" colspan="2"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            
                            <!-- REALISASI -->
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">5</td>
                            <td align="center" colspan="2"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            
                            <!-- REALISASI -->
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">6</td>
                            <td align="center" colspan="2"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            
                            <!-- REALISASI -->
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">7</td>
                            <td align="center" colspan="2"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            
                            <!-- REALISASI -->
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">8</td>
                            <td align="center" colspan="2"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            
                            <!-- REALISASI -->
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">9</td>
                            <td align="center" colspan="2"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            
                            <!-- REALISASI -->
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">10</td>
                            <td align="center" colspan="2"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            
                            <!-- REALISASI -->
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">11</td>
                            <td align="center" colspan="2"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            
                            <!-- REALISASI -->
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">12</td>
                            <td align="center" colspan="2"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            
                            <!-- REALISASI -->
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">13</td>
                            <td align="center" colspan="2"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            
                            <!-- REALISASI -->
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">14</td>
                            <td align="center" colspan="2"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            
                            <!-- REALISASI -->
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">15</td>
                            <td align="center" colspan="2"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            
                            <!-- REALISASI -->
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <!-- TARGET -->
                            <td align="center">16</td>
                            <td align="center" colspan="2"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            
                            <!-- REALISASI -->
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
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
                            <td></td>
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


});

</script>
@endpush