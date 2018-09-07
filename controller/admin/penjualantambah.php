<?php
include "../../../apl_koneksi.php";

$jenispembeli= $_POST['jenispembeli'];
$jenisjamur = $_POST['jenisjamur'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

//untukmendapatkanjenispembeli
$query2="select * from apl_jenispembeli WHERE Jenis_Pembeli='$jenispembeli'";
$hasil2=mysqli_query($conn, $query2);
while ($data2=mysqli_fetch_array($hasil2))
{
	$idjenispembeli = $data2['Id_Jenispembeli'];
	
}

//untukmendapatkanjenisjamur
$query3="select * from apl_jenisjamur WHERE Jenis_Jamur='$jenisjamur'";
$hasil3=mysqli_query($conn, $query3);
while ($data3=mysqli_fetch_array($hasil3))
{
	$idjenisjamur = $data3['Id_Jenisjamur'];
	$harga = $data3['Harga_Kg'];
}

$totalharga = $jumlah * $harga;

$query = "INSERT INTO `apl_penjualan` (`Id_Penjualan`,`kode_akun`, `Id_Jenispembeli`, `Id_Jenisjamur`, `jumlahjamurterjual`,`Tanggal_Penjualan`,`Total_Pemasukan`,`Nama_Pembeli`,`Alamat`) VALUES (NULL,'PM 01' ,'$idjenispembeli','$idjenisjamur','$jumlah','$tanggal','$totalharga','$nama','$alamat')"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Data berhasil ditambahkan !"); document.location="../../view_administrasipenjualan.php";</script>';
?>