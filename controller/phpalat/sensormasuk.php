<?php 
 
include "../../../apl_koneksi.php"; 
 
$suhu= $_GET['suhu'];
$kelembapan= $_GET['kelembapan'];
$status = $_GET['status'];
$tgl=date('d-m-Y');
 
$query = "INSERT INTO `apl_sensor` (`Id_Sensor`, `Waktu`,`Tanggal`, `Suhu`, `Kelembapan`, `Status_Sensor`) VALUES (NULL,NOW(),'$tgl' ,'$suhu', '$kelembapan', '$status')"; 
$hasil = mysqli_query($conn,$query);
 
echo 'data berhasil disimpan';

?>