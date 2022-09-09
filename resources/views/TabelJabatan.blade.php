@extends('layout')

@section('container')
<!-- Page -->
<div class="page">
<div class="page-header">
    <h1 class="page-title">Daftar Jabatan</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
      <li class="breadcrumb-item active">Daftar Jabatan</li>
    </ol>
  </div>

  <div class="page-content">
        <!-- Panel Table Tools -->

        <div>
            <a class="btn btn-primary" href="/formjabatan" role="button">Tambah Jabatan</a>
        </div>
        <br>
        
        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title" role="button">Tabel Jabatan</h3>
        </header>       


        <div class="panel-body">
          <table id="jabatan" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Jabatan</th>
                <th>Tanggal Input</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
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
                <td class="actions">
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                </td>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td class="actions">
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                </td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td class="actions">
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                </td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td class="actions">
                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Jabatan</th>
                <th>Tanggal Input</th>
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
