<?php
include "../../../apl_koneksi.php";

$nama= $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$hp = $_POST['hp'];

$posisi = $_POST['posisi'];
$query2="select * from apl_posisi WHERE Posisi='$posisi'";
$hasil2=mysqli_query($conn, $query2);
while ($data2=mysqli_fetch_array($hasil2))
{
	$idposisi = $data2['Id_Posisi'];
}

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$idkaryawan2 = $_POST['id'];
  
$fotobaru = date('dmYHis').$foto;
$path = "../../images/".$fotobaru;

if(move_uploaded_file($tmp, $path)){ 
  $query = "UPDATE `apl_karyawan` SET `Id_Posisi` = '$idposisi', `Nama` = '$nama', `Alamat` = '$alamat', `Usia` = '$usia', `Foto` = '$fotobaru', `Hp` = '$hp' WHERE `apl_karyawan`.`Id_Karyawan` = $idkaryawan2"; 
  $sql = mysqli_query($conn, $query); 
  $query4="select * from apl_karyawan WHERE Nama='$nama'";
  $hasil4=mysqli_query($conn, $query4);
  while ($data4=mysqli_fetch_array($hasil4))
  {
	$idkaryawan = $data4['Id_Karyawan'];
  }
  $query3 = "UPDATE `apl_login` SET `Id_posisi` = '$idposisi' WHERE `apl_login`.`Id_Karyawan` = '$idkaryawan'"; 
  $sql3 = mysqli_query($conn, $query3); 

  if($sql){ 
    header("location: ../../view_administrasimasterdatakaryawan.php"); 
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='../../view_administrasimasterdatakaryawan.php'>Kembali</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='../../view_administrasimasterdatakaryawan.php'>Kembali</a>";
}
?>