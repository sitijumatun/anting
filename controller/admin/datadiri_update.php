<?php 
 
include "../../../apl_koneksi.php"; 
 
$nama= $_POST['nama']; 
$alamat= $_POST['alamat']; 
$usia= $_POST['usia']; 
$hp= $_POST['hp']; 
$kodekar= $_POST['id']; 

$query = "UPDATE `apl_karyawan` SET `Nama` = '".$nama."' , `Alamat` = '".$alamat."', `Usia` = '".$usia."' , `Hp` = '".$hp."'  WHERE `apl_karyawan`.`Id_Karyawan` = '".$kodekar."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Data Anda berhasil di update !"); document.location="../../view_admindatasaya.php";</script>';

?>