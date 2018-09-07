<?php 
 
include "../../../apl_koneksi.php"; 
 
$id= $_GET['kode']; 

$query2 = "DELETE FROM apl_login WHERE Id_Karyawan=$id"; 
$hasil2 = mysqli_query($conn,$query2);
$query = "DELETE FROM apl_karyawan WHERE Id_Karyawan=$id"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="../../view_administrasimasterdatakaryawan.php";</script>';

?>