<?php
include "../../../apl_koneksi.php";

$posisi = $_POST['posisi'];
$gaji = $_POST['gaji'];

$query = "INSERT INTO `apl_posisi` (`Id_Posisi`,`Posisi`,`Gaji`) VALUES (NULL, '".$posisi."','".$gaji."')";
$sql = mysqli_query($conn, $query); 

if($sql){ 
    header("location: ../../view_administrasiposisi.php"); 
}else{
   echo '<script language="javascript">alert("Maaf Terjadi Kesalahan Silakan Ulangi !"); document.location="../../view_administrasiposisitambah.php";</script>';
}

?>