<?php 
 
include "../../../apl_koneksi.php"; 
 
$suhu= $_GET['suhu'];
$kelembapan= $_GET['kelembapan'];
$status = $_GET['status'];
 
$query = "INSERT INTO `apl_sensor` (`Id_Sensor`, `Waktu`, `Suhu`, `Kelembapan`, `Status_Sensor`,`Date_Siram`) VALUES (NULL,NOW() ,'$suhu', '$kelembapan', '$status',NOW())"; 
$hasil = mysqli_query($conn,$query);
 
echo 'data berhasil disimpan';

?>