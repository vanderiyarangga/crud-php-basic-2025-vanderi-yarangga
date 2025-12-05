
<?php
// Koneksi Database
$host = 'localhost';
$user = "root";
$pass = 'root';
$db  = "db_makanan";

$conn = new mysqli($host, $user, $pass,$db);
if($conn->connect_error)
{
    die('Konekasi Gagal');
};


$data = $conn->query("SELECT * FROM makanan");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>


<body>
    <h1>Daftar Makanan</h1>
    <a href="tambah.php">Tambah Data</a>

    <!-- Table Data Makanan -->
    <table>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Harga</td>
            <td>#</td>
        </tr>

        <?php 
            $no = 1; 
        
            while($row = $data->fetch_assoc() ){
        ?>
        <tr>
            <td> <?= $no++?> </td>
            <td> <?=  $row['nama'] ?> </td>
            <td> <?=  $row['harga'] ?> </td>
            <td>
                <a href="hapus.php">Hapus</a>
                <a href="ubah.php">Ubah</a>
            </td>
        </tr>

        <?php }?>
      

        <!-- Tambhkan lagi 2 daftar makanan  -->
    </table>
</body>

</html>

