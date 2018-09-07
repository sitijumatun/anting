<?php
include "../../../apl_koneksi.php";

$id= $_POST['id'];
$hargasatu= $_POST['hargasatu'];
$jumlah= $_POST['jumlah'];
$tanggal= $_POST['tanggal'];

$totalharga = $jumlah * $hargasatu;

$query = "UPDATE `apl_penjualan` SET `Jumlahjamurterjual` = '$jumlah', `Total_Pemasukan` = '$totalharga',`Tanggal_Penjualan` = '$tanggal' WHERE `apl_penjualan`.`Id_Penjualan` = $id"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Data berhasil diperbaharui !"); document.location="../../view_administrasipenjualan.php";</script>';
?>