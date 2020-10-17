<?php
include_once('db_connect.php');
$database = new database();
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    if ($database->register($username, $password, $nama, $email)) {
        header('location:login.php');
    }
}

?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ini adalah css bootstrap -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- ini adalah jquery -->
    <script type="text/javascript" src="../bootstrap/jquery.js"></script>

    <title>Register Form</title>

</head>

<body class="d-flex flex-column h-100">

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Register Form</h1>
            <p class="lead">Silahkan Daftarkan Identitas Anda</p>
            <hr/>
            <form method="post" action="">
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email anda">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" name="register">Register</button>
                        <br> <hr/>
                        <span>sudah punya akun ? silahkan klik <a href="login.php"> Login</a></span>
                        
                    </div>
                </div>
            </form>
        </div>
    </main>

</body>

</html>