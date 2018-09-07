<?php 
 
include "../../../apl_koneksi.php"; 
 
$suhu= $_GET['suhu'];
$kelembapan= $_GET['kelembapan'];

 
$query = "INSERT INTO `apl_sensor` (`Id_Sensor`, `Waktu`, `Suhu`, `Kelembapan`, `Status_Kipas`,`Date_Kipas`) VALUES (NULL,NOW() ,'$suhu', '$kelembapan', '1',NOW())"; 
$hasil = mysqli_query($conn,$query);
 
echo 'data berhasil disimpan';

?>