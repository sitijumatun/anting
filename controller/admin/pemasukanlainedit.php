<?php
include "../../../apl_koneksi.php";
$id= $_POST['id'];
$pemasukanlain= $_POST['pemasukanlain'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];

$query = "UPDATE `apl_pemasukanlain` SET `Pemasukan_Lain` = '$pemasukanlain', `Jumlah` = '$jumlah', `Tanggal` = '$tanggal' WHERE `apl_pemasukanlain`.`Id_Pemasukanlain` = $id"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Data berhasil diperbaharui !"); document.location="../../view_administrasipemasukanlain.php";</script>';
?>