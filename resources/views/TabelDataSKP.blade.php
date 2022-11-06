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
                <th>Periode</th>
                <th>Tahun</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($dataSkp as $data)
            <tr>
                <td>{{$data->nama_dinilai}}</td>
                <td>{{$data->nip_dinilai}}</td>
                <td>{{$data->nama_penilai}}</td>
                <td>{{$data->nama_pejabat}}</td>
                <td>{{$data->periode}}</td>
                <td>{{$data->thn}}</td>
                <td class="actions">
                  <!-- DATA SKP -->
                    <a href="/updatedataskp/{{$data->idData}}/edit" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit Data SKP"><i class="icon wb-edit" aria-hidden="true"></i></a>
                    <a href="/detail-skp/{{$data->idData}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Lihat Data SKP"><i class="icon wb-eye" aria-hidden="true"></i></a>
                    
                    <!-- NILAI SKP -->
                    <a href="/forminputnilaiskp/{{$data->idData}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Tambah Nilai SKP"><i class="icon wb-plus" aria-hidden="true"></i></a>
                    <a href="/updateinputnilaiskp/{{$data->idData}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit Nilai SKP"><i class="icon wb-edit" aria-hidden="true"></i></a>
                    <a href="/detail-nilaiskp/{{$data->idData}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Lihat Nilai SKP"><i class="icon wb-eye" aria-hidden="true"></i></a>

                    <!-- Realisasi -->
                    <a href="/formperhitunganskp/{{$data->idData}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Tambah Nilai Realisasi"><i class="icon wb-plus" aria-hidden="true"></i></a>
                    <a href="/updateperhitunganskp/{{$data->idData}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit Nilai Realisasi"><i class="icon wb-edit" aria-hidden="true"></i></a>
                    <a href="/printperhitunganskp/{{$data->idData}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Lihat Nilai Realisasi"><i class="icon wb-eye" aria-hidden="true"></i></a>
                      
                    <!-- Perilaku Kerja -->
                    <a href="/formperilakukerja" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Tambah Perilaku Kerja"><i class="icon wb-plus" aria-hidden="true"></i></a>
                    <a href="/updateperilakukerja" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit Perilaku Kerja"><i class="icon wb-edit" aria-hidden="true"></i></a>
                    <a href="/detail-perilakukerja" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Lihat Perilaku Kerja"><i class="icon wb-eye" aria-hidden="true"></i></a>

                    <!-- Penilaian Kerja -->
                    <a href="/detailpenilaian" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Lihat Penilaian Kerja"><i class="icon wb-eye" aria-hidden="true"></i></a>
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
