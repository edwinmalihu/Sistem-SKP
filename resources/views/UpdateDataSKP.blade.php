@extends('layout')

@section('container')
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Form Edit Data SKP</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
      <li class="breadcrumb-item active">Edit Data SKP</li>
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
                        @foreach ($list as $skp)
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
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>d. Jabatan</td>
                    <td style="text-align: center;">:</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>e. Unit Kerja</td>
                    <td style="text-align: center;">:</td>
                    <td></td>
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
                      <select class="form-control" id="select" name="">
                        <option value=""></option>
                      </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. NIP</td>
                    <td style="text-align: center;">:</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td style="text-align: center;">:</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>d. Jabatan</td>
                    <td style="text-align: center;">:</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>e. Unit Kerja</td>
                    <td style="text-align: center;">:</td>
                    <td></td>
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
                      <select class="form-control" id="select" name="">
                        <option value=""></option>
                      </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. NIP</td>
                    <td style="text-align: center;">:</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td style="text-align: center;">:</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>d. Jabatan</td>
                    <td style="text-align: center;">:</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>e. Unit Kerja</td>
                    <td style="text-align: center;">:</td>
                    <td></td>
                </tr>
            </table>
            <br>
           <button type="submit" class="btn btn-primary col-md-12">Submit</button>   
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
      var id_data = $('#id_dinilai').find('option:selected', this).attr('value');
    // console.log(id_data);

    if (id_data != "") {
      // $('#id_dinilai').on('change', function () {
      // var id = $('#id_dinilai').find('option:selected', this).attr('value')
      // console.log(id)
      $.get('/skpform/'+ id_data, function (data) {
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
      // })
      } 
      $('#id_dinilai').on('change', function () {
      var id = $('#id_dinilai').find('option:selected', this).attr('value')
      console.log(id)
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
    
   

    // $('#id_dinilai').on('change', function () {
    //   var id = $('#id_dinilai').find('option:selected', this).attr('value')
    //   console.log(id);
    //   $.get('/skpform/'+ id, function (data) {
    //         // console.log(data[0])
    //         $('#nudi').val(data[0].nip_pegawai);
    //         $('#label-nip').text(data[0].nip_pegawai)
    //         $('#gudi').val(data[0].id_pangkat_golongan);
    //         $('#label-golongan').text(data[0].jenis_pangkat_golongan)
    //         $('#judi').val(data[0].id_jabatan);
    //         $('#label-jabatan').text(data[0].jenis_jabatan)
    //         $('#udi').val(data[0].id_unit_kerja);
    //         $('#label-unit').text(data[0].nama_units_kerja)
    //       });
    // })

  });
</script>
@endpush