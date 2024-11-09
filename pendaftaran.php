<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SI Darul Jannah</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo2.png" rel="icon">
  <link href="assets/img/logo2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    <title>Halaman Pendaftaran</title>
    <style>
        .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
    }

    .message-box {
      background-color: #fff;
      padding: 10px;
      border-radius: 6px;
      max-width: 700px;
      text-align: center;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .message-box h2 {
      margin-top: 0;
      font-size: 24px;
      color: #333;
    }

    .message-box p {
      font-size: 18px;
      color: #666;
    }

    .message-box .btn-container {
      margin-top: 20px;
    }

    .message-box .btn-container button {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      margin-right: 10px;
    }
    .overlay_d {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
    }

    .message-box_d {
      background-color: #fff;
      padding: 10px;
      border-radius: 6px;
      max-width: 700px;
      text-align: center;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .message-box_d h2 {
      margin-top: 0;
      font-size: 24px;
      color: #333;
    }

    .message-box_d p {
      font-size: 18px;
      color: #666;
    }

    .message-box_d .btn-container_d {
      margin-top: 20px;
    }

    .message-box_d .btn-container_d button {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      margin-right: 10px;
    }
    .loader {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 3s linear infinite;
            margin: 0 auto;
            display: none;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="bg-gradient-success" >
    <div class="overlay" id="overlay">
    <div class="message-box">
      <h2>Selamat Datang di Halaman Pendaftaran</h2>
      <p>Harap pastikan Anda memasukkan data dengan benar dan sesuai dengan kondisi yang diminta.</p>
      <p>Mohon masukkan informasi yang valid dan sesuai dengan persyaratan yang tertera.</p>
      <p>Kami mohon agar Anda memeriksa kembali data yang Anda masukkan dan memastikan bahwa semuanya benar dan sesuai dengan ketentuan.</p>
      <p>Penting untuk mengisi formulir dengan data yang benar dan tepat. Mohon diperhatikan persyaratan yang disebutkan untuk memastikan kelengkapan dan keakuratan informasi yang Anda berikan.</p>
      <div class="btn-container">
        <button onclick="closeMessageBox()">OK</button>
      </div>
    </div>
  </div>
   
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">daruljannah@gmail.com</a>
      </div>
      <div class="social-links d-none d-md-block">
        <a href="" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h2 class="logo me-auto"><a href="index.html">Ponpes Darul Jannah</a></h2>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>--> 

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


<div class="container-fluid">

    <div class="card o-hidden border-0 shadow-lg my-1 bg-gradient-light ">
        <div class="card-body p-10">
            <!-- Nested Row within Card Body -->
            <div class="row"> 
 

                <div class="col-lg-12">
                    <div class="p-16">
                        <div class="section-title">
                             <h2>Pendaftaran</h2>
                              <p>Isilah data dibawah ini sesuai dengan data diri</p>
                        </div>
                        <hr>
                        <form action="" method="POST" enctype="multipart/form-data" class="user">
                            <div class="form-group row">

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                <div class="mb-2">
                                    <p>Nama Lengkap</p>
                                </div>

                                    <input type="text" name="nama" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Nama Lengkap" autocomplete="off" required >
                                </div>
                                <div class="col-sm-6">
                                <div class="mb-2">
                                    <p>Jenis Kelamin</p>
                                </div>
                                 
                                 <input type="radio"  name="jenis_kelamin" value="Laki-laki" required >
                                 Laki - laki
                                 <input type="radio" name="jenis_kelamin" value="Perempuan" required >
                                 Perempuan
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="mb-2">
                                      <p>Tempat Lahir</p>
                                    </div>
                                    <input type="text" name="tempat_lahir" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Tempat Lahir" autocomplete="off" required >
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2">
                                      <p>Tanggal Lahir</p>
                                    </div>
                                    <input type="date" name="tgl_lahir" class="form-control form-control-user" id="exampleLastName"
                                    autocomplete="off" required >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="mb-2">
                                      <p>Alamat</p>
                                    </div>
                                    <input type="text" name="alamat" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Alamat" autocomplete="off" required >
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2">
                                      <p>No Telpon</p>
                                    </div>
                                    <input type="text" name="no_telp" class="form-control form-control-user" id="exampleLastName"
                                    placeholder="No Telpon" autocomplete="off" required >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="mb-2">
                                      <p>Email</p>
                                    </div>
                                    <input type="text" name="email" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Email" autocomplete="off" required >
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2">
                                      <p>Pendidikan Terakhir</p>
                                    </div>
                                    <input type="text" name="pendidikan_terakhir" class="form-control form-control-user" id="pendidikan_terakhir"
                                    placeholder="Pendidikan Terakhir" list="list_pendidikan" autocomplete="off" required >
                                    <datalist id="list_pendidikan">
                                        <option value="SD/Sederajat"></option>
                                        <option value="SMP/Sederajat"></option>
                                        <option value="SMA/Sederajat"></option>
                                    </datalist>
                                </div>   
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="mb-2">
                                      <p>Orang Tua/Wali</p>
                                    </div>
                                    <input type="text" name="orangtua" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Orang Tua/Wali" autocomplete="off" required >
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2">
                                      <p>Upload Foto</p>
                                    </div>
                                    <input type="file" name="foto" id="foto" autocomplete="off" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="mb-2">
                                      <p>Tahun Masuk</p>
                                    </div>
                                    <?php $thnskrg = date('Y'); ?>
                                    <input type="text" name="tahun_masuk" class="form-control form-control-user" id="exampleFirstName"
                                        value="<?php echo $thnskrg; ?>" readonly required >
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2">
                                      <p>Studi</p>
                                    </div>
                                    <input type="text" name="program_studi" class="form-control form-control-user" id="exampleLastName"
                                    placeholder="Studi" list="list_studi" autocomplete="off" >
                                    <datalist id="list_studi">
                                        <option value="At-Tahfidz"></option>
                                        <option value="Bahasa Arab"></option>
                                        <option value="Madin MMA"></option>
                                        <option value="Madrasah Qur'an"></option>
                                        <option value="Pengajian Kitab Salaf"></option>

                                        
                                    </datalist>
                                </div>
                            </div>

                             <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="mb-2">
                                      <p>Pendidikan Formal </p>
                                    </div>
                                    <input type="text" name="sekolah" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Pendidikan" list="list_sekolah" autocomplete="off" >
                                    <datalist id="list_sekolah">
                                        <option value="SDI"></option>
                                        <option value="SMP BILINGUAL"></option>
                                        <option value="MMA/SMK"></option>
                                        <option value="-"></option>
                                    </datalist>
                                </div>
                                <div class="col-sm-5">
                                    <div class="mb-6">
                                      <p>Daftar</p>
                                    </div>
                                    <button onclick="showLoader()" type="submit" name="save" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                      <i class="fas fa-save fa-sm text-white-50"></i> 
                                    Daftar
                                  </button>
                                  <div class="loader" id="loader"></div>

                                </div>
                            </div>
                      
                            <hr>
                        </form>
                        <script>
                          function showLoader() {
                              var loader = document.getElementById("loader");
                              loader.style.display = "inline-block";

                              setTimeout(function() {
                                  loader.style.display = "none";
                              }, 4000); // Ubah angka 2000 sesuai dengan waktu loading yang diinginkan (dalam milidetik)
                          }
                      </script>
                    </div>
                </div>
              

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
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
   <script>
    function closeMessageBox() {
      document.getElementById('overlay').style.display = 'none';
    }
  </script>

  <script>
    window.onload = function() {
      document.getElementById('overlay').style.display = 'flex';
    };
  </script>
  <?php
require_once ('functions.php');
if (isset($_POST["save"])) {
         
    if( tambah_santri($_POST) > 0 ){

        echo '

            <div class="overlay_d" id="overlay_d">
                <div class="message-box_d">
                  <h2>Pendaftaran Berhasil</h2>
                  <p>Harap datang ke Pondok Pesantren untuk melengkapi berkas berkas</p>
                  <p>Dan melakukan pembayaran Biaya Pendaftaran Sebesar</p>
                  <p>RP. 100.000,00</p>
                  
                  <div class="btn-container_d">
                    <button onclick="closeMessageBox_d()">OK</button>
                  </div>
                </div>
              </div>

        ';
    } else {
        echo "
            <script>
            
            alert('Data Gagal Ditambahkan');

        </script>
        ";
    }
}


?>
  <script>
    function closeMessageBox_d() {
      document.getElementById('overlay_d').style.display = 'none';
      window.location.href = 'index.php';
    }
  </script>
  <script>
    window.onload = function() {
      document.getElementById('overlay_d').style.display = 'flex';
    };
  </script>


</body>
</html>
