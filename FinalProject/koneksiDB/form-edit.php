<?php
include 'koneksi.php';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$sql = "SELECT * 
		FROM stock_barang";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

//membuat data jurusan menjadi dinamis dalam bentuk array
$ukuran = array('12 inc', '10 inc', '8 inc', '6 inc', '5 inc', '4 inc', '3 inc', '2,5 inc', '2 inc', ' 1,5 inc', '1,25 inc', '1 inc', '0,5 inc', ' 0,75 inc');

//membuat function untuk set aktif radio button
function active_radio_button($value, $input)
{
    //apabila value dari radio sama yang di input
    $result = $value == $input ? 'checked' : '';
    return $result;
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
        <script type="text/javascript" src=../bootstrap/js/bootstrap.bundle.min.js"></script>
    
        <!-- ini adalah js bootstrap -->
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    
        <link rel="stylesheet" href="styleStock.css">
        <!-- ini adalah judul halaman -->
        <title>Edit</title>
    </head>

<body>
    <form method="post" action="update.php">
        <input type="hidden" value="<?php echo $row['id_brg']; ?>" name="id_brg">
        <table class="data-tabel">
        <caption class="title">Edit</caption>
		<thead>
            <tr>
                <td>ID Barang</td>
                <td><input type="text" value="<?php echo $row['id_brg']; ?>" name="id_brg"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" value="<?php echo $row['nama_brg']; ?>" name="nama"></td>
            </tr>
            <tr>
                <td>Ukuran <?php echo $row['ukuran']; ?></td>
                <td>
                    <select name="ukuran"><?php
                                            foreach ($ukuran as $u) {
                                                echo "<option value='$u'";
                                                echo $row['ukuran'] == $u ? 'selected="selected"' : '';
                                                echo "?>$u </option>";
                                            }
                                            ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah Barang</td>
                <td><input value="<?php echo $row['jumlah_brg']; ?>" type="text" name="jumlah_brg"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" value="simpan">Simpan Perubahan ?</button>
                    <a href="simpan.php">Kembali</a>
                </td>
            </tr>
		</thead>
        </table>
    </form>

</body>

</html>