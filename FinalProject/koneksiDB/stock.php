<?php
session_start();
if (!isset($_SESSION['is_login'])) {
  header('location:../fileLogin/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ini adalah css bootstrap -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

  <!-- ini adalah jquery -->
  <script type="text/javascript" src="../bootstrap/jquery.js"></script>

  <!-- ini adalah boostrap bundle -->
  <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- ini adalah js bootstrap -->
  <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="styleStock.css">
  <!-- ini adalah judul halaman -->
  <title>Stock Barang</title>
</head>

<body>
  <!-- ini adalah header  -->
  <header>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>DTS Junior Web Developer</h1>
            <div class="lead">Sistem informasi barang</div>
          </div>
          <a href="../fileLogin/logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>
        </div>
      </div>
    </div>
  </header>
  <!-- navbar bootstrap 4 -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.html">#icon</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Penjualan</a>
            <a class="dropdown-item" href="#">Pembelian </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Stock Barang</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contac US</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <!-- menampilkan data mysql ke dalam mtml -->
  <div class="tabel1"> Tabel input tambah barang / item <br> 
    <button><a href="form-input.php">input barang</a></button>
  </div>
  <dir class="tabel2">Tabel2
    <h1>Stock Barang</h1>
    <br>
    <hr>
    <table class="data-table">
      <caption class="title">Stock Barang</caption>
      <thead>
        <tr>
          <th>NO</th>
          <th>ID Barang</th>
          <th>Nama Barang</th>
          <th>Ukuran</th>
          <th>Jumlah Barang</th>
          <th>ACTION</th>

        </tr>
      </thead>
      <tbody>
        <?php
        include 'koneksi.php';
        $no   = 1;
        $total   = 0;
        foreach ($query as $row) {
          echo "<tr>
              <td>" . $no . "</td>
              <td>" . $row['id_brg'] . "</td>
              <td>" . $row['nama_brg'] . "</td>
              <td>" . $row['ukuran'] . "</td>
              <td>" . $row['jumlah_brg'] . "</td>
              <td>
                <a href ='form-edit.php?id_brg=$row[id_brg]'>Edit</a>
                <a href ='delete.php?id_brg=$row[id_brg]'>Delete</a>
              </td>
				    </tr>";
          $total += $row['jumlah_brg'];
          $no++;
        } ?>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="4">TOTAL</th>
          <th><?= number_format($total, 0, ',', '.') ?></th>
        </tr>
      </tfoot>
    </table>
    <button><a href="report.php">Print </a></button>
  </dir>




</body>

</html>