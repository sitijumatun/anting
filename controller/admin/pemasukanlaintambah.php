<?php
include "../../../apl_koneksi.php";

$pemasukanlain= $_POST['pemasukanlain'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];

$query = "INSERT INTO `apl_pemasukanlain` (`Id_Pemasukanlain`,`kode_akun`,`Pemasukan_Lain`, `Jumlah`,`Tanggal`) VALUES (NULL,'PM 02', '$pemasukanlain', '$jumlah','$tanggal')"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Data berhasil ditambahkan !"); document.location="../../view_administrasipemasukanlain.php";</script>';
?>