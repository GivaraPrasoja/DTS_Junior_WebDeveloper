<?php
include 'koneksi.php';
//menyimpan data id kedalam variabel
$id_brg = $_GET['id_brg'];
//query SQL untuk insert data
$query ="DELETE from stock_barang where id_brg='$id_brg'";
mysqli_query($conn, $query);
//mengalihkan ke halaman index.php
header("location:stock.php")
?>