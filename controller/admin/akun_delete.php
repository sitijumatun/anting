<?php 
 
include "../../../apl_koneksi.php"; 
 
$id= $_GET['kode']; 

$query = "UPDATE apl_login SET Username='' , Password='' WHERE Id='".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="../../view_adminakunkelola.php";</script>';

?>