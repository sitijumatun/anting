<?php 
 
include "../../../apl_koneksi.php"; 
 
$jenisjamur= $_POST['jenisjamur'];
$harga= $_POST['harga'];
$id = $_POST['id'];

$query = "UPDATE `apl_jenisjamur` SET `Jenis_Jamur` = '$jenisjamur',  `Harga_Kg` = '$harga' WHERE `apl_jenisjamur`.`Id_Jenisjamur` = $id"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Data berhasil diperbarui !"); document.location="../../view_administrasimasterdatajenisjamur.php";</script>';

?>