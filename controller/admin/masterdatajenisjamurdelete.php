<?php 
 
include "../../../apl_koneksi.php"; 
 
$id= $_GET['kode']; 

$query = "DELETE FROM apl_jenisjamur WHERE Id_Jenisjamur=$id"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="../../view_administrasimasterdatajenisjamur.php";</script>';

?>