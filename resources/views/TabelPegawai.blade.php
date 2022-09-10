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
        @foreach( $user as $p )
            <tr>
                <td>{{$p->nama_pegawai}}</td>
                <td>{{$p->nip_pegawai}}</td>
                <td>{{$p->jenis_jabatan}}</td>
                <td>{{$p->jenis_pangkat_golongan}}</td>
                <td>{{$p->nama_units_kerja}}</td>
                @if ($p->hak_akses == 1)
                <td>Dinilai</td>
                @else
                <td>Penilai</td>
                @endif
                <td class="actions">
                    <a href="update/{{$p->id}}/pegawai" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
        </tfoot>
    </table>
          </div>
        </div>
        <!-- End Panel Table Tools -->

    </div>
</div>

<!-- End Page -->
@endsection
