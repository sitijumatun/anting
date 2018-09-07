<?php
include "../../../apl_koneksi.php";

$id=$_POST['id'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];

$query = "UPDATE `apl_panen` SET `Tanggal_Panen` = '$tanggal', `Berat_Panen` = '$jumlah' WHERE `apl_panen`.`Id_Panen` ='$id'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Data berhasil diperbaharui !"); document.location="../../view_produksipanen.php";</script>';
?>