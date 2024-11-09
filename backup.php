<?php 
   session_start();
    if (!isset($_SESSION["hakpetugas"])) {

      echo "
                <script> 
                
                alert('Anda Harus Login Sebagai Admin!!');
                window.location.href= 'index.php';

                </script> 
            ";

      exit;  
    }
    require_once  ('functions.php');

     
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SI Darul Jannah</title>

    <link href="assets/img/logo2.png" rel="icon">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

</head>


<body id="page-top">

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #0a9d58 ;" >

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                 
                </div>
                <div class="sidebar-brand-text mx-3">SI Darul Jannah </div>
            </a>

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
           <li class="nav-item">
                <a class="nav-link" href="halaman.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="?page=santri">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Santri</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

      		<li class="nav-item">
                <a class="nav-link" href="?page=kegiatan">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Jadwal Kegiatan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link collapsed" href="?page=" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Keuangan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"> >></h6>
                        <a class="collapse-item" href="?page=biaya">Biaya Utama</a>
                        <a class="collapse-item" href="?page=keuangan">Keuangan Santri</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="?page=santri">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Laporan</span></a>
            </li>
<!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            
                        </li>

                        <!-- Nav Item - Messages -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['namapetugas']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>



                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- main Content Row -->
                    <div class="row" >
                          
                        
                    	<?php
                            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                            $page = $_GET['page'];
                            $aksi = $_GET['aksi'];

                            if($page == "santri"){
                                if ($aksi == ""){
                                    include "page/santri/santri.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/santri/tambah.php";
                                }elseif ($aksi == "edit") {
                                    include "page/santri/edit.php";
                                }elseif ($aksi== "hapus") {
                                    include "page/santri/hapus.php";
                                }elseif ($aksi== "detail") {
                                    include "page/santri/detail.php";
                                }elseif ($aksi== "aktivasi") {
                                    include "page/santri/aktivasi.php";
                                }elseif ($aksi== "see") {
                                    include "page/santri/see_keuangan.php";
                                }
                            } elseif ($page == "biaya") {
                                if ($aksi == "") {
                                    include "page/biaya/biaya.php";
                                }elseif ($aksi=="tambah") {
                                    include "page/biaya/tambah.php";
                                }elseif ($aksi=="hapus") {
                                    include "page/biaya/hapus.php";
                                }elseif ($aksi=="edit") {
                                    include "page/biaya/edit.php";
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
                            } elseif ($page == "keuangan") {
                                if ($aksi =="") {
                                    include "page/keuangan/keuangan.php";                 
                                 }elseif ($aksi=="detail") {
                                     include "page/keuangan/detail.php";
                                 }elseif ($aksi=="hapus") {
                                     include "page/keuangan/hapus.php";
                                 }elseif ($aksi=="lunas") {
                                     include "page/keuangan/lunas.php";
                                 }elseif ($aksi=="tambah") {
                                    include "page/keuangan/tambah.php";
                                }
                            } elseif ($page == "kegiatan") {
                                if ($aksi =="") {
                                    include "page/kegiatan/kegiatan.php";                 
                                 }
                            } elseif($page == ""){                       
                                    include "home.php";                                              
                            }
                        ?>
                        
                    </div>

                    <!-- Content Row -->


                    <!-- Content Row -->
           
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#selectOption').select2();
    });
    $(document).ready(function() {
      $('#selectOption2').select2();
    });
  </script>

</body>

</html>