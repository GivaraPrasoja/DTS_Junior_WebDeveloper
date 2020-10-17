<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id_brg = $_POST['id_brg'];
$nama_brg = $_POST['nama_brg'];
$ukuran = $_POST['ukuran'];
$jumlah_brg = $_POST['jumlah_brg'];

//query SQL untuk insert data
$query = "INSERT INTO stock_barang SET
 id_brg ='$id_brg',
 nama_brg ='$nama_brg',
 ukuran ='$ukuran',
 jumlah_brg ='$jumlah_brg'";

mysqli_query($conn, $query);

//mengalihkan ke halaman stock.php
header("location:stock.php");
?>