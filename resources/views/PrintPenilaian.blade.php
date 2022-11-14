@extends('layout')

@section('container')
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Detail Penilaian Prestasi Kerja</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
      <li class="breadcrumb-item active">Detail Penilaian Prestasi Kerja</li>
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
            <a href="/pdfpenilaiankerja/{{$skp->id_data_skp}}" target="_blank" class="btn btn-primary col-md-1 wb-download"> PDF</a>   
            </div>
            <br>
            <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title" style="text-align:center">PENILAIAN PRESTASI KERJA <br> PEGAWAI UNMUS</h3>

            </div>
            <div class="panel-body container-fluid">
            <table style="">
                <tr>
                    <td>KEMENTERIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI <br> UNIVERSITAS MUSAMUS</td>
                    <td>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    </td>
                    <td style="text-align:right">JANGKA WAKTU PENILAIAN <br> {{$skp->semester}} {{$skp->tahun}} </td>                  
                </tr>
            </table>
            <br>
    <form action="/" method="post">
    @csrf   
            <table border="1" class="table table-striped table-bordered">
            <!-- <table border="1" style="margin: 10px 50px 0 275px"> -->
                <tr>
                    <td style=" text-align: center;">1</td>
                    <td colspan="4" >YANG DINILAI</td>
                </tr>
                <tr>
                    <td rowspan="5"></td>
                    <input type="hidden" value="{{$skp->id_dinilai}}" id="id_dinilai">
                    <td>a. NAMA</td>
                    <td colspan="3" id="nama-dinilai"></td>
                </tr>
                <tr>
                    <td>b. NIP</td>
                    <td colspan="3" id="nip-dinilai"></td>
                </tr>
                <tr>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td colspan="3" id="pangkat-dinilai"></td>
                </tr>
                <tr>
                    <td>d. Jabatan</td>
                    <td colspan="3" id="jabatan-dinilai"></td>
                </tr>
                <tr>
                    <td>e. Unit Kerja</td>
                    <td colspan="3" id="unit-dinilai"></td>
                </tr>

                <!-- PEJABAT PENILAI -->
                <tr>
                    <td style=" text-align: center;">2</td>
                    <td colspan="4" >PEJABAT PENILAI</td>
                </tr>
                <tr>
                    <td rowspan="5"></td>
                    <input type="hidden" value="{{$skp->id_penilai}}" id="id_penilai">
                    <td>a. NAMA</td>
                    <td colspan="3" id="nama-penilai"></td>
                </tr>
                <tr>
                    <td>b. NIP/NIK</td>
                    <td colspan="3" id="nip-penilai"></td>
                </tr>
                <tr>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td colspan="3" id="pangkat-penilai"></td>
                </tr>
                <tr>
                    <td>d. Jabatan</td>
                    <td colspan="3" id="jabatan-penilai"></td>
                </tr>
                <tr>
                    <td>e. Unit Kerja</td>
                    <td colspan="3" id="unit-penilai"></td>
                </tr>
                <tr>
                    <td style=" text-align: center;">3</td>
                    <td colspan="4" >ATASAN PEJABAT PENILAI</td>
                </tr>
                <tr>
                    <td rowspan="5"></td>
                    <input type="hidden" value="{{$skp->id_app}}" id="id_app">
                    <td>a. NAMA</td>
                    <td colspan="3" id="nama-app"></td>
                </tr>
                <tr>
                    <td>b. NIP/NIK</td>
                    <td colspan="3" id="nip-app"></td>
                </tr>
                <tr>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td colspan="3" id="pangkat-app"></td>
                </tr>
                <tr>
                    <td>d. Jabatan</td>
                    <td colspan="3" id="jabatan-app"></td>
                </tr>
                <tr>
                    <td>e. Unit Kerja</td>
                    <td colspan="3" id="unit-app"></td>
                </tr>

                <!-- UNSUR YANG DINILAI -->
                <tr>
                    <td style=" text-align: center;">4</td>
                    <td colspan="3" >UNSUR YANG DINILAI</td>
                    <td>JUMLAH</td>
                </tr>
                <tr>
                    <td colspan="2" >a. Sasaran Kerja Pegawai (SKP)</td>
                    <td style="text-align:right"> {{$nilai_r->tnr}} </td>
                    <input type="hidden" id="tnr" value="{{$nilai_r->tnr}}">
                    <td>x 60%</td>
                    <td id="labal-tnr"></td>
                </tr>
                <tr>
                    <td rowspan="10" style="text-align:center">b. Perilaku Kerja</td>
                </tr>
                <tr>
                    <td>1. Orientasi Pelayanan</td>
                    <td style="text-align:center">{{$perilaku->n_op}}</td>
                    <td style="text-align:center">{{$perilaku->s_op}}</td>
                    <td rowspan="8"></td>
                </tr>
                <tr>
                    <td>2. Integritas</td>
                    <td style="text-align:center">{{$perilaku->n_i}}</td>
                    <td style="text-align:center">{{$perilaku->s_i}}</td>
                </tr>
                <tr>
                    <td>3. Komitmen</td>
                    <<td style="text-align:center">{{$perilaku->n_k}}</td>
                    <td style="text-align:center">{{$perilaku->s_k}}</td>
                </tr>
                <tr>
                    <td>4. Disiplin</td>
                    <td style="text-align:center">{{$perilaku->n_d}}</td>
                    <td style="text-align:center">{{$perilaku->s_d}}</td>
                </tr>
                <tr>
                    <td>5. Kerjasama</td>
                    <td style="text-align:center">{{$perilaku->n_ks}}</td>
                    <td style="text-align:center">{{$perilaku->s_ks}}</td>
                </tr>
                <tr>
                    <td>6. Kepemimpinan</td>
                    <td style="text-align:center">{{$perilaku->n_kp}}</td>
                    <td style="text-align:center">{{$perilaku->s_kp}}</td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td style="text-align:center">{{$perilaku->n_jml}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nilai Rata-rata</td>
                    <input type="hidden" id="n_rr" value="{{$perilaku->n_rr}}">
                    <td style="text-align:center">{{$perilaku->n_rr}}</td>
                    <td style="text-align:center">{{$perilaku->s_rr}}</td>
                </tr>
                <tr>
                    <td>Nilai Perilaku Kerja</td>
                    <td  style="text-align:right">{{$perilaku->n_rr}}</td>
                    <td>x 40%</td>
                    <td style="text-align:center" id="nilai_perilaku"></td>
                </tr>
                <tr>
                    <td colspan="4" rowspan="2" style="text-align:center">NILAI PRESTASI KERJA</td>
                    <td style="text-align:center" id="nilai_prestasi">NILAI</td>
                </tr>
                <tr>
                    <td style="text-align:center" id="label_prestasi"></td>
                </tr>
                <tr>
                    <td colspan="5">5. KEBERATAN DARI PEGAWAI NEGERI SIPIL
                        <br>&nbsp; &nbsp;&nbsp;YANG DINILAI (APABILA ADA)
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>      
                        <p style="text-align:right">Tanggal..........................</p>
                    </td>          
                </tr>
                <tr>
                    <td colspan="5">6. TANGGAPAN PEJABAT PENILAI ATAS KEBERATAN
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>      
                        <p style="text-align:right">Tanggal..........................</p>
                    </td>          
                </tr>
                <tr>
                    <td colspan="5">7. KEPUTUSAN ATASAN PEJABAT PENILAI ATAS
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>      
                        <p style="text-align:right">Tanggal..........................</p>
                    </td>          
                </tr>
                <tr>
                    <td colspan="5">8. REKOMENDASI
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>      
                    </td>          
                </tr>
                <tr>
                    <td colspan="5" style="text-align:right">9. DIBUAT TANGGAL,   JANUARI 2016
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p style="text-align:right" id="nama-pp"></p>  
                        <p style="text-align:right" id="nip-pp"></p>         
                    </td>
                </tr>
                <tr>       
                    <td colspan="5" style="text-align:left">10. DITERIMA TANGGAL,   JANUARI 2016					
                        <br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PEGAWAI NEGERI SIPIL YANG
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DINILAI,				
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p style="text-align:left" id="nama-dn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>  
                        <p style="text-align:left" id="nip-dn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>         
                    </td> 
                </tr>
                <tr>       
                    <td colspan="5" style="text-align:right">11. DITERIMA TANGGAL,   JANUARI 2016					
                        <br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ATASAN PEJABAT YANG MENILAI				
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p style="text-align:right" id="nama-ap"></p>  
                        <p style="text-align:right" id="nip-ap"></p>         
                    </td> 
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
    
    var buruk = 50
    var sedang = 60
    var cukup = 75  
    var baik = 90.99
    var good = 91

    var id = $('#id_dinilai').val()
    console.log(id);
    $.get('/skpform/'+ id, function (data) {
        $('#nama-dinilai').text(data[0].nama_pegawai)
        $('#nip-dinilai').text(data[0].nip_pegawai)
        $('#pangkat-dinilai').text(data[0].jenis_pangkat_golongan)
        $('#jabatan-dinilai').text(data[0].jenis_jabatan)
        $('#unit-dinilai').text(data[0].nama_units_kerja)
        $('#nama-dn').text(data[0].nama_pegawai);
        $('#nip-dn').text(data[0].nip_pegawai)
    });

    
    var id_penilai = $('#id_penilai').val()
    console.log(id_penilai);
    $.get('/skpform/'+ id_penilai, function (data) {
        $('#nama-penilai').text(data[0].nama_pegawai);
        $('#nip-penilai').text(data[0].nip_pegawai)
        $('#pangkat-penilai').text(data[0].jenis_pangkat_golongan)
        $('#jabatan-penilai').text(data[0].jenis_jabatan)
        $('#unit-penilai').text(data[0].nama_units_kerja)
        $('#nama-pp').text(data[0].nama_pegawai);
        $('#nip-pp').text(data[0].nip_pegawai)
    });

    
    var id_app = $('#id_app').val()
    console.log(id_app);
    $.get('/skpform/'+ id_app, function (data) {
        $('#nama-app').text(data[0].nama_pegawai);
        $('#nip-app').text(data[0].nip_pegawai)
        $('#pangkat-app').text(data[0].jenis_pangkat_golongan)
        $('#jabatan-app').text(data[0].jenis_jabatan)
        $('#unit-app').text(data[0].nama_units_kerja)
        $('#nama-ap').text(data[0].nama_pegawai);
        $('#nip-ap').text(data[0].nip_pegawai)
    });
    
    var nilai_tnr = $('#tnr').val() * 1
    var total = nilai_tnr * 0.6
    $('#labal-tnr').text(total.toFixed(2));

    var nilai_rr = $('#n_rr').val() * 1
    var nilai_perilaku = nilai_rr * 0.4
    $('#nilai_perilaku').text(nilai_perilaku.toFixed(2));

    var nilai_prestasi = total + nilai_perilaku
    $('#nilai_prestasi').text(nilai_prestasi.toFixed(2));

    
    if(nilai_prestasi <= buruk){
        $('#label_prestasi').text("Buruk");
    }
    else if(nilai_prestasi <= sedang){
        $('#label_prestasi').text("Sedang");
    }
    else if (nilai_prestasi <= cukup){
        $('#label_prestasi').text("Cukup");
    }
    else if (nilai_prestasi <= baik){
        $('#label_prestasi').text("Baik");
    }
    else if (nilai_prestasi >= good){
        $('#label_prestasi').text("Sangat Baik");
    }
    else{
        $('#label_prestasi').text("");
    }


  });
</script>
@endpush