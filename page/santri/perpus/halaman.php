<?php 
   session_start();

    require_once  ('functions.php');

     
 ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perpustakaan | Sho_dev</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<style type="">
	body{
		background-image: url('dist/img/back.png');
	}
</style>

<div class="wrapper">

  <!-- loading scrren -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/MBUHLAH.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="halaman.php" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        
        <div class="">
          <form class="form-inline">
            <div>
            	<a href="logout.php" 
                class=" btn btn-block btn-outline-danger" ><i class="icon fas fa-ban"></i> Log Out </a>
            </div>
          </form>
        </div>
      </li>


      <li>
      	<!-- BUTTON-->
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/MBUHLAH.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Perpustakaan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/cok.png
          " class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nama'] ?></a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="halaman.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=buku" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Daftar Buku
                <span class="badge badge-info right"> 1 </span>
              </p>
            </a>
          </li>

         

          <li class="nav-item">
            <a href="?page=anggota" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Daftar Anggota
                <span class="badge badge-info right"> 9 </span>
              </p>
            </a>
           
          </li>
  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?page=peminjaman" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peminjaman Buku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=pendapatan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengembalian Buku</p>
                </a>
              </li>
          	</ul>
      		</li>
          <li class="nav-item">
            <a href="?page=laporan" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
                <span class="badge badge-info right"> 9 </span>
              </p>
            </a>
           
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


    <section class="content">
      <div class="container-fluid">

			<?php
                            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                            $page = $_GET['page'];
                            $aksi = $_GET['aksi'];

                            if($page == "anggota"){
                                if ($aksi == ""){
                                    include "page/anggota/anggota.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/anggota/tambah.php";
                                }elseif ($aksi == "edit") {
                                    include "page/anggota/edit.php";
                                }elseif ($aksi== "hapus") {
                                    include "page/anggota/hapus.php";
                                }
                            } elseif ($page == "buku") {
                                if ($aksi == "") {
                                    include "page/buku/buku.php";  
                                }elseif ($aksi == "edit") {
                                   include "page/buku/edit.php";
                                }
                            } elseif ($page == "peminjaman") {
                                if ($aksi == "") {
                                    include "page/peminjaman/peminjaman.php";
                                }elseif ($aksi=="tambah") {
                                    include "page/peminjaman/tambah.php";
                                }elseif ($aksi=="hapus") {
                                    include "page/peminjaman/hapus.php";
                                }elseif ($aksi=="ubah") {
                                    include "page/peminjaman/ubah.php";
                                }
                            } elseif ($page == "laporan") {
                                if ($aksi =="") {
                                    include "page/laporan/laporan.php";                 
                                 }elseif ($aksi=="tambah") {
                                     include "page/laporan/tambah.php";
                                 }elseif ($aksi=="hapus") {
                                     include "page/laporan/hapus.php";
                                 }elseif ($aksi=="ubah") {
                                     include "page/laporan/ubah.php";
                                 }
                            } elseif ($page == "kelas") {
                                if ($aksi =="") {
                                    include "page/kelas/kelas.php";                 
                                 }elseif ($aksi=="tambah") {
                                     include "page/kelas/tambah.php";
                                 }elseif ($aksi=="hapus") {
                                     include "page/kelas/hapus.php";
                                 }elseif ($aksi=="ubah") {
                                     include "page/kelas/ubah.php";
                                 }
                            } elseif($page == ""){
                                include "home.php";
                            }
                        ?>
         </div>
         
    </div>
</section>
      
 <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2022-2023 <a href="https://Sho | Dev">Sho|Dev.Io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper --> 

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
