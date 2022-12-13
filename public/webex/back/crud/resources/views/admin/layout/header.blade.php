<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrator | Dashboard </title>

  <!-- Google Font: Source Sans Pro -->
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">

  <link rel="shortcut icon" href="{{asset('/logoeskul/smea.png')}}">

  <link rel="icon" type="image/x-icon" href="{{asset('/logoeskul/smea.ico')}}">

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('logoeskul/smea.png')}}" alt="AdminLTELogo" height="180" width="180">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{asset('logoeskul/smea.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Webeskul</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('template/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          {{-- @foreach ($data as $row) --}}
          <li class="nav-item">
            <a href="/badminton" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                BADMINTON
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/basket" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                BASKET
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/broadcast" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                BROADCAST
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/deutschclub" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                DEUTSCHCLUB
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/englishclub" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                ENGLISHCLUB
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/futsalputra" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                FUTSALPUTRA
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/futsalputri" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                FUTSALPUTRI
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/hockey" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                HOCKEY
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/irma" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                IRMA
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/itclub" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                ITCLUB
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/japanclub" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                JAPANCLUB
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/karate" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                KARATE
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/karawitan" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                KARAWITAN
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/kir" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                KIR
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/kopsis" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                KOPSIS
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/koreanclub" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                KOREANCLUB
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/mpk" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                mpk
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/osis" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                osis
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/paduansuara" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                paduansuara
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/paskibra" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                paskibra
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pks" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                pks
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pmr" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                pmr
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pramuka" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                pramuka
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/senikriya" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                senikriya
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/senimusik" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                senimusik
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/senitari" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                senitari
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/sepakbola" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                sepakbola
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/silat" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                silat
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/taekwondo" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                taekwondo
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/tarungderajat" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                tarungderajat
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/teater" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                teater
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/volly" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                volly
                {{-- {{$row->nama_eskul}} --}}
              </p>
            </a>
          </li>
          

          {{-- @endforeach --}}
          
          
        </ul>

        
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


  @yield('content')

  

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://smknegeri1garut.sch.id">SMKN 1 GARUT.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('template/dist/js/adminlte.js')}}"></script>

<!-- PAGE {{asset('template/')}}PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('template/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('template/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('template/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('template/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('template/plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('template/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('template/dist/js/pages/dashboard2.js')}}"></script>

