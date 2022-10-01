<div class="page-content container-fluid">
    <div class="row">
      
    <div class="col-md-12">
        <!-- Panel Floating Labels -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title" style="text-align:center">DATA SASARAN KERJA PEGAWAI</h3>
          </div>
          <div class="panel-body container-fluid">
            <table border="1" class="table table-striped table-bordered">

                <tr>
                    <td style="font-weight:bold; text-align: center;">1</td>
                    <td colspan="3" style="font-weight:bold">YANG DINILAI</td>
                </tr>
                <tr>
                    <td></td>
                    <td>a. NAMA</td>
                    <td style="text-align: center;">:</td>
                    <td>
                      <select class="form-control" id="id_dinilai" name="id_dinilai">
                        {{-- @foreach ($user as $skp) 
                         <option value="{{$skp->id}}">{{$skp->nama_pegawai}}</option> 
                        @endforeach --}}
                      </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. NIP</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="nip_dinilai" id="nudi">
                        <p id="label-nip"></p>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_godi" id="gudi">
                    <p id="label-golongan"></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td>d. Jabatan</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_jadi" id="judi"> 
                    <p id="label-jabatan"></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td>e. Unit Kerja</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_udi" id="udi">
                  <p id="label-unit"></p></td>
                </tr>
                <tr>
                    <td style="font-weight:bold; text-align: center;">2</td>
                    <td colspan="3" style="font-weight:bold">PEJABAT PENILAI</td>
                </tr>
                <tr>
                    <td></td>
                    <td>a. NAMA</td>
                    <td style="text-align: center;">:</td>
                    <td>
                      <select class="form-control" id="id_penilai" name="id_penilai">
                        {{-- @foreach ($user as $s)
                        <option value="{{$s->id}}">{{$s->nama_pegawai}}</option>
                        @endforeach --}}
                      </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. NIP/NIK</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="nip_penilai" id="nip_penilai">
                        <p id="label-nip-penilai"></p>
                      </td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_gope" id="id_gope">
                        <p id="label-id-gope"></p>
                      </td>
                </tr>
                <tr>
                    <td></td>
                    <td>d. Jabatan</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_jape" id="id_jape">
                        <p id="label-id-jape"></p>
                      </td>
                </tr>
                <tr>
                    <td></td>
                    <td>e. Unit Kerja</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_upe" id="id_upe">
                        <p id="label-id-upe"></p>
                      </td>
                </tr>
                <tr>
                    <td style="font-weight:bold; text-align: center;">3</td>
                    <td colspan="3" style="font-weight:bold">ATASAN PEJABAT PENILAI</td>
                </tr>
                <tr>
                    <td></td>
                    <td>a. NAMA</td>
                    <td style="text-align: center;">:</td>
                    <td>
                    <select class="form-control" id="id_app" name="id_app">
                        {{-- @foreach ($user as $app)
                        <option value="{{$app->id}}">{{$app->nama_pegawai}}</option>
                        @endforeach --}}
                      </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. NIP/NIK</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="nip_app" id="nip_app">
                  <p id="label-nip-app"></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Pangkat/Gol. Ruang</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_gpp" id="id_gpp">
                  <p id="label-id-gpp"></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td>d. Jabatan</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_jpp" id="id_jpp">
                  <p id="label-id-jpp"></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td>e. Unit Kerja</td>
                    <td style="text-align: center;">:</td>
                    <td><input type="hidden" name="id_upp" id="id_upp">
                  <p id="label-id-upp"></p></td>
                </tr>
            </table>
            <br>
           </form>   
          </div>
        </div>
        <!-- End Panel Floating Labels -->
      </div>
    </div>
  </div>