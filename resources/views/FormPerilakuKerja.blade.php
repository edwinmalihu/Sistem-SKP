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
    <form action="/action-perilaku" method="post">
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
                    <td><input type="text" class="form-control" name="n_op" id="n_op"/></td>
                    <td><input type="text" class="form-control" name="s_op" id="s_op"></td>
                </tr>
                <tr>
                    <td>Integritas</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="n_i" id="n_i"/></td>
                    <td><input type="text" class="form-control" name="s_i" id="s_i"></td>
                </tr>
                <tr>
                    <td>Komitmen</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="n_k" id="n_k"/></td>
                    <td><input type="text" class="form-control" name="s_k" id="s_k"></td>
                </tr>
                <tr>
                    <td>Disiplin</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="n_d" id="n_d"/></td>
                    <td><input type="text" class="form-control" name="s_d" id="s_d"></td>
                </tr>
                <tr>
                    <td>Kerjasama</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="n_ks" id="n_ks"/></td>
                    <td><input type="text" class="form-control" name="s_ks" id="s_ks"></td>
                </tr>
                <tr>
                    <td>Kepemimpinan</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="n_kp" id="n_kp"/></td>
                    <td><input type="text" class="form-control" name="s_kp" id="s_kp"></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="n_jml" id="n_jml"/></td>
                    <td><input type="hidden" class="form-control" name="s_jml" value="-"></td>
                </tr>
                <tr>
                    <td>Nilai Rata-rata</td>
                    <td>=</td>
                    <td><input type="text" class="form-control" name="n_rr" id="n_rr"/></td>
                    <td><input type="text" class="form-control" name="s_rr" id="s_rr"></td>
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

        var buruk = 50
        var sedang = 60
        var cukup = 75  
        var baik = 90
        var good = 91
        
        $('#n_op, #n_i, #n_k, #n_d, #n_ks, #n_kp, #n_jml, #n_rr').keyup(function(){
            var n_op =  $('#n_op').val() * 1
            var n_i =  $('#n_i').val() * 1
            var n_k =  $('#n_k').val() * 1
            var n_d =  $('#n_d').val() * 1
            var n_ks =  $('#n_ks').val() * 1
            var n_kp =  $('#n_kp').val() * 1
            var n_jml =  $('#n_jml').val()
            if (n_op == ""){
                $('#s_op').val("");
            }
            else if(n_op <= buruk){
                $('#s_op').val("Buruk");
            }
            else if(n_op <= sedang){
                $('#s_op').val("Sedang");
            }
            else if (n_op <= cukup){
                $('#s_op').val("Cukup");
            }
            else if (n_op <= baik){
                $('#s_op').val("Baik");
            }
            else if (n_op >= good){
                $('#s_op').val("Sangat Baik");
            }
            else{
                $('#s_op').val("");
            }

            // ------------------------------------
            if (n_i == ""){
                $('#s_i').val("");
            }
            else if(n_i <= buruk){
                $('#s_i').val("Buruk");
            }
            else if(n_i <= sedang){
                $('#s_i').val("Sedang");
            }
            else if (n_i <= cukup){
                $('#s_i').val("Cukup");
            }
            else if (n_i <= baik){
                $('#s_i').val("Baik");
            }
            else if (n_i >= good){
                $('#s_i').val("Sangat Baik");
            }
            else{
                $('#s_i').val("");
            }

            //-----------------------------------------
            if (n_k == ""){
                $('#s_k').val("");
            }
            else if(n_k <= buruk){
                $('#s_k').val("Buruk");
            }
            else if(n_k <= sedang){
                $('#s_k').val("Sedang");
            }
            else if (n_k <= cukup){
                $('#s_k').val("Cukup");
            }
            else if (n_k <= baik){
                $('#s_k').val("Baik");
            }
            else if (n_k >= good){
                $('#s_k').val("Sangat Baik");
            }
            else{
                $('#s_k').val("");
            }

            //----------------------------------------
            if (n_d == ""){
                $('#s_d').val("");
            }
            else if(n_d <= buruk){
                $('#s_d').val("Buruk");
            }
            else if(n_d <= sedang){
                $('#s_d').val("Sedang");
            }
            else if (n_d <= cukup){
                $('#s_d').val("Cukup");
            }
            else if (n_d <= baik){
                $('#s_d').val("Baik");
            }
            else if (n_d >= good){
                $('#s_d').val("Sangat Baik");
            }
            else{
                $('#s_d').val("");
            }

            // -----------------------------------
            if (n_ks == ""){
                $('#s_ks').val("");
            }
            else if(n_ks <= buruk){
                $('#s_ks').val("Buruk");
            }
            else if(n_ks <= sedang){
                $('#s_ks').val("Sedang");
            }
            else if (n_ks <= cukup){
                $('#s_ks').val("Cukup");
            }
            else if (n_ks <= baik){
                $('#s_ks').val("Baik");
            }
            else if (n_ks >= good){
                $('#s_ks').val("Sangat Baik");
            }
            else{
                $('#s_ks').val("");
            }

            // -----------------------------------
            if (n_kp == ""){
                $('#s_kp').val("");
            }
            else if(n_kp <= buruk){
                $('#s_kp').val("Buruk");
            }
            else if(n_kp <= sedang){
                $('#s_kp').val("Sedang");
            }
            else if (n_kp <= cukup){
                $('#s_kp').val("Cukup");
            }
            else if (n_kp <= baik){
                $('#s_kp').val("Baik");
            }
            else if (n_kp >= good){
                $('#s_kp').val("Sangat Baik");
            }
            else{
                $('#s_kp').val("");
            }

            // -----------------------------------
            var jml = n_op + n_i + n_k + n_d + n_ks + n_kp
            console.log("ini nilai Jumlah : "+ jml);
            var n_jml =  $('#n_jml').val(jml)
            // -----------------------------------

            // cek isi field input
            // ---------------------------------
            if (n_op == ""){
                var a = 0
            }
            else{
                a = 1
            }
            // ---------------
            if(n_i == ""){
                var b = 0
            }else{
                b = 0
            }
            // ---------------
            if(n_k == ""){
                var c = 0
            }else{
                c = 1
            }
            // ---------------
            if(n_d == ""){
                var d = 0
            }else{
                d = 1
            }
            // ---------------
            if(n_ks == ""){
                var e = 0
            }else{
                e = 1
            }
            // ---------------
            if(n_kp == ""){
                var f = 0
            }else{
                f = 1
            }

            var total = a+b+c+d+e+f
            console.log("jml total : " +total);

            var mean = jml/total
            var display_mean =  mean.toFixed(2);
            console.log("ini jumlah mean : " +display_mean);
            var nilai_rata_rata =  $('#n_rr').val(display_mean)

            if (mean == ""){
                $('#s_rr').val("");
            }
            else if(mean <= buruk){
                $('#s_rr').val("Buruk");
            }
            else if(mean <= sedang){
                $('#s_rr').val("Sedang");
            }
            else if (mean <= cukup){
                $('#s_rr').val("Cukup");
            }
            else if (mean <= baik){
                $('#s_rr').val("Baik");
            }
            else if (mean >= good){
                $('#s_rr').val("Sangat Baik");
            }
            else{
                $('#s_rr').val("");
            }
        })


    })
</script>



@endpush