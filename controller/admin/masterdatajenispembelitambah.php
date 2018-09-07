<?php 
 
include "../../../apl_koneksi.php"; 
 
$jenispembeli= $_POST['jenispembeli']; 
 
$query = "INSERT INTO `apl_jenispembeli` (`Id_Jenispembeli`, `Jenis_Pembeli`) VALUES (NULL, '$jenispembeli')"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Data berhasil ditambahkan !"); document.location="../../view_administrasimasterdatajenispembeli.php";</script>';

?>