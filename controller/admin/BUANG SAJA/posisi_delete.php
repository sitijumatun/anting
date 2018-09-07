<?php
include "../../../apl_koneksi.php";

$kode = $_GET['kode'];

$query = "DELETE FROM apl_posisi WHERE Id_Posisi=$kode";
$sql = mysqli_query($conn, $query); 

if($sql){ 
    header("location: ../../view_administrasiposisi.php"); 
}else{
   echo '<script language="javascript">alert("Maaf Terjadi Kesalahan Silakan Ulangi !"); document.location="../../view_administrasiposisi.php";</script>';
}

?>