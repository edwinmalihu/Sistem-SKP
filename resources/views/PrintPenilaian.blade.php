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
                <a href="" class="btn btn-primary col-md-1 wb-download">PDF</a>  
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
                    <td style="text-align:right">JANGKA WAKTU PENILAIAN <br> GET JANGKA WAKTU </td>                  
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
                    <td>a. NAMA</td>
                    <td colspan="3">Nama Dosen</td>
                </tr>
                <tr>
                    <td>b. NIK</td>
                    <td colspan="3">NIK Dosen</td>
                </tr>
                <tr>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td colspan="3">Pangkat/Gol Dosen</td>
                </tr>
                <tr>
                    <td>d. Jabatan</td>
                    <td colspan="3">Jabatan Dosen</td>
                </tr>
                <tr>
                    <td>e. Unit Kerja</td>
                    <td colspan="3">Unit Kerja Dosen</td>
                </tr>

                <!-- PEJABAT PENILAI -->
                <tr>
                    <td style=" text-align: center;">2</td>
                    <td colspan="4" >PEJABAT PENILAI</td>
                </tr>
                <tr>
                    <td rowspan="5"></td>
                    <td>a. NAMA</td>
                    <td colspan="3">Nama Dosen</td>
                </tr>
                <tr>
                    <td>b. NIP/NIK</td>
                    <td colspan="3">NIK Dosen</td>
                </tr>
                <tr>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td colspan="3">Pangkat/Gol Dosen</td>
                </tr>
                <tr>
                    <td>d. Jabatan</td>
                    <td colspan="3">Jabatan Dosen</td>
                </tr>
                <tr>
                    <td>e. Unit Kerja</td>
                    <td colspan="3">Unit Kerja Dosen</td>
                </tr>
                <tr>
                    <td style=" text-align: center;">3</td>
                    <td colspan="4" >ATASAN PEJABAT PENILAI</td>
                </tr>
                <tr>
                    <td rowspan="5"></td>
                    <td>a. NAMA</td>
                    <td colspan="3">Nama Dosen</td>
                </tr>
                <tr>
                    <td>b. NIP/NIK</td>
                    <td colspan="3">NIK Dosen</td>
                </tr>
                <tr>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td colspan="3">Pangkat/Gol Dosen</td>
                </tr>
                <tr>
                    <td>d. Jabatan</td>
                    <td colspan="3">Jabatan Dosen</td>
                </tr>
                <tr>
                    <td>e. Unit Kerja</td>
                    <td colspan="3">Unit Kerja Dosen</td>
                </tr>

                <!-- UNSUR YANG DINILAI -->
                <tr>
                    <td style=" text-align: center;">4</td>
                    <td colspan="3" >UNSUR YANG DINILAI</td>
                    <td>JUMLAH</td>
                </tr>
                <tr>
                    <td colspan="2" >a. Sasaran Kerja Pegawai (SKP)</td>
                    <td style="text-align:right"> NILAI </td>
                    <td>x 60%</td>
                    <td>Nilai SKP * 0,06 </td>
                </tr>
                <tr>
                    <td rowspan="10" style="text-align:center">b. Perilaku Kerja</td>
                </tr>
                <tr>
                    <td>1. Orientasi Pelayanan</td>
                    <td style="text-align:center">NILAI</td>
                    <td style="text-align:center">(Baik)</td>
                    <td rowspan="8"></td>
                </tr>
                <tr>
                    <td>2. Integritas</td>
                    <td style="text-align:center">NILAI</td>
                    <td style="text-align:center">(Baik)</td>
                </tr>
                <tr>
                    <td>3. Komitmen</td>
                    <td style="text-align:center">NILAI</td>
                    <td style="text-align:center">(Baik)</td>
                </tr>
                <tr>
                    <td>4. Disiplin</td>
                    <td style="text-align:center">NILAI</td>
                    <td style="text-align:center">(Baik)</td>
                </tr>
                <tr>
                    <td>5. Kerjasama</td>
                    <td style="text-align:center">NILAI</td>
                    <td style="text-align:center">(Baik)</td>
                </tr>
                <tr>
                    <td>6. Kepemimpinan</td>
                    <td style="text-align:center">NILAI</td>
                    <td style="text-align:center">(Baik)</td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>NILAI</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nilai Rata-rata</td>
                    <td style="text-align:center">NILAI</td>
                    <td style="text-align:center">(Baik)</td>
                </tr>
                <tr>
                    <td>Nilai Perilaku Kerja</td>
                    <td  style="text-align:right">NILAI</td>
                    <td>x 40%</td>
                    <td style="text-align:center">NILAI PERILAKU KERJA * 0,04</td>
                </tr>
                <tr>
                    <td colspan="4" rowspan="2" style="text-align:center">NILAI PRESTASI KERJA</td>
                    <td style="text-align:center">NILAI</td>
                </tr>
                <tr>
                    <td style="text-align:center">(Sangat Baik)</td>
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
                        <p style="text-align:right">NAMA PEJABAT PENILAI</p>  
                        <p style="text-align:right">NIP PEJABAT PENILAI</p>         
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
                        <p style="text-align:left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAMA PNS DINILAI</p>  
                        <p style="text-align:left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIP PNS DINILAI</p>         
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
                        <p style="text-align:right">&nbsp;&nbsp;NAMA ATASAN PEJABAT YANG MENILAI	</p>  
                        <p style="text-align:right">&nbsp;&nbsp; NIP ATASAN PEJABAT YANG MENILAI	</p>         
                    </td> 
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

@endpush