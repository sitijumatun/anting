<?php
include "../../../apl_koneksi.php";

$barang= $_POST['barang'];
$tanggal = $_POST['tanggal'];
$jumlah= $_POST['jumlah'];
$harga = $_POST['harga'];
$totalharga = $jumlah * $harga;

$query = "INSERT INTO `apl_pembelian` (`Id_Pembelian`,`kode_akun`, `Barang`, `Tanggal_Beli`, `Harga_Satuan`, `Jumlah`, `Total_Pembelian`) VALUES (NULL,'PL 02', '$barang', '$tanggal', '$harga', '$jumlah', '$totalharga');"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Data berhasil ditambahkan !"); document.location="../../view_administrasipembelianbahanbaku.php";</script>';
?>