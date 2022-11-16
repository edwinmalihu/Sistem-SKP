@extends('pdf.pdf')
@section('container')
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
                    <td style="text-align:center">=</td>
                    <td style="text-align:center">{{$perilaku->n_op}}</td>
                    <td style="text-align:center">{{$perilaku->s_op}}</td>
                </tr>
                <tr>
                    <td>Integritas</td>
                    <td style="text-align:center">=</td>
                    <td style="text-align:center">{{$perilaku->n_i}}</td>
                    <td style="text-align:center">{{$perilaku->s_i}}</td>
                </tr>
                <tr>
                    <td>Komitmen</td>
                    <td style="text-align:center">=</td>
                    <td style="text-align:center">{{$perilaku->n_k}}</td>
                    <td style="text-align:center">{{$perilaku->s_k}}</td>
                </tr>
                <tr>
                    <td>Disiplin</td>
                    <td style="text-align:center">=</td>
                    <td style="text-align:center">{{$perilaku->n_d}}</td>
                    <td style="text-align:center" style="text-align:center">{{$perilaku->s_d}}</td>
                </tr>
                <tr>
                    <td>Kerjasama</td>
                    <td style="text-align:center">=</td>
                    <td style="text-align:center">{{$perilaku->n_ks}}</td>
                    <td style="text-align:center">{{$perilaku->s_ks}}</td>
                </tr>
                <tr>
                    <td>Kepemimpinan</td>
                    <td style="text-align:center">=</td>
                    <td style="text-align:center">{{$perilaku->n_kp}}</td>
                    <td style="text-align:center">{{$perilaku->s_kp}}</td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td style="text-align:center">=</td>
                    <td style="text-align:center">{{$perilaku->n_jml}}</td>
                    <td style="text-align:center"></td>
                </tr>
                <tr>
                    <td>Nilai Rata-rata</td>
                    <td style="text-align:center">=</td>
                    <td style="text-align:center">{{$perilaku->n_rr}}</td>
                    <td style="text-align:center">{{$perilaku->s_rr}}</td>
                </tr>
            </tr>
        </table>
   
          </div>
        </div>
        <!-- End Panel Floating Labels -->
      </div>
    </div>
  </div>
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

        function printData(){
	    window.print();
        }

        setTimeout(printData, 5000);


    })
</script>
@endpush