@extends('layout')

@section('container')
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Detail Perilaku Kerja</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
      <li class="breadcrumb-item active">Detail Perilaku Kerja</li>
    </ol>
  </div>

  <div class="page-content container-fluid">
    <div class="row">
      
        <div class="col-md-12">
            <!-- Panel Floating Labels -->
            <div class="text-right">
                <a href="" target="_blank" class="btn btn-primary col-md-1 wb-print"> PRINT</a>   
            </div>
            <br>
            <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title" style="text-align:center">BUKU CATATAN PENILAIAN PERILAKU PEGAWAI UNMUS</h3>

            </div>
            <div class="panel-body container-fluid">
            <table style="">
                <tr>
                    <td>Nama</td>
                    <td> :</td>
                    <input type="hidden" value="{{$skp->id_dinilai}}" id="id_dinilai">
                    <td id="nama-dinilai"></td>
                </tr>
                <tr>
                    <td>NIP/NIDN/NIK</td>
                    <td> :</td>
                    <td id="nip_dinilai">{{$skp->nip_dinilai}}</td>
                </tr>
            </table>
            <br>
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
                <td style="text-align:center" rowspan="9">{{$skp->semester}} {{$skp->tahun}}</td>
                <td colspan="4">
                    Penilaian SKP sampai dengan akhir Desember 2016 = 
                    {{$nilai_r->tnr}} <br>
                    sedangkan penilaian perilaku kerjanya adalah <br>
                    sebagai berikut :
                </td>
                <td style="text-align:center" colspan="5" rowspan="9">
                <input type="hidden" name="id_skp" id="id_skp" value="{{$skp->id_data_skp}}">
                <br><br><br><br><br><br><br><br><br><br>
                    DEKAN FAKULTAS TEKNIK
                    <input type="hidden" value="{{$skp->id_penilai}}" id="id_penilai"> 
                    <br><br><br><br>
                    <p id="nama-penilai"></p>
                    <br>
                    {{$skp->nip_penilai}}
                </td> 
                <tr>
                    <td>Orientasi Pelayanan</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="n_op" id="n_op" value="{{$perilaku->n_op}}" readonly/></td>
                    <td><input type="text" class="form-control" name="s_op" id="s_op" value="{{$perilaku->s_op}}" readonly></td>
                </tr>
                <tr>
                    <td>Integritas</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="n_i" id="n_i" value="{{$perilaku->n_i}}" readonly/></td>
                    <td><input type="text" class="form-control" name="s_i" id="s_i" value="{{$perilaku->s_i}}" readonly></td>
                </tr>
                <tr>
                    <td>Komitmen</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="n_k" id="n_k" value="{{$perilaku->n_k}}" readonly/></td>
                    <td><input type="text" class="form-control" name="s_k" id="s_k" value="{{$perilaku->s_k}}" readonly></td>
                </tr>
                <tr>
                    <td>Disiplin</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="n_d" id="n_d" value="{{$perilaku->n_d}}" readonly/></td>
                    <td><input type="text" class="form-control" name="s_d" id="s_d" value="{{$perilaku->s_d}}" readonly></td>
                </tr>
                <tr>
                    <td>Kerjasama</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="n_ks" id="n_ks" value="{{$perilaku->n_ks}}" readonly/></td>
                    <td><input type="text" class="form-control" name="s_ks" id="s_ks" value="{{$perilaku->s_ks}}" readonly></td>
                </tr>
                <tr>
                    <td>Kepemimpinan</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="n_kp" id="n_kp" value="{{$perilaku->n_kp}}" readonly/></td>
                    <td><input type="text" class="form-control" name="s_kp" id="s_kp" value="{{$perilaku->s_kp}}" readonly></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="n_jml" id="n_jml" value="{{$perilaku->n_jml}}" readonly/></td>
                    <td><input type="hidden" class="form-control" name="s_jml" value="-"></td>
                </tr>
                <tr>
                    <td>Nilai Rata-rata</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="n_rr" id="n_rr" value="{{$perilaku->n_rr}}" readonly/></td>
                    <td><input type="text" class="form-control" name="s_rr" id="s_rr" value="{{$perilaku->s_rr}}" readonly></td>
                </tr>
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

@push('scripts')

<script>
    $(document).ready( function () {
        var id_dinilai = $('#id_dinilai').val()
        $.get('/listuser/'+ id_dinilai, function (data) {
            console.log(data.nama_pegawai);
            $('#nama-dinilai').text(data.nama_pegawai)
        });

        var id_penilai = $('#id_penilai').val()
        $.get('/listuser/'+ id_penilai, function (data) {
            console.log(data.nama_pegawai);
            $('#nama-penilai').text(data.nama_pegawai)
        });


    })
</script>



@endpush