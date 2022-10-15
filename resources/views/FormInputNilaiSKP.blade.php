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
                <form action="/createNilai" method="post">
                @csrf
                <table>
                    <tr>
                        <input type="hidden" value="{{$skp->id_data_skp}}" name="id_skpnt">
                        <td>PERIODE</td>
                        <td> : </td>
                        <td>
                            <select class="form-control" name="periode">
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
                            <select class="form-control" name="tahun">
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
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
                        <input type="hidden" id="id_penilai" value="{{$skp->id_penilai}}" name="id_penilai">
                        <p id="label-nape"></p>
                    </td>
                    <td align="center">1</td>
                    <td>Nama</td>
                    <td colspan="4">
                        <input type="hidden" id="id_dinilai" value="{{$skp->id_dinilai}}" name="id_dinilai">
                        <p id="label-nad"></p>
                    </td>
                </tr>
                <tr>
                    <td align="center">2</td>
                    <td>NIP</td>
                    <td id="label-nip-penilai"></td>
                    <td align="center">2</td>
                    <td>NIP</td>
                    <td colspan="4" id="label-nip"></td>
                </tr>
                <tr>
                    <td align="center">3</td>
                    <td>Pangkat/Gol</td>
                    <td id="label-id-gope"></td>
                    <td align="center">3</td>
                    <td>Pangkat/Gol</td>
                    <td colspan="4" id="label-golongan"></td>
                </tr>
                <tr>
                    <td align="center">4</td>
                    <td>Jabatan</td>
                    <td id="label-id-jape"></td>
                    <td align="center">4</td>
                    <td>Jabatan</td>
                    <td colspan="4" id="label-jabatan"></td>
                </tr>
                <tr>
                    <td align="center">5</td>
                    <td>Unit Kerja</td>
                    <td id="label-id-upe"></td>
                    <td align="center">5</td>
                    <td>Unit Kerja</td>
                    <td colspan="4" id="label-unit"></td>
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
                        <select class="form-control" name="id_ka">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="aka" /></td>
                    <td align="center"><input type="text" class="form-control" name="kua" /><input type="text" class="form-control" name="outa" /></td>
                    <td align="center"><input type="text" class="form-control" name="muta" /></td>
                    <td align="center"><input type="text" class="form-control" name="timea" /><input type="text" class="form-control" name="tmda" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayaa" /></td>
                </tr>
                <tr>
                    <td align="center">2</td>
                    <td align="center" colspan="2">
                        <select class="form-control" name="id_kb">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akb" /></td>
                    <td align="center"><input type="text" class="form-control" name="kub" /><input type="text" class="form-control" name="outb" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutb" /></td>
                    <td align="center"><input type="text" class="form-control" name="timeb" /><input type="text" class="form-control" name="tmdb" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayab" /></td>
                </tr>
                <tr>
                    <td align="center">3</td>
                    <td align="center" colspan="2">
                        <select class="form-control" name="id_kc">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akc" /></td>
                    <td align="center"><input type="text" class="form-control" name="kuc" /><input type="text" class="form-control" name="outc" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutc" /></td>
                    <td align="center"><input type="text" class="form-control" name="timec" /><input type="text" class="form-control" name="tmdc" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayac" /></td>
                </tr>
                <tr>
                    <td align="center">4</td>
                    <td align="center" colspan="2">
                        <select class="form-control" name="id_kd">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akd" /></td>
                    <td align="center"><input type="text" class="form-control" name="kud" /><input type="text" class="form-control" name="outd" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutd" /></td>
                    <td align="center"><input type="text" class="form-control" name="timed" /><input type="text" class="form-control" name="tmdd" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayad" /></td>
                </tr>
                <tr>
                    <td align="center">5</td>
                    <td align="center" colspan="2">
                        <select class="form-control" name="id_ke">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="ake" /></td>
                    <td align="center"><input type="text" class="form-control" name="kue" /><input type="text" class="form-control" name="oute" /></td>
                    <td align="center"><input type="text" class="form-control" name="mute" /></td>
                    <td align="center"><input type="text" class="form-control" name="timee" /><input type="text" class="form-control" name="tmde" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayae" /></td>
                </tr>
                <tr>
                    <td align="center">6</td>
                    <td align="center" colspan="2">
                        <select class="form-control" id="" name="id_kf">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akf" /></td>
                    <td align="center"><input type="text" class="form-control" name="kuf" /><input type="text" class="form-control" name="outf" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutf" /></td>
                    <td align="center"><input type="text" class="form-control" name="timef" /><input type="text" class="form-control" name="tmdf" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayaf" /></td>
                </tr>
                <tr>
                    <td align="center">7</td>
                    <td align="center" colspan="2">
                        <select class="form-control" id="" name="id_kg">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akg" /></td>
                    <td align="center"><input type="text" class="form-control" name="kug" /><input type="text" class="form-control" name="outg" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutg" /></td>
                    <td align="center"><input type="text" class="form-control" name="timeg" /><input type="text" class="form-control" name="tmdg" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayag" /></td>
                </tr>
                <tr>
                    <td align="center">8</td>
                    <td align="center" colspan="2">
                    <select class="form-control" id="" name="id_kh">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akh" /></td>
                    <td align="center"><input type="text" class="form-control" name="kuh" /><input type="text" class="form-control" name="outh" /></td>
                    <td align="center"><input type="text" class="form-control" name="muth" /></td>
                    <td align="center"><input type="text" class="form-control" name="timeh" /><input type="text" class="form-control" name="tmdh" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayah" /></td>
                </tr>
                <tr>
                    <td align="center">9</td>
                    <td align="center" colspan="2">
                    <select class="form-control" id="" name="id_ki">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                        @endforeach
                    </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="aki" /></td>
                    <td align="center"><input type="text" class="form-control" name="kui" /><input type="text" class="form-control" name="outi" /></td>
                    <td align="center"><input type="text" class="form-control" name="muti" /></td>
                    <td align="center"><input type="text" class="form-control" name="timei" /><input type="text" class="form-control" name="tmdi" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayai" /></td>
                </tr>
                <tr>
                    <td align="center">10</td>
                    <td align="center" colspan="2">
                    <select class="form-control" id="" name="id_kj">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                        @endforeach
                    </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akj" /></td>
                    <td align="center"><input type="text" class="form-control" name="kuj" /><input type="text" class="form-control" name="outj" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutj" /></td>
                    <td align="center"><input type="text" class="form-control" name="timej" /><input type="text" class="form-control" name="tmdj" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayaj" /></td>
                </tr>
                <tr>
                    <td align="center">11</td>
                    <td align="center" colspan="2">
                    <select class="form-control" id="" name="kegiatan11">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                        @endforeach
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
                    <select class="form-control" name="id_kk">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                        @endforeach
                    </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akk" /></td>
                    <td align="center"><input type="text" class="form-control" name="kuk" /><input type="text" class="form-control" name="outk" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutk" /></td>
                    <td align="center"><input type="text" class="form-control" name="timek" /><input type="text" class="form-control" name="tmdk" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayak" /></td>
                </tr>
                <tr>
                    <td align="center">13</td>
                    <td align="center" colspan="2">
                    <select class="form-control" name="id_kl">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                        @endforeach
                    </select></td>
                    <td align="center"><input type="text" class="form-control" name="akl" /></td>
                    <td align="center"><input type="text" class="form-control" name="kul" /><input type="text" class="form-control" name="outl" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutl" /></td>
                    <td align="center"><input type="text" class="form-control" name="timel" /><input type="text" class="form-control" name="tmdl" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayal" /></td>
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
                    <select class="form-control" id="" name="id_km">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                        @endforeach
                    </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akm" /></td>
                    <td align="center"><input type="text" class="form-control" name="kum" /><input type="text" class="form-control" name="outm" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutm" /></td>
                    <td align="center"><input type="text" class="form-control" name="timem" /><input type="text" class="form-control" name="tmdm" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayam" /></td>
                </tr>
                <tr>
                    <td align="center">15</td>
                    <td align="center" colspan="2">
                    <select class="form-control" id="" name="id_kn">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                        @endforeach
                    </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akn" /></td>
                    <td align="center"><input type="text" class="form-control" name="kun" /><input type="text" class="form-control" name="outn" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutn" /></td>
                    <td align="center"><input type="text" class="form-control" name="timen" /><input type="text" class="form-control" name="tmdn" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayan" /></td>
                </tr>
                <tr>
                    <td align="center">16</td>
                    <td align="center" colspan="2">
                    <select class="form-control" id="" name="id_ko">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                        @endforeach
                    </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="ako" /></td>
                    <td align="center"><input type="text" class="form-control" name="kuo" /><input type="text" class="form-control" name="outo" /></td>
                    <td align="center"><input type="text" class="form-control" name="muto" /></td>
                    <td align="center"><input type="text" class="form-control" name="timeo" /><input type="text" class="form-control" name="tmdo" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayao" /></td>
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


    
      var id = $('#id_dinilai').attr('value')
      $.get('/skpform/'+ id, function (data) {
            $('#label-nip').text(data[0].nip_pegawai)
            $('#label-nad').text(data[0].nama_pegawai)
            $('#label-golongan').text(data[0].jenis_pangkat_golongan)
            $('#label-jabatan').text(data[0].jenis_jabatan)
            $('#label-unit').text(data[0].nama_units_kerja)
          });


    
      var id_penilai = $('#id_penilai').attr('value')
      console.log(id_penilai);
      $.get('/skpform/'+ id_penilai, function (data) {
            $('#label-nape').text(data[0].nama_pegawai)
            $('#label-nip-penilai').text(data[0].nip_pegawai)
            $('#label-id-gope').text(data[0].jenis_pangkat_golongan)
            $('#label-id-jape').text(data[0].jenis_jabatan)
            $('#label-id-upe').text(data[0].nama_units_kerja)
          });
    
  });
</script>
@endpush