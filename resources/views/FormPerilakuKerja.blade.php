@extends('layout')

@section('container')
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Form Perilaku Kerja</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
      <li class="breadcrumb-item active">Tambah Perilaku Kerja</li>
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
                <h3 class="panel-title" style="text-align:center">BUKU CATATAN PENILAIAN PERILAKU PEGAWAI UNMUS</h3>

            </div>
            <div class="panel-body container-fluid">
            <table style="">
                <tr>
                    <td>Nama</td>
                    <td> :</td>
                    <td>GET NAMA PEGAWAI</td>
                </tr>
                <tr>
                    <td>NIP/NIDN/NIK</td>
                    <td> :</td>
                    <td>GET NIP/NIK/NIDN PEGAWAI</td>
                </tr>
            </table>
            <br>
    <form action="/" method="post">
    @csrf
        <table border="1" class="table table-striped table-bordered">
            <tr>
                <td style="text-align:center">No.</td>
                <td style="text-align:center">Tanggal</td>
                <td style="text-align:center" colspan="4">Uraian</td>
                <td style="text-align:center">Nama/NIP dan Paraf<br>Pejabat Penilai</td>
            </tr>
            <tr>
                <td style="text-align:center">1</td>
                <td style="text-align:center">2</td>
                <td style="text-align:center"colspan="4">3</td>
                <td style="text-align:center">4</td>
            </tr>
            <!-- <tr>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align:center" rowspan="9">
                    Dekan Fakultas Teknik
                    <br>
                    <br>
                    <br>
                    <br>
                    NAMA DEKAN
                    <br>
                    NIP DEKAN
                </td> 
            </tr> -->
            <tr>
                <td style="text-align:center" rowspan="9">1</td>
                <td style="text-align:center" rowspan="9">Januari s/d Desember 2021 (GET JANGKA WAKTU)</td>
                <td colspan="4">
                    Penilaian SKP sampai dengan akhir Desember 2016 = GET NILAI 
                    NILAI DARI PERHITUNGAN VERTIKAL <br>
                    sedangkan penilaian perilaku kerjanya adalah <br>
                    sebagai berikut :
                </td>
                <td style="text-align:center" colspan="5" rowspan="9">
                <br><br><br><br><br><br><br><br><br><br>
                    GET JABATAN PEJABAT PENILAI Dekan Fakultas Teknik
                    <br><br><br><br>
                    GET NAMA PEJABAT PENILAI NAMA DEKAN
                    <br>
                    GET NIP PEJABAT PENILAI DEKAN
                </td> 
                <tr>
                    <td>Orientasi Pelayanan</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="" /></td>
                    <td>(BAIK)</td>
                </tr>
                <tr>
                    <td>Integritas</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="" /></td>
                    <td>(BAIK)</td>
                </tr>
                <tr>
                    <td>Komitmen</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="" /></td>
                    <td>(BAIK)</td>
                </tr>
                <tr>
                    <td>Disiplin</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="" /></td>
                    <td>(BAIK)</td>
                </tr>
                <tr>
                    <td>Kerjasama</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="" /></td>
                    <td>(BAIK)</td>
                </tr>
                <tr>
                    <td>Kepemimpinan</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="" /></td>
                    <td>(BAIK)</td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="" /></td>
                    <td>(BAIK)</td>
                </tr>
                <tr>
                    <td>Nilai Rata-rata</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="" /></td>
                    <td>(BAIK)</td>
                </tr>
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