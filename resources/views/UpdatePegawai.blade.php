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
            <form autocomplete="off" action="/create-pegawai" method="post">
              @csrf
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="nama_pegawai" />
                <label class="floating-label">Nama Pegawai</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="nik_pegawai" />
                <label class="floating-label">Nomor Induk Kependudukan</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="nip_pegawai" />
                <label class="floating-label">Nomor Induk Pegawai</label>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select">Pilih Pangkat dan Golongan</label>
                    <select class="form-control" id="select" name="id_pangkat_golongan">
                    @foreach($pangkat as $p)
                       <option value="{{$p->id_pangkat_golongan}}">{{$p->jenis_pangkat_golongan}}</option>
                    @endforeach
                    </select>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select">Pilih Jabatan</label>
                    <select class="form-control" id="select" name="id_jabatan">
                    @foreach($jabatan as $j)
                       <option value="{{$j->id_jabatan}}">{{$j->jenis_jabatan}}</option>
                    @endforeach
                    </select>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select">Pilih Unit Kerja</label>
                    <select class="form-control" id="select" name="id_unit_kerja">
                    @foreach($unit as $u)
                       <option value="{{$u->id_units}}">{{$u->nama_units_kerja}}</option>
                    @endforeach
                    </select>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select">Jenis User / Pegawai</label>
                    <select class="form-control" id="select" name="jenis_pegawai">
                      <option value="admin">Admin</option>
                      <option value="Dosen">Dosen</option>
                      <option value="Kajur">Ketua Jurusan</option>
                      <option value="Dekan">Dekan</option>
                    </select>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select">Hak Akses</label>
                    <select class="form-control" id="select" name="hak_akses">
                      <option value="1">Dinilai</option>
                      <option value="2">Penilai</option>
                    </select>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="name" />
                <label class="floating-label">Username</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="password" class="form-control" name="password" />
                <label class="floating-label">Kata Sandi</label>
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