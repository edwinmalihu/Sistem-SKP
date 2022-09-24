@extends('layout')

@section('container')
<!-- Page -->
<div class="page">
<div class="page-header">
    <h1 class="page-title">Daftar Data SKP</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">SKP</a></li>
      <li class="breadcrumb-item active">Daftar Data SKP</li>
    </ol>
  </div>

  <div class="page-content">
        <!-- Panel Table Tools -->

        <div>
            <a class="btn btn-primary" href="/formdataskp" role="button">Tambah Data SKP</a>
        </div>
        <br>
        
        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title" role="button">Tabel Data SKP</h3>
        </header>       


        <div class="panel-body">
          <table id="skp" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nama Pegawai</th>
                <th>Nomor Induk Pegawai</th>
                <th>Pejabat Penilai</th>
                <th>Atasan Pejabat Penilai</th>
                <th>Semester</th>
                <th>Tahun</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="actions">
                    <a href="/updatedataskp" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                      <a href="/printdataskp" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Lihat"><i class="icon wb-eye" aria-hidden="true"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
          </div>
        </div>
        <!-- End Panel Table Tools -->

    </div>
</div>

<!-- End Page -->
@endsection
