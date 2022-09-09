@extends('layout')

@section('container')
<!-- Page -->
<div class="page">
<div class="page-header">
    <h1 class="page-title">Daftar Pegawai</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Pegawai</a></li>
      <li class="breadcrumb-item active">Daftar Pegawai</li>
    </ol>
  </div>

  <div class="page-content">
        <!-- Panel Table Tools -->
        <div>
            <a class="btn btn-primary" href="/formpegawai" role="button">Tambah Pegawai</a>
        </div>
        <br>

        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title" role="button">Tabel Pegawai</h3>
        </header>       

        <div class="panel-body">
          <table id="jabatan" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nama Pegawai</th>
                <th>Nomor Induk Pegawai</th>
                <th>Jabatan</th>
                <th>Pangkat / Golongan</th>
                <th>Unit Kerja</th>
                <th>Hak Akses</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td class="actions">
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                </td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td class="actions">
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                </td>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td class="actions">
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                </td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td class="actions">
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                </td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td class="actions">
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Nama Pegawai</th>
                <th>Nomor Induk Pegawai</th>
                <th>Jabatan</th>
                <th>Pangkat / Golongan</th>
                <th>Unit Kerja</th>
                <th>Hak Akses</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
          </div>
        </div>
        <!-- End Panel Table Tools -->

    </div>
</div>

<!-- End Page -->
@endsection
