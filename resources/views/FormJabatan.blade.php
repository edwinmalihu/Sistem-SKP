    @extends('layout')

    @section('container')
    <!-- Page -->
    <div class="page">
      <div class="page-header">
        <h1 class="page-title">Form Jabatan</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
          <li class="breadcrumb-item active">Tambah Jabatan</li>
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
                <h3 class="panel-title">Input Jabatan</h3>
              </div>
              <div class="panel-body container-fluid">
                <form autocomplete="off">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="inputFloatingText" />
                    <label class="floating-label">Jabatan</label>
                    <br>
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