<?php 
 
include "../../../apl_koneksi.php"; 
 
$posisi= $_POST['posisi']; 
$gaji= $_POST['gaji']; 

$query = "INSERT INTO `apl_posisi` (`Id_Posisi`, `Posisi`, `Gaji`) VALUES (NULL, '$posisi', '$gaji')"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Data berhasil ditambahkan !"); document.location="../../view_administrasimasterdataposisi.php";</script>';

?>