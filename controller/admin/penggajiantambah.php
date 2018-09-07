<?php
include "../../../apl_koneksi.php";

$namakaryawan= $_POST['nama'];
$query2="select * from apl_karyawan WHERE Nama='$namakaryawan'";
$hasil2=mysqli_query($conn, $query2);
while ($data2=mysqli_fetch_array($hasil2))
{
	$idkar = $data2['Id_Karyawan'];
	$idpos = $data2['Id_Posisi'];	
}

$query3="select * from apl_posisi WHERE Id_Posisi='$idpos'";
$hasil3=mysqli_query($conn, $query3);
while ($data3=mysqli_fetch_array($hasil3))
{
	$gaji = $data3['Gaji'];	
}

$bonus = $_POST['bonus'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];

$totalgaji = $gaji + $bonus;


$query = "INSERT INTO `apl_penggajian` (`Id_Penggajian`, `kode_akun`, `Id_Karyawan`, `Bonus`, `Total_Gaji`, `Bulan`, `Tahun`, `Status_Pengambilan`, `Tanggal_Pengambilan`) VALUES (NULL, 'PL 01', '$idkar', '$bonus', '$totalgaji', '$bulan', '$tahun', '0', '');"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Data berhasil ditambahkan !"); document.location="../../view_administrasipenggajian.php";</script>';
?>