<?php
include "../../../apl_koneksi.php";


$id=$_POST['id'];
$barang= $_POST['barang'];
$tanggal = $_POST['tanggal'];
$jumlah= $_POST['jumlah'];
$harga = $_POST['harga'];
$totalharga = $jumlah * $harga;

$query = "UPDATE `apl_pembelian` SET `Barang` = '$barang', `Tanggal_Beli` = '$tanggal',`Harga_Satuan` = '$harga',`Jumlah` = '$jumlah',`Total_Pembelian` = '$totalharga' WHERE `apl_pembelian`.`Id_Pembelian` = $id"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Data berhasil diperbaharui !"); document.location="../../view_administrasipembelianbahanbaku.php";</script>';
?>