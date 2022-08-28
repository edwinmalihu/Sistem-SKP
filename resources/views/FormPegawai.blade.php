@extends('layout')

@section('container')
<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Form Pegawai</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Pegawai</a></li>
      <li class="breadcrumb-item active">Tambah Pegawai</li>
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
            <h3 class="panel-title">Input Data Pegawai</h3>
          </div>
          <div class="panel-body container-fluid">
            <form autocomplete="off">
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="inputFloatingText" />
                <label class="floating-label">Nama</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="inputFloatingText" />
                <label class="floating-label">Nomor Induk Pegawai</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="text" class="form-control" name="inputFloatingText" />
                <label class="floating-label">Nomor Induk Kependudukan</label>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select">Pilih Pangkat dan Golongan</label>
                    <select class="form-control" id="select">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select">Pilih Jabatan</label>
                    <select class="form-control" id="select">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select">Pilih Unit Kerja</label>
                    <select class="form-control" id="select">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select">Jenis User / Pegawai</label>
                    <select class="form-control" id="select">
                      <option>Admin</option>
                      <option>Dosen</option>
                      <option>Ketua Jurusan</option>
                      <option>Dekan</option>
                    </select>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select">Hak Akses</label>
                    <select class="form-control" id="select">
                      <option>Dinilai</option>
                      <option>Penilai</option>
                    </select>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="password" class="form-control" name="password" />
                <label class="floating-label">Kata Sandi</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="password" class="form-control" name="password" />
                <label class="floating-label">Konfirmasi Kata Sandi</label>
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