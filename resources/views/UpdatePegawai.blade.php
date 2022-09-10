@extends('layout')

@section('container')
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Form Edit Pegawai</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Pegawai</a></li>
      <li class="breadcrumb-item active">Edit Pegawai</li>
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
            <h3 class="panel-title">Edit Data Pegawai</h3>
          </div>
          <div class="panel-body container-fluid">
            <form autocomplete="off" action="/edit/{{$pegawai->id}}" method="post">
              @method('patch')
              @csrf
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="nama_pegawai" value="{{$pegawai->nama_pegawai}}" />
                <label class="floating-label">Nama Pegawai</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="nik_pegawai" value="{{$pegawai->nik_pegawai}}"/>
                <label class="floating-label">Nomor Induk Kependudukan</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="nip_pegawai" value="{{$pegawai->nip_pegawai}}" readonly />
                <label class="floating-label">Nomor Induk Pegawai</label>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select">Pilih Pangkat dan Golongan</label>
                    <?php $pangkat_golongan = $pegawai['id_pangkat_golongan'] ?>
                    <select class="form-control" id="select" name="id_pangkat_golongan">
                    @foreach($pangkat as $p)
                       <option value="{{$p->id_pangkat_golongan}}" {{ $pangkat_golongan == $p->id_pangkat_golongan ? 'selected' : '' }}>{{$p->jenis_pangkat_golongan}}</option>
                    @endforeach
                    </select>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select">Pilih Jabatan</label>
                    <?php $j_pegawai = $pegawai['id_jabatan'] ?>
                    <select class="form-control" id="select" name="id_jabatan">
                    @foreach($jabatan as $j)
                       <option value="{{$j->id_jabatan}}" {{ $j_pegawai == $j->id_jabatan ? 'selected' : '' }}>{{$j->jenis_jabatan}}</option>
                    @endforeach
                    </select>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select">Pilih Unit Kerja</label>
                    <?php $u_pegawai = $pegawai['id_unit_kerja'] ?>
                    <select class="form-control" id="select" name="id_unit_kerja">
                    @foreach($unit as $u)
                       <option value="{{$u->id_units}}" {{ $u_pegawai == $u->id_units ? 'selected' : '' }}>{{$u->nama_units_kerja}}</option>
                    @endforeach
                    </select>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select">Jenis User / Pegawai</label>
                    <select class="form-control" id="select" name="jenis_pegawai">
                      <option value="admin" {{ $pegawai->jenis_pegawai == 'admin' ? 'selected' : '' }}>Admin</option>
                      <option value="Dosen" {{ $pegawai->jenis_pegawai == 'Dosen' ? 'selected' : '' }}>Dosen</option>
                      <option value="Kajur" {{ $pegawai->jenis_pegawai == 'Kajur' ? 'selected' : '' }}>Ketua Jurusan</option>
                      <option value="Dekan" {{ $pegawai->jenis_pegawai == 'Dekan' ? 'selected' : '' }}>Dekan</option>
                    </select>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select">Hak Akses</label>
                    <select class="form-control" id="select" name="hak_akses">
                      <option value="1" {{ $pegawai->hak_akses == 1 ? 'selected' : '' }}>Dinilai</option>
                      <option value="2" {{ $pegawai->hak_akses == 2 ? 'selected' : '' }}>Penilai</option>
                    </select>
              </div>
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