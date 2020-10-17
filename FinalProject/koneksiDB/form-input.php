<?php
include 'koneksi.php';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$sql = "SELECT * 
		FROM stock_barang";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

//membuat data jurusan menjadi dinamis dalam bentuk array
$ukuran = array('12 inc', '10 inc', '8 inc', '6 inc', '5 inc', '4 inc', '3 inc', '2,5 inc', '2 inc', ' 1,5 inc', '1,25 inc', '1 inc', '0,5 inc', ' 0,75 inc');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat form inputan data</title>
</head>

<body>
    <h1>Form Input Data</h1>
    <form method="post" action="simpan.php">
        <table>
            <tr>
                <td>ID Barang</td>
                <td><input type="text" name="id_brg"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_brg"></td>
            </tr>
            <tr>
                <td>Ukuran <?php echo $row["ukuran"]; ?></td>
                <td><select name="ukuran"><?php
                                            foreach ($ukuran as $u) {
                                                echo "<option value='$u'";
                                                echo $row['ukuran'] == $u ? 'selected="selected"' : '';
                                                echo "?>$u </option>";
                                            }
                                            ?>
                    </select></td>
            </tr>
            <tr>
                <td>Jumlah Barang</td>
                <td><input type="text" name="jumlah_brg"></td>
            </tr>
            <tr><td colspan="2"><button type"submit" value="simpan">SIMPAN</button></td></tr>
        </table>
    </form>
</body>

</html>