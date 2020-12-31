<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PERPUZ</title>
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/blog-home.css')}}" rel="stylesheet">
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <h2>PERPUZ</h2>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
              
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href='login'
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     {{ __('Logout') }}
                                    </a>
 
                                    <!-- <a class="dropdown-item" href='user'>User</a> -->
                                    <form id="logout-form" action="{{ ('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
          </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
            @can('user-display')
              <a class="nav-link" href="{{('home') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
              @endcan

            </li>
            <li class="nav-item {{ Route::is('bukuuser') ? 'active' : '' }}">
            @can('user-display')
              <a class="nav-link" href="{{('bukuuser') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Buku</span>
              </a>
              @endcan

            </li>
            <li class="nav-item {{ Route::is('anggota') ? 'active' : '' }}" >
            @can('manage-anggota')
              <a class="nav-link" href="{{('anggota') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Anggota</span>
              </a>
              @endcan
            </li>
            <li class="nav-item {{ Route::is('us') ? 'active' : '' }}" >
            @can('manage-user')
              <a class="nav-link" href="{{('us') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">User</span>
              </a>
              @endcan
            </li>
            <li class="nav-item {{ Route::is('buku') ? 'active' : '' }}">
            @can('manage-buku')
              <a class="nav-link" href="{{('buku') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Buku</span>
              </a>
              @endcan
            </li>
            <li class="nav-item {{ Route::is('peminjaman') ? 'active' : '' }}">
            @can('manage-peminjaman')
              <a class="nav-link" href="{{('peminjaman') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">peminjaman</span>
              </a>
              @endcan
            </li>
            <li class="nav-item {{ Route::is('pengembalian') ? 'active' : '' }}">
            @can('manage-pengembalian')
              <a class="nav-link" href="{{('pengembalian') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">pengembalian</span>
              </a>
              @endcan
            </li>
            <li class="nav-item {{ Route::is('laporan') ? 'active' : '' }}">
            @can('manage-laporan')
              <a class="nav-link" href="{{('laporan') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Laporan</span>
              </a>
              @endcan
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">@yield('title')</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    
                  </div>
                </div>
              </div>
              
            <!-- Page Title Header Ends-->
            <div class="row"style=" margin-left:2px;width:100%;">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 col-md-6">
                        <div class="d-flex">
                          <div class="wrapper">
                          @yield('content')
                          </div>
                          <div class="d-flex">
                          <div class="wrapper">
                          <div class="d-flex">
                          <div class="wrapper">
                         
                          </div>
                          
                        </div>
                          </div>
                          
                        </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © SantiUmi 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html><!DOCTYPE html>
<html lang="en">
  <head>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PERPUZ</title>
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/blog-home.css')}}" rel="stylesheet">
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <h2>PERPUZ</h2>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
              
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href='login'
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     {{ __('Logout') }}
                                    </a>
 
                                    <!-- <a class="dropdown-item" href='user'>User</a> -->
                                    <form id="logout-form" action="{{ ('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
          </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
            @can('user-display')
              <a class="nav-link" href="{{('home') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
              @endcan

            </li>
            <li class="nav-item {{ Route::is('bukuuser') ? 'active' : '' }}">
            @can('user-display')
              <a class="nav-link" href="{{('bukuuser') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Buku</span>
              </a>
              @endcan

            </li>
            <li class="nav-item {{ Route::is('anggota') ? 'active' : '' }}" >
            @can('manage-anggota')
              <a class="nav-link" href="{{('anggota') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Anggota</span>
              </a>
              @endcan
            </li>
            <li class="nav-item {{ Route::is('us') ? 'active' : '' }}" >
            @can('manage-user')
              <a class="nav-link" href="{{('us') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">User</span>
              </a>
              @endcan
            </li>
            <li class="nav-item {{ Route::is('buku') ? 'active' : '' }}">
            @can('manage-buku')
              <a class="nav-link" href="{{('buku') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Buku</span>
              </a>
              @endcan
            </li>
            <li class="nav-item {{ Route::is('peminjaman') ? 'active' : '' }}">
            @can('manage-peminjaman')
              <a class="nav-link" href="{{('peminjaman') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">peminjaman</span>
              </a>
              @endcan
            </li>
            <li class="nav-item {{ Route::is('pengembalian') ? 'active' : '' }}">
            @can('manage-pengembalian')
              <a class="nav-link" href="{{('pengembalian') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">pengembalian</span>
              </a>
              @endcan
            </li>
            <li class="nav-item {{ Route::is('laporan') ? 'active' : '' }}">
            @can('manage-laporan')
              <a class="nav-link" href="{{('laporan') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Laporan</span>
              </a>
              @endcan
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">@yield('title')</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    
                  </div>
                </div>
              </div>
              
            <!-- Page Title Header Ends-->
            <div class="row"style=" margin-left:2px;width:100%;">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 col-md-6">
                        <div class="d-flex">
                          <div class="wrapper">
                          @yield('content')
                          </div>
                          <div class="d-flex">
                          <div class="wrapper">
                          <div class="d-flex">
                          <div class="wrapper">
                         
                          </div>
                          
                        </div>
                          </div>
                          
                        </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © SantiUmi 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>