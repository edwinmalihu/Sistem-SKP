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
                <form action="/update-nilai/{{$skp->id_data_skp}}" method="post">
                @method('patch')
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
                        <?php $id_ka = $nilai['id_ka'] ?>
                        <select class="form-control" name="id_ka">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}" {{ $id_ka == $k->id_kegiatan ? 'selected' : '' }} >{{$k->nama_kegiatan}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="aka" value="{{$nilai->aka}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="kua" value="{{$nilai->kua}}" /><input type="text" class="form-control" name="outa" value="{{$nilai->outa}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="muta" value="{{$nilai->muta}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="timea" value="{{$nilai->timea}}" /><input type="text" class="form-control" name="tmda"  value="{{$nilai->tmda}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayaa" value="{{$nilai->biayaa}}" /></td>
                </tr>
                <tr>
                    <td align="center">2</td>
                    <td align="center" colspan="2">
                        <?php $id_kb = $nilai['id_kb'] ?>
                        <select class="form-control" name="id_kb">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}" {{ $id_kb == $k->id_kegiatan ? 'selected' : '' }} >{{$k->nama_kegiatan}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akb" value="{{$nilai->akb}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="kub" value="{{$nilai->kub}}" /><input type="text" class="form-control" name="outb" value="{{$nilai->outb}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutb" value="{{$nilai->mutb}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="timeb" value="{{$nilai->timeb}}" /><input type="text" class="form-control" name="tmdb" value="{{$nilai->tmdb}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayab" value="{{$nilai->biayab}}" /></td>
                </tr>
                <tr>
                    <td align="center">3</td>
                    <td align="center" colspan="2">
                        <?php $id_kc = $nilai['id_kc'] ?>
                        <select class="form-control" name="id_kc">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}" {{ $id_kc == $k->id_kegiatan ? 'selected' : '' }} >{{$k->nama_kegiatan}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akc" value="{{$nilai->akc}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="kuc"  value="{{$nilai->kuc}}" /><input type="text" class="form-control" name="outc" value="{{$nilai->outc}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutc" value="{{$nilai->mutc}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="timec" value="{{$nilai->timec}}" /><input type="text" class="form-control" name="tmdc" value="{{$nilai->tmdc}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayac" value="{{$nilai->biayac}}" /></td>
                </tr>
                <tr>
                    <td align="center">4</td>
                    <td align="center" colspan="2">
                        <?php $id_kd = $nilai['id_kd'] ?>
                        <select class="form-control" name="id_kd">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}" {{ $id_kd == $k->id_kegiatan ? 'selected' : '' }} >{{$k->nama_kegiatan}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akd" value="{{$nilai->akd}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="kud" value="{{$nilai->kud}}" /><input type="text" class="form-control" name="outd" value="{{$nilai->outd}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutd" value="{{$nilai->mutd}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="timed" value="{{$nilai->timed}}" /><input type="text" class="form-control" name="tmdd" value="{{$nilai->tmdd}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayad" value="{{$nilai->biayad}}" /></td>
                </tr>
                <tr>
                    <td align="center">5</td>
                    <td align="center" colspan="2">
                        <?php $id_ke = $nilai['id_ke'] ?>
                        <select class="form-control" name="id_ke">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}" {{ $id_ke == $k->id_kegiatan ? 'selected' : '' }} >{{$k->nama_kegiatan}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="ake" value="{{$nilai->ake}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="kue" value="{{$nilai->kue}}" /><input type="text" class="form-control" name="oute" value="{{$nilai->oute}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="mute" value="{{$nilai->mute}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="timee" value="{{$nilai->timee}}" /><input type="text" class="form-control" name="tmde" value="{{$nilai->tmde}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayae" value="{{$nilai->biayae}}" /></td>
                </tr>
                <tr>
                    <td align="center">6</td>
                    <td align="center" colspan="2">
                        <?php $id_kf = $nilai['id_kf'] ?>
                        <select class="form-control" id="" name="id_kf">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}" {{ $id_kf == $k->id_kegiatan ? 'selected' : '' }} >{{$k->nama_kegiatan}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akf" value="{{$nilai->akf}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="kuf" value="{{$nilai->kuf}}"/><input type="text" class="form-control" name="outf" value="{{$nilai->outf}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutf" value="{{$nilai->mutf}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="timef" value="{{$nilai->timef}}" /><input type="text" class="form-control" name="tmdf" value="{{$nilai->tmdf}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayaf" value="{{$nilai->biayaf}}" /></td>
                </tr>
                <tr>
                    <td align="center">7</td>
                    <td align="center" colspan="2">
                        <?php $id_kg = $nilai['id_kg'] ?>
                        <select class="form-control" id="" name="id_kg">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}" {{ $id_kg == $k->id_kegiatan ? 'selected' : '' }} >{{$k->nama_kegiatan}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akg" value="{{$nilai->akg}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="kug" value="{{$nilai->kug}}" /><input type="text" class="form-control" name="outg" value="{{$nilai->outg}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutg" value="{{$nilai->mutg}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="timeg" value="{{$nilai->timeg}}" /><input type="text" class="form-control" name="tmdg" value="{{$nilai->tmdg}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayag" value="{{$nilai->biayag}}" /></td>
                </tr>
                <tr>
                    <td align="center">8</td>
                    <td align="center" colspan="2">
                    <?php $id_kh = $nilai['id_kh'] ?>
                    <select class="form-control" id="" name="id_kh">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}" {{ $id_kh == $k->id_kegiatan ? 'selected' : '' }}>{{$k->nama_kegiatan}}</option>
                        @endforeach
                        </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akh" value="{{$nilai->akh}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="kuh" value="{{$nilai->kuh}}" /><input type="text" class="form-control" name="outh" value="{{$nilai->outh}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="muth" value="{{$nilai->muth}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="timeh" value="{{$nilai->timeh}}" /><input type="text" class="form-control" name="tmdh" value="{{$nilai->tmdh}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayah" value="{{$nilai->biayah}}" /></td>
                </tr>
                <tr>
                    <td align="center">9</td>
                    <td align="center" colspan="2">
                    <?php $id_ki = $nilai['id_ki'] ?>
                    <select class="form-control" id="" name="id_ki">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}" {{ $id_ki == $k->id_kegiatan ? 'selected' : '' }} >{{$k->nama_kegiatan}}</option>
                        @endforeach
                    </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="aki" value="{{$nilai->aki}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="kui" value="{{$nilai->kui}}" /><input type="text" class="form-control" name="outi" value="{{$nilai->outi}}"/></td>
                    <td align="center"><input type="text" class="form-control" name="muti" value="{{$nilai->muti}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="timei" value="{{$nilai->timei}}" /><input type="text" class="form-control" name="tmdi" value="{{$nilai->tmdi}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayai" value="{{$nilai->biayai}}" /></td>
                </tr>
                <tr>
                    <td align="center">10</td>
                    <td align="center" colspan="2">
                    <?php $id_kj = $nilai['id_kj'] ?>
                    <select class="form-control" id="" name="id_kj">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}" {{ $id_kj == $k->id_kegiatan ? 'selected' : '' }} >{{$k->nama_kegiatan}}</option>
                        @endforeach
                    </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akj" value="{{$nilai->akj}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="kuj" value="{{$nilai->kuj}}" /><input type="text" class="form-control" name="outj" value="{{$nilai->outj}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutj" value="{{$nilai->mutj}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="timej" value="{{$nilai->timej}}" /><input type="text" class="form-control" name="tmdj" value="{{$nilai->tmdj}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayaj" value="{{$nilai->biayaj}}" /></td>
                </tr>
                <tr>
                    <td align="center">11</td>
                    <td align="center" colspan="2">
                    <?php $id_kk = $nilai['id_kk'] ?>
                    <select class="form-control" name="id_kk">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}" {{ $id_kk == $k->id_kegiatan ? 'selected' : '' }} >{{$k->nama_kegiatan}}</option>
                        @endforeach
                    </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akk" value="{{$nilai->akk}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="kuk" value="{{$nilai->kuk}}" /><input type="text" class="form-control" name="outk" value="{{$nilai->outk}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutk" value="{{$nilai->mutk}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="timek" value="{{$nilai->timek}}" /><input type="text" class="form-control" name="tmdk" value="{{$nilai->tmdk}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayak" value="{{$nilai->biayak}}" /></td>
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
                    <?php $id_kl = $nilai['id_kl'] ?>
                    <select class="form-control" name="id_kl">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}" {{ $id_kl == $k->id_kegiatan ? 'selected' : '' }}>{{$k->nama_kegiatan}}</option>
                        @endforeach
                    </select></td>
                    <td align="center"><input type="text" class="form-control" name="akl" value="{{$nilai->akl}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="kul" value="{{$nilai->kul}}" /><input type="text" class="form-control" name="outl" value="{{$nilai->outl}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutl" value="{{$nilai->mutl}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="timel" value="{{$nilai->timel}}" /><input type="text" class="form-control" name="tmdl" value="{{$nilai->tmdl}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayal"  value="{{$nilai->biayal}}" /></td>
                </tr>
                <tr>
                    <td align="center">13</td>
                    <td align="center" colspan="2">
                    <?php $id_km = $nilai['id_km'] ?>
                    <select class="form-control" id="" name="id_km">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}" {{ $id_km == $k->id_kegiatan ? 'selected' : '' }} >{{$k->nama_kegiatan}}</option>
                        @endforeach
                    </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akm" value="{{$nilai->akm}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="kum" value="{{$nilai->kum}}" /><input type="text" class="form-control" name="outm" value="{{$nilai->outm}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutm" value="{{$nilai->mutm}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="timem" value="{{$nilai->timem}}" /><input type="text" class="form-control" name="tmdm" value="{{$nilai->tmdm}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayam" value="{{$nilai->biayam}}" /></td>
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
                    <?php $id_kn = $nilai['id_kn'] ?>
                    <select class="form-control" id="" name="id_kn">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}" {{ $id_kn == $k->id_kegiatan ? 'selected' : '' }}>{{$k->nama_kegiatan}}</option>
                        @endforeach
                    </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akn" value="{{$nilai->akn}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="kun" value="{{$nilai->kun}}" /><input type="text" class="form-control" name="outn" value="{{$nilai->outn}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutn" value="{{$nilai->mutn}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="timen" value="{{$nilai->timen}}" /><input type="text" class="form-control" name="tmdn" value="{{$nilai->tmdn}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayan" value="{{$nilai->biayan}}" /></td>
                </tr>
                <tr>
                    <td align="center">15</td>
                    <td align="center" colspan="2">
                    <?php $id_ko = $nilai['id_ko'] ?>
                    <select class="form-control" id="" name="id_ko">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}" {{ $id_ko == $k->id_kegiatan ? 'selected' : '' }}>{{$k->nama_kegiatan}}</option>
                        @endforeach
                    </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="ako" value="{{$nilai->ako}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="kuo" value="{{$nilai->kuo}}" /><input type="text" class="form-control" name="outo" value="{{$nilai->auto}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="muto" value="{{$nilai->muto}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="timeo" value="{{$nilai->timeo}}" /><input type="text" class="form-control" name="tmdo" value="{{$nilai->tmdo}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayao" value="{{$nilai->biayao}}" /></td>
                </tr>
                <tr>
                    <td align="center">16</td>
                    <td align="center" colspan="2">
                    <?php $id_kp = $nilai['id_kp'] ?>
                    <select class="form-control" id="id_kp" name="id_kp">
                        @foreach ($data as $k)
                        <option value="{{$k->id_kegiatan}}" {{ $id_kp == $k->id_kegiatan ? 'selected' : '' }}>{{$k->nama_kegiatan}}</option>
                        @endforeach
                    </select>
                    </td>
                    <td align="center"><input type="text" class="form-control" name="akp" value="{{$nilai->akp}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="kup" value="{{$nilai->kup}}" /><input type="text" class="form-control" name="outp" value="{{$nilai->autp}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="mutp" value="{{$nilai->mutp}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="timep" value="{{$nilai->timep}}" /><input type="text" class="form-control" name="tmdp" value="{{$nilai->tmdp}}" /></td>
                    <td align="center"><input type="text" class="form-control" name="biayap" value="{{$nilai->biayap}}" /></td>
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