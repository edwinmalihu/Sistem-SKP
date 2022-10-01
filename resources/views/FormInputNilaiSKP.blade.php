@extends('layout')

@section('container')
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Form Nilai SKP</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
      <li class="breadcrumb-item active">Tambah Nilai SKP</li>
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
              <div class="panel-body container-fluid">
                <table>
                    <tr>
                        <td>PERIODE</td>
                        <td> : </td>
                        <td>
                            <select class="form-control" id="" name="">
                                <option value="Januari - Desember">Januari - Desember</option>
                                <option value="Januari - Juni">Januari - Juni</option>
                                <option value="Juli - Desember">Juli - Desember</option>
                            </select>
                        </td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>TAHUN</td>
                        <td> : </td>
                        <td>
                            <select class="form-control" id="" name="">
                                <option value="">2020</option>
                                <option value="">2021</option>
                                <option value="">2022</option>
                            </select>
                        </td>
                    </tr>
                </table>
              </div>
            </div>
            <!-- End Panel Floating Labels -->
          </div>
      
    <div class="col-md-12">
        <!-- Panel Floating Labels -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title" style="text-align:center">FORMULIR SASARAN KERJA </br> PEGAWAI UNMUS</h3>
        </div>

          <div class="panel-body container-fluid">
            <table border="1" class="table table-striped table-bordered">
                <tr>
                    <td style="font-weight:bold">NO</td>
                    <td colspan="2" style="font-weight:bold">I. NAMA PEJABAT PENILAI</td>
                    <td style="font-weight:bold; text-align:center">NO</td>
                    <td colspan="6" style="font-weight:bold">II. PEGAWAI NEGERI SIPIL YANG DINILAI</td>
                </tr>
                <tr>
                    <td align="center">1</td>
                    <td>Nama</td>
                    <td>
                        <select class="form-control" id="" name="">
                            <option value="">Pilih Pegawai</option>
                        </select>
                    </td>
                    <td align="center">1</td>
                    <td>Nama</td>
                    <td colspan="4">
                        <select class="form-control" id="" name="">
                            <option value="">Pilih Pegawai</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="center">2</td>
                    <td>NIP</td>
                    <td></td>
                    <td align="center">2</td>
                    <td>NIP</td>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td align="center">3</td>
                    <td>Pangkat/Gol</td>
                    <td></td>
                    <td align="center">3</td>
                    <td>Pangkat/Gol</td>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td align="center">4</td>
                    <td>Jabatan</td>
                    <td></td>
                    <td align="center">4</td>
                    <td>Jabatan</td>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td align="center">5</td>
                    <td>Unit Kerja</td>
                    <td></td>
                    <td align="center">5</td>
                    <td>Unit Kerja</td>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td rowspan="2" style="font-weight:bold; text-align:center"></br>NO</td>
                    <td rowspan="2" colspan="2" style="font-weight:bold; text-align:center"></br>III. KEGIATAN TUGAS JABATAN</td>
                    <td rowspan="2" style="font-weight:bold; text-align:center"></br>AK</td>
                    <td colspan="6" align="center" style="font-weight:bold">TARGET</td>
                </tr>
                <tr>
                    <td style="font-weight:bold; text-align:center">KUANT/OUTPUT</td>
                    <td style="font-weight:bold; text-align:center">KUAL/MUTU</td>
                    <td style="font-weight:bold; text-align:center">WAKTU</td>
                    <td style="font-weight:bold; text-align:center">BIAYA</td>
                </tr>
                <!-- <tr>
                    <td align="center">1</td>
                    <td align="center" colspan="2">2</td>
                    <td align="center">3</td>
                    <td align="center">4</td>
                    <td align="center">5</td>
                    <td align="center">6</td>
                    <td align="center">7</td>
                </tr> -->
                <tr>
                    <td align="center">1</td>
                    <td align="center" colspan="2">
                        <select class="form-control" id="" name="">
                            <option value="">Pilih Kegiatan</option>
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                </tr>
                <tr>
                    <td align="center">2</td>
                    <td align="center" colspan="2">
                        <select class="form-control" id="" name="">
                            <option value="">Pilih Kegiatan</option>
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                </tr>
                <tr>
                    <td align="center">3</td>
                    <td align="center" colspan="2">
                        <select class="form-control" id="" name="">
                            <option value="">Pilih Kegiatan</option>
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                </tr>
                <tr>
                    <td align="center">4</td>
                    <td align="center" colspan="2">
                        <select class="form-control" id="" name="">
                            <option value="">Pilih Kegiatan</option>
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                </tr>
                <tr>
                    <td align="center">5</td>
                    <td align="center" colspan="2">
                        <select class="form-control" id="" name="">
                            <option value="">Pilih Kegiatan</option>
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                </tr>
                <tr>
                    <td align="center">6</td>
                    <td align="center" colspan="2">
                        <select class="form-control" id="" name="">
                            <option value="">Pilih Kegiatan</option>
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                </tr>
                <tr>
                    <td align="center">7</td>
                    <td align="center" colspan="2">
                        <select class="form-control" id="" name="">
                            <option value="">Pilih Kegiatan</option>
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                </tr>
                <tr>
                    <td align="center">8</td>
                    <td align="center" colspan="2">
                    <select class="form-control" id="" name="">
                            <option value="">Pilih Kegiatan</option>
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                </tr>
                <tr>
                    <td align="center">9</td>
                    <td align="center" colspan="2">
                    <select class="form-control" id="" name="">
                            <option value="">Pilih Kegiatan</option>
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                </tr>
                <tr>
                    <td align="center">10</td>
                    <td align="center" colspan="2">
                    <select class="form-control" id="" name="">
                            <option value="">Pilih Kegiatan</option>
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                </tr>
                <tr>
                    <td align="center">11</td>
                    <td align="center" colspan="2">
                    <select class="form-control" id="" name="">
                            <option value="">Pilih Kegiatan</option>
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                </tr>
                <tr>
                    <td align="center"></td>
                    <td align="center" colspan="2" style="font-weight:bold">II. PELAKSANAAN PENELITIAN</td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                </tr>
                <tr>
                    <td align="center">12</td>
                    <td align="center" colspan="2">
                    <select class="form-control" id="" name="">
                            <option value="">Pilih Kegiatan</option>
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                </tr>
                <tr>
                    <td align="center">13</td>
                    <td align="center" colspan="2">
                    <select class="form-control" id="" name="">
                            <option value="">Pilih Kegiatan</option>
                        </select></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                </tr>
                <tr>
                    <td align="center"></td>
                    <td align="center" colspan="2" style="font-weight:bold;">III. PELAKSANAAN PENGABDIAN KEPADA MASYARAKAT</td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                </tr>
                <tr>
                    <td align="center">14</td>
                    <td align="center" colspan="2">
                    <select class="form-control" id="" name="">
                            <option value="">Pilih Kegiatan</option>
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                </tr>
                <tr>
                    <td align="center">15</td>
                    <td align="center" colspan="2">
                    <select class="form-control" id="" name="">
                            <option value="">Pilih Kegiatan</option>
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                </tr>
                <tr>
                    <td align="center">16</td>
                    <td align="center" colspan="2">
                    <select class="form-control" id="" name="">
                            <option value="">Pilih Kegiatan</option>
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /><input type="text" class="form-control" name="" /></td>
                    <td align="center"><input type="text" class="form-control" name="" /></td>
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