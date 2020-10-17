<?php
session_start();
include_once('db_connect.php');
$database = new database();

if (isset($_SESSION['is_login'])) {
  header('location:../koneksiDB/stock.php');
}

if (isset($_COOKIE['username'])) {
  $database->relogin($_COOKIE['username']);
  header('location:../koneksiDB/stock.php');
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];


  if ($database->login($username, $password)) {
    header('location:../koneksiDB/stock.php');
  }
}
?>


  
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ini adalah css bootstrap -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="login.css">

    <!-- ini adalah judul halaman -->
    <title>login</title>
  </head>

  <body>
    <br>
    <br>
    <center>
      <h2>Silahkan login terlebih dahulu</h2>
    </center>
    <br>
    <div class="login">
      <br>
      <form action="" method="post" onSubmit="return validasi()">
        <h1 class=" h3 mb-3 font-weight-normal"></h1>
        <div>
          <label>Username:</label>
          <input type="text" id="username" class="form-control" placeholder="Username" name="username" required autofocus>
        </div>
        <div>
          <label>Password:</label>
          <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
        </div>

        <hr>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
        <a href="register.php" class="btn btn-lg btn-success btn-block">Register</a>
      </form>
    </div>

    <script type="text/javascript">
      function validasi() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if (username != "" && password != "") {
          return true;
        } else {
          alert('Username dan Password harus di isi !');
          return false;
        }
      }
    </script>

  </body>

</html>


<!-- masih banyak eror di program ini, salah satunya ketika login, pasword salah, maka ada keterangan dari sistem  -->