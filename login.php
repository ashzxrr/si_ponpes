<?php 
ob_start();
session_start();
require 'functions.php';


 ?> 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SI Ponpes - Login</title>

    <link href="assets/img/logo2.png" rel="icon">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
            #loadingScreen {
        display: none;
        position: fixed;
        top: 0;
        left: 0; 
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 9999;
        }

        .loader {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            background-image: url('assets/img/lod2.gif'); /* Ganti dengan path gambar yang Anda inginkan */
            background-size: cover;
            background-repeat: no-repeat;
            animation: spin 2s linear infinite;
            }

@keyframes spin {
  0% { transform: translate(-50%, -50%) rotate(0deg); }
  100% { transform: translate(-50%, -50%) rotate(360deg); }
}
    </style>

</head>

<body style="background-color: #0a9d58">


    <div class="container">
    

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"><img src="assets/img/logo.jpeg"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form id="myForm" class="user" method="POST" action="" >
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                placeholder="Password">
                                        </div>
                                       
                                        <button id="myButton" onclick="showLoading()" type="submit" name="login" class="btn btn-success btn-user btn-block">
                                        
		                                    <span class="text">Login</span>
		                                </button>
                                        <div id="loadingScreen">
                                            <div class="loader"></div>
                                        </div>
                                                                
                                        <hr>
                                        
                                    </form>
                                    

                                    <script>
                                    function showLoading() {
                                        document.getElementById("loadingScreen").style.display = "block";
                                        setTimeout(function() {
                                        
                                        }, 4000); // Ganti dengan durasi loading yang diinginkan (dalam milidetik)
                                    }
                                    </script>
                                    <hr>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div> 

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

<?php  
	if (isset($_POST['login'])) {
		
        login();
	}
	

 ?>