
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Dashboard | SKP Universitas Musamus</title>
    
    <link rel="apple-touch-icon" href="{{asset('classic/topbar/assets/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('classic/topbar/assets/images/unmus.png')}}">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('classic/global/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('classic/global/css/bootstrap-extend.min.css')}}">
    <link rel="stylesheet" href="{{asset('classic/topbar/assets/css/site.min.css')}}">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
      
    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('classic/global/vendor/animsition/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('classic/global/vendor/asscrollable/asScrollable.css')}}">
    <link rel="stylesheet" href="{{asset('classic/global/vendor/switchery/switchery.css')}}">
    <link rel="stylesheet" href="{{asset('classic/global/vendor/intro-js/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('classic/global/vendor/slidepanel/slidePanel.css')}}">
    <link rel="stylesheet" href="{{asset('classic/global/vendor/flag-icon-css/flag-icon.css')}}">
  
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('classic/global/fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('classic/global/fonts/brand-icons/brand-icons.min.css')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="{{asset('classic/global/vendor/html5shiv/html5shiv.min.js')}}"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="{{asset('classic/global/vendor/media-match/media.match.min.js')}}"></script>
    <script src="{{asset('classic/global/vendor/respond/respond.min.js')}}"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="{{asset('classic/global/vendor/breakpoints/breakpoints.js')}}"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition site-navbar-small ">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse"
      role="navigation">
    
      <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
          data-toggle="menubar">
          <span class="sr-only">Toggle navigation</span>
          <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <a class="navbar-brand navbar-brand-center" href="../index.html">
          <img class="navbar-brand-logo navbar-brand-logo-normal" src="{{asset('classic/topbar/assets/images/unmus.png')}}"
            title="Universitas Musamus">
          <img class="navbar-brand-logo navbar-brand-logo-special" src="{{asset('classic/topbar/assets/images/unmus.png')}}"
            title="Universitas Musamus">
          <span class="navbar-brand-text hidden-xs-down"> Universitas Musamus</span>
        </a>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
          data-toggle="collapse">
          <span class="sr-only">Toggle Search</span>
          <i class="icon wb-search" aria-hidden="true"></i>
        </button>
      </div>
    
      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
            <li class="nav-item hidden-float" id="toggleMenubar">
              <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
            </li>
            <!-- <li class="nav-item hidden-sm-down" id="toggleFullscreen">
              <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                <span class="sr-only">Toggle fullscreen</span>
              </a>
            </li> -->
            <!-- <li class="nav-item hidden-float">
              <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                role="button">
                <span class="sr-only">Toggle Search</span>
              </a>
            </li> -->
          </ul>
          <!-- End Navbar Toolbar -->
    
          <!-- Navbar Toolbar Right -->
          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
    
            <li class="nav-item dropdown">
              <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                data-animation="scale-up" role="button"> Admin
                <span class="avatar avatar-online">
                  <img src="{{asset('classic/global/portraits/5.jpg')}}" alt="...">
                  <i></i>
                </span>
              </a>
              <div class="dropdown-menu" role="menu">
              <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</button>
                </form>
              </div>
            </li>
   
          </ul>
          <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
    
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
          <form role="search">
            <div class="form-group">
              <div class="input-search">
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                  data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
    </nav>    <div class="site-menubar site-menubar-light">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">General</li>
              <li class="dropdown site-menu-item has-sub">
                <a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
                        <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                        <span class="site-menu-title">Pegawai</span>
                            <span class="site-menu-arrow"></span>
                    </a>
                <div class="dropdown-menu">
                  <div class="site-menu-scroll-wrap is-list">
                    <div>
                      <div>
                        <ul class="site-menu-sub site-menu-normal-list">
                          <li class="site-menu-item">
                            <a class="animsition-link" href="/tabelpegawai">
                              <span class="site-menu-title">Daftar Pegawai</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="dropdown site-menu-item has-sub">
                <a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
                        <i class="site-menu-icon wb-extension" aria-hidden="true"></i>
                        <span class="site-menu-title">Kategori</span>
                            <span class="site-menu-arrow"></span>
                    </a>
                <div class="dropdown-menu">
                  <div class="site-menu-scroll-wrap is-list">
                    <div>
                      <div>
                        <ul class="site-menu-sub site-menu-normal-list">
                          <li class="site-menu-item">
                            <a class="animsition-link" href="/tabeljabatan">
                              <span class="site-menu-title">Daftar Jabatan</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="/tabelpangkatgolongan">
                              <span class="site-menu-title">Daftar Pangkat / Golongan</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="/tabelunitkerja">
                              <span class="site-menu-title">Daftar Unit Kerja</span>
                            </a>
                          </li>
                          <li class="site-menu-item">
                            <a class="animsition-link" href="/tabelkegiatan">
                              <span class="site-menu-title">Daftar Kegiatan</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="site-menu-category">Apps</li>
              <li class="dropdown site-menu-item has-sub">
                <a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
                        <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                        <span class="site-menu-title">SKP</span>
                            <span class="site-menu-arrow"></span>
                    </a>
                <div class="dropdown-menu">
                  <div class="site-menu-scroll-wrap is-list">
                    <div>
                      <div>
                        <ul class="site-menu-sub site-menu-normal-list">
                          <!-- <li class="site-menu-item">
                            <a class="animsition-link" href="/tabelskp">
                              <span class="site-menu-title">Daftar SKP</span>
                            </a>
                          </li> -->
                          <li class="site-menu-item">
                            <a class="animsition-link" href="/tabeldataskp">
                              <span class="site-menu-title">Daftar Data SKP</span>
                            </a>
                          </li>
                          <!-- <li class="site-menu-item">
                            <a class="animsition-link" href="/tabelskp">
                              <span class="site-menu-title">Cover SKP</span>
                            </a>
                          </li> -->
                          <!-- <li class="site-menu-item">
                            <a class="animsition-link" href="/tabelskp">
                              <span class="site-menu-title">Pengukuran SKP</span>
                            </a>
                          </li> -->
                          <!-- <li class="site-menu-item">
                            <a class="animsition-link" href="/tabelskp">
                              <span class="site-menu-title">Perilaku Kerja</span>
                            </a>
                          </li> -->
                          <!-- <li class="site-menu-item">
                            <a class="animsition-link" href="/tabelskp">
                              <span class="site-menu-title">Penilaian</span>
                            </a>
                          </li> -->
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>      </div>
        </div>
      </div>
    </div>

    <!-- Page -->
    <div class="page">
      <div class="page-content">
        @yield('container')
        <!-- <h2>Blank</h2>
        <p>Page content goes here</p> -->
      </div>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
      <div class="site-footer-right">
        Crafted with <i class="red-600 wb wb-heart"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
      </div>
    </footer>
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
