<?php 
 
include "../../../apl_koneksi.php"; 
 
$posisi= $_POST['posisi']; 
$gaji= $_POST['gaji'];
$id = $_POST['id']; 

$query = "UPDATE `apl_posisi` SET `Posisi` = '$posisi', `Gaji` = '$gaji' WHERE `apl_posisi`.`Id_Posisi` = $id"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Data berhasil diperbarui !"); document.location="../../view_administrasimasterdataposisi.php";</script>';

?>