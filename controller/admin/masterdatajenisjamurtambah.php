<?php 
 
include "../../../apl_koneksi.php"; 
 
$jenisjamur= $_POST['jenisjamur'];
$harga= $_POST['harga'];
 
$query = "INSERT INTO `apl_jenisjamur` (`Id_Jenisjamur`, `Jenis_Jamur`, `Harga_Kg`) VALUES (NULL, '$jenisjamur','$harga')"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Data berhasil ditambahkan !"); document.location="../../view_administrasimasterdatajenisjamur.php";</script>';

?>