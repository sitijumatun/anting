<?php
include "../../../apl_koneksi.php";

$id= $_GET['kode']; 
$query = "UPDATE `apl_penggajian` SET `kode_akun` = 'PL 011', `Status_Pengambilan` = '1',`Tanggal_Pengambilan` = NOW() WHERE `apl_penggajian`.`Id_Penggajian` = $id"; 
$hasil = mysqli_query($conn,$query);

header("location: ../../view_administrasipenggajianambil.php"); 
 
?>