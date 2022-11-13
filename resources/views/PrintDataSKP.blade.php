@extends('layout')

@section('container')
<!-- Page -->
<div class="page">

  <div class="page-content container-fluid">
    <div class="row">
      
    <div class="col-md-12">
        <!-- Panel Floating Labels -->

        <div class="text-right">
          
          <a href="/pdfdataskp/{{$data[0]->id_data_skp}}" class="btn btn-primary col-md-1 wb-download">PDF </a>
        </div>
        <br>

        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title" style="text-align:center">DATA SASARAN KERJA PEGAWAI</h3>
          </div>
          <div class="panel-body container-fluid">
            <table border="1" class="table table-striped table-bordered">
                <tr>
                    <td style="font-weight:bold; text-align: center;">1</td>
                    <td colspan="3" style="font-weight:bold">YANG DINILAI</td>
                </tr>
                <tr>
                    <td></td>
                    <td>a. NAMA</td>
                    <td style="text-align: center;">:</td>
                    <td>{{$data[0]->nama_dinilai}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. NIK</td>
                    <td style="text-align: center;">:</td>
                    <td>{{$data[0]->nip_dinilai}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td style="text-align: center;">:</td>
                    <td>{{$data[0]->jenis_godi}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>d. Jabatan</td>
                    <td style="text-align: center;">:</td>
                    <td>{{$data[0]->jenis_jadi}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>e. Unit Kerja</td>
                    <td style="text-align: center;">:</td>
                    <td>{{$data[0]->jenis_udi}}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold; text-align: center;">2</td>
                    <td colspan="3" style="font-weight:bold">PEJABAT PENILAI</td>
                </tr>
                <tr>
                    <td></td>
                    <td>a. NAMA</td>
                    <td style="text-align: center;">:</td>
                    <td>{{$data[0]->nama_penilai}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. NIP</td>
                    <td style="text-align: center;">:</td>
                    <td>{{$data[0]->nip_penilai}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td style="text-align: center;">:</td>
                    <td>{{$data[0]->gope}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>d. Jabatan</td>
                    <td style="text-align: center;">:</td>
                    <td>{{$data[0]->jenis_jape}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>e. Unit Kerja</td>
                    <td style="text-align: center;">:</td>
                    <td>{{$data[0]->jenis_upe}}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold; text-align: center;">3</td>
                    <td colspan="3" style="font-weight:bold">ATASAN PEJABAT PENILAI</td>
                </tr>
                <tr>
                    <td></td>
                    <td>a. NAMA</td>
                    <td style="text-align: center;">:</td>
                    <td>{{$data[0]->nama_pejabat}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. NIP</td>
                    <td style="text-align: center;">:</td>
                    <td>{{$data[0]->nip_app}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td style="text-align: center;">:</td>
                    <td>{{$data[0]->jenis_gpp}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>d. Jabatan</td>
                    <td style="text-align: center;">:</td>
                    <td>{{$data[0]->jenis_jpp}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>e. Unit Kerja</td>
                    <td style="text-align: center;">:</td>
                    <<td>{{$data[0]->jenis_upp}}</td>
                </tr>
            </table>
          </div>
        </div>
        <!-- End Panel Floating Labels -->
      </div>
    </div>
  </div>
</div>
<!-- End Page -->
@endsection