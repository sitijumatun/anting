<?php 
 
include "../../../apl_koneksi.php"; 
 
$jenispembeli= $_POST['jenispembeli']; 
$id = $_POST['id']; 

$query = "UPDATE `apl_jenispembeli` SET `Jenis_Pembeli` = '$jenispembeli' WHERE `apl_jenispembeli`.`Id_Jenispembeli` = $id"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Data berhasil diperbarui !"); document.location="../../view_administrasimasterdatajenispembeli.php";</script>';

?>