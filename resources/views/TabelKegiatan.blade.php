@extends('layout')

@section('container')
<!-- Page -->
<div class="page">
<div class="page-header">
    <h1 class="page-title">Daftar Kegiatan</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
      <li class="breadcrumb-item active">Daftar Kegiatan</li>
    </ol>
  </div>

  <div class="page-content">
        <!-- Panel Table Tools -->

        <div>
            <a class="btn btn-primary" href="/formkegiatan" role="button">Tambah Kegiatan</a>
        </div>
        <br>

        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title" role="button">Tabel Kegiatan</h3>
        </header>       

        <div class="panel-body">
          <table id="kegiatan" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Kegiatan</th>
                <th>Tanggal Input</th>
                <th>Tanggal Update</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kegiatan as $k)
            <tr>
                <td>{{$k->nama_kegiatan}}</td>
                <td>{{$k->created_at}}</td>
                <td>{{$k->updated_at}}</td>
                <td class="actions">
                    <a href="/updatekegiatan/{{$k->id_kegiatan}}/kegiatan" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
          </div>
        </div>
        <!-- End Panel Table Tools -->

    </div>
</div>

<!-- End Page -->
@endsection
