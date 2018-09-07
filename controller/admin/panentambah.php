<?php
include "../../../apl_koneksi.php";

$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];

$query = "INSERT INTO `apl_panen` (`Id_Panen`,`Tanggal_Panen`,`Berat_Panen`) VALUES (NULL,'$tanggal', '$jumlah')"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Data berhasil ditambahkan !"); document.location="../../view_produksipanen.php";</script>';
?>