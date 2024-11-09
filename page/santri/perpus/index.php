<?php 
ob_start();
session_start();
require 'functions.php';


 ?> 

<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <link rel="stylesheet" type="text/css" href="style_login.css">
  <link rel='shortcut icon' href='img/kasir2.png'>
</head>
<style type="text/css">
  body {
  background-color: black;
    background-image:  url('img/back.png');
    background-attachment: fixed;
  font-family: sans-serif;
}

.login {
  background-color: #fff;
  margin: 150px auto;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  width: 400px;
  opacity: 95%;
}

h1 {
  text-align: center;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 10px;
}

input[type=text], input[type=password] {
  padding: 10px;
  border: none;
  border-radius: 5px;
  margin-bottom: 20px;
}

button[type=submit] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type=submit]:hover {
  background-color: #3e8e41;
}

</style>
<body>
  <div class="login">
    <h1>Login : Menu Kasir</h1>
    <form method="post" >
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="Masukkan Username.." autocomplete="off" required >
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Masukkan Password.." autocomplete="off" required >
      <button type="submit" name="login" >Masuk</button>
    </form>
  </div>
</body>
</html>
<?php  
  if (isset($_POST['login'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = $conn->query("select * from user where username='$username' and password='$password' ");
   
    $data = $login->fetch_assoc();
    
    $ketemu = $login->num_rows;

    if ($ketemu>=1) {
      
      session_start();
 
      if ($data['level']=="admin") {
        $_SESSION['admin'] = $data['id_login'];
        $_SESSION["nama"] = $data['nama'];
        $_SESSION['id_login'] = $data['id_login'];
        header("location:halaman.php");
        
      }elseif ($data['level']=="user") { 
        $_SESSION['user'] = $data['id_login'];
        $_SESSION["nama"] = $data['nama'];
        $_SESSION["id_login"]=$data["id_login"];
        header("location:halaman_user.php");

      } 
    } elseif ($lo['level']=="bos") { 
        $_SESSION['bos'] = $lo['id_bos'];
        $_SESSION["nama_bos"] = $lo['nama_bos'];
        $_SESSION["id_bos"]=$lo["id_bos"];
        header("location:halaman_bos.php");
      }else{

      ?>
      <script type="text/javascript">
        alert("Username dan Password Salah");
        alert("Silahkan Coba Lagi");

      </script>

      <?php
    }
  }
  

 ?>