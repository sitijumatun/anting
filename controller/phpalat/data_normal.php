<?php 
 
include "../../../apl_koneksi.php"; 
 
$suhu= $_GET['suhu'];
$kelembapan= $_GET['kelembapan'];

 
$query = "INSERT INTO `apl_sensor` (`Id_Sensor`, `Waktu`, `Suhu`, `Kelembapan`) VALUES (NULL,NOW() ,'$suhu', '$kelembapan')"; 
$hasil = mysqli_query($conn,$query);
 
echo 'data berhasil disimpan';

?>