@extends('layout')

@section('container')
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Form Data SKP</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
      <li class="breadcrumb-item active">Tambah Data SKP</li>
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
            <h3 class="panel-title" style="text-align:center">DATA SASARAN KERJA PEGAWAI</h3>
          </div>
          <div class="panel-body container-fluid">
            <table border="1" class="table table-striped table-bordered">
              <form action="/create-data-skp" method="post">
                @csrf
                <tr>
                    <td style="font-weight:bold; text-align: center;">1</td>
                    <td colspan="3" style="font-weight:bold">YANG DINILAI</td>
                </tr>
                <tr>
                    <td></td>
                    <td>a. NAMA</td>
                    <td style="text-align: center;">:</td>
                    <td>
                      <select class="form-control" id="id_dinilai" name="id_dinilai">
                        @foreach ($user as $skp)
                        <option value="{{$skp->id}}">{{$skp->nama_pegawai}}</option>
                        @endforeach
                      </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. NIP</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="nip_dinilai" id="nudi">
                        <p id="label-nip"></p>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_godi" id="gudi">
                    <p id="label-golongan"></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td>d. Jabatan</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_jadi" id="judi"> 
                    <p id="label-jabatan"></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td>e. Unit Kerja</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_udi" id="udi">
                  <p id="label-unit"></p></td>
                </tr>
                <tr>
                    <td style="font-weight:bold; text-align: center;">2</td>
                    <td colspan="3" style="font-weight:bold">PEJABAT PENILAI</td>
                </tr>
                <tr>
                    <td></td>
                    <td>a. NAMA</td>
                    <td style="text-align: center;">:</td>
                    <td>
                      <select class="form-control" id="id_penilai" name="id_penilai">
                        @foreach ($user as $s)
                        <option value="{{$s->id}}">{{$s->nama_pegawai}}</option>
                        @endforeach
                      </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. NIP/NIK</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="nip_penilai" id="nip_penilai">
                        <p id="label-nip-penilai"></p>
                      </td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_gope" id="id_gope">
                        <p id="label-id-gope"></p>
                      </td>
                </tr>
                <tr>
                    <td></td>
                    <td>d. Jabatan</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_jape" id="id_jape">
                        <p id="label-id-jape"></p>
                      </td>
                </tr>
                <tr>
                    <td></td>
                    <td>e. Unit Kerja</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_upe" id="id_upe">
                        <p id="label-id-upe"></p>
                      </td>
                </tr>
                <tr>
                    <td style="font-weight:bold; text-align: center;">3</td>
                    <td colspan="3" style="font-weight:bold">ATASAN PEJABAT PENILAI</td>
                </tr>
                <tr>
                    <td></td>
                    <td>a. NAMA</td>
                    <td style="text-align: center;">:</td>
                    <td>
                    <select class="form-control" id="id_app" name="id_app">
                        @foreach ($user as $app)
                        <option value="{{$app->id}}">{{$app->nama_pegawai}}</option>
                        @endforeach
                      </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. NIP/NIK</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="nip_app" id="nip_app">
                  <p id="label-nip-app"></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_gpp" id="id_gpp">
                  <p id="label-id-gpp"></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td>d. Jabatan</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_jpp" id="id_jpp">
                  <p id="label-id-jpp"></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td>e. Unit Kerja</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_upp" id="id_upp">
                  <p id="label-id-upp"></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Periode</td>
                    <td style="text-align: center;">:</td>
                    <!-- <td><input type="text" name="semester" placholder="contoh: ganjil - genap"> </td> -->
                    <td>
                      <select class="form-control" name="semester">
                        <option value="Januari - Desember">Januari - Desember</option>
                        <option value="Januari - Juni">Januari - Juni</option>
                        <option value="Juli - Desember">Juli - Desember</option>
                      </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Tahun</td>
                    <td style="text-align: center;">:</td>
                    <!-- <td><input type="text" name="tahun" placholder="contoh: 2018"> </td> -->
                    <td>
                      <select class="form-control" name="tahun">
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                      </select>
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
<script>
  $(document).ready( function () {


    $('#id_dinilai').on('change', function () {
      var id = $('#id_dinilai').find('option:selected', this).attr('value')
      console.log(id);
      $.get('/skpform/'+ id, function (data) {
            // console.log(data[0])
            $('#nudi').val(data[0].nip_pegawai);
            $('#label-nip').text(data[0].nip_pegawai)
            $('#gudi').val(data[0].id_pangkat_golongan);
            $('#label-golongan').text(data[0].jenis_pangkat_golongan)
            $('#judi').val(data[0].id_jabatan);
            $('#label-jabatan').text(data[0].jenis_jabatan)
            $('#udi').val(data[0].id_unit_kerja);
            $('#label-unit').text(data[0].nama_units_kerja)
          });
    })

    $('#id_penilai').on('change', function () {
      var id_penilai = $('#id_penilai').find('option:selected', this).attr('value')
      console.log(id_penilai);
      $.get('/skpform/'+ id_penilai, function (data) {
            console.log(data[0])
            $('#nip_penilai').val(data[0].nip_pegawai);
            $('#label-nip-penilai').text(data[0].nip_pegawai)
            $('#id_gope').val(data[0].id_pangkat_golongan);
            $('#label-id-gope').text(data[0].jenis_pangkat_golongan)
            $('#id_jape').val(data[0].id_jabatan);
            $('#label-id-jape').text(data[0].jenis_jabatan)
            $('#id_upe').val(data[0].id_unit_kerja);
            $('#label-id-upe').text(data[0].nama_units_kerja)
          });
    })

    $('#id_app').on('change', function () {
      var id_app = $('#id_app').find('option:selected', this).attr('value')
      console.log(id_app);
      $.get('/skpform/'+ id_app, function (data) {
            console.log(data[0])
            $('#nip_app').val(data[0].nip_pegawai);
            $('#label-nip-app').text(data[0].nip_pegawai)
            $('#id_gpp').val(data[0].id_pangkat_golongan);
            $('#label-id-gpp').text(data[0].jenis_pangkat_golongan)
            $('#id_jpp').val(data[0].id_jabatan);
            $('#label-id-jpp').text(data[0].jenis_jabatan)
            $('#id_upp').val(data[0].id_unit_kerja);
            $('#label-id-upp').text(data[0].nama_units_kerja)
          });
    })

  });
</script>
@endpush