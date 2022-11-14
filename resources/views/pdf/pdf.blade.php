
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Dashboard | SKP Universitas Musamus</title>
  
  </head>
  <body class="animsition site-navbar-small ">
    <!-- Page -->
    <div class="page">
      <div class="page-content">
        @yield('container')
        <!-- <h2>Blank</h2>
        <p>Page content goes here</p> -->
      </div>
    </div>
    <!-- End Page -->
    <!-- Core  -->
    <script src="{{asset('classic/global/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
    <script src="{{asset('classic/global/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('classic/global/vendor/popper-js/umd/popper.min.js')}}"></script>
    <script src="{{asset('classic/global/vendor/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('classic/global/vendor/animsition/animsition.js')}}"></script>
    <script src="{{asset('classic/global/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('classic/global/vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
    <script src="{{asset('classic/global/vendor/asscrollable/jquery-asScrollable.js')}}"></script>
    
    <!-- Plugins -->
    <script src="{{asset('classic/global/vendor/switchery/switchery.js')}}"></script>
    <script src="{{asset('classic/global/vendor/intro-js/intro.js')}}"></script>
    <script src="{{asset('classic/global/vendor/screenfull/screenfull.js')}}"></script>
    <script src="{{asset('classic/global/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
    <script src="{{asset('classic/global/vendor/datatables.net/jquery.dataTables.js')}}"></script>
        <script src="{{asset('classic/global/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

    
    <!-- Scripts -->
    <script src="{{asset('classic/global/js/Component.js')}}"></script>
    <script src="{{asset('classic/global/js/Plugin.js')}}"></script>
    <script src="{{asset('classic/global/js/Base.js')}}"></script>
    <script src="{{asset('classic/global/js/Config.js')}}"></script>
    
    <script src="{{asset('classic/topbar/assets/js/Section/Menubar.js')}}"></script>
    <script src="{{asset('classic/topbar/assets/js/Section/Sidebar.js')}}"></script>
    <script src="{{asset('classic/topbar/assets/js/Section/PageAside.js')}}"></script>
    <script src="{{asset('classic/topbar/assets/js/Plugin/menu.js')}}"></script>
    
    <!-- Config -->
    <script src="{{asset('classic/global/js/config/colors.js')}}"></script>
    <script src="{{asset('classic/topbar/assets/js/config/tour.js')}}"></script>
    <script>Config.set('assets', "{{asset('classic/topbar/assets')}}");</script>
    
    <!-- Page -->
    <script src="{{asset('classic/topbar/assets/js/Site.js')}}"></script>
    <script src="{{asset('classic/global/js/Plugin/asscrollable.js')}}"></script>
    <script src="{{asset('classic/global/js/Plugin/slidepanel.js')}}"></script>
    <script src="{{asset('classic/global/js/Plugin/switchery.js')}}"></script>
        <script src="{{asset('classic/global/js/Plugin/jquery-placeholder.js')}}"></script>
        <script src="{{asset('classic/global/js/Plugin/material.js')}}"></script>

        <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>    
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>

    <!-- TABEL JABATAN -->
    <script>
        $(document).ready(function () {
        $('#jabatan').DataTable();
    });
    </script>

    <!-- TABEL PANGKAT GOLONGAN -->
    <script>
        $(document).ready(function () {
        $('#pangkatgol').DataTable();
    });
    </script>

    <!-- TABEL UNIT KERJA -->
    <script>
        $(document).ready(function () {
        $('#unitkerja').DataTable();
    });
    </script>

    <!-- TABEL KEGIATAN -->
    <script>
        $(document).ready(function () {
        $('#kegiatan').DataTable();
    });
    </script>

    <!-- TABEL SKP -->
    <script>
        $(document).ready(function () {
        $('#skp').DataTable();
    });
    </script>
    @stack('scripts')
    
  </body>
</html>
