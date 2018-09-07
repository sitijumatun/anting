<?php 
 
include "../../../apl_koneksi.php"; 
 
$kodekar=$_GET['kode'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
  
$fotobaru = date('dmYHis').$foto;
$path = "../../images/".$fotobaru;

if(move_uploaded_file($tmp, $path)){ 
	$query = "UPDATE `apl_karyawan` SET `Foto` = '".$fotobaru."'  WHERE `apl_karyawan`.`Id_Karyawan` = '".$kodekar."'"; 
	$hasil = mysqli_query($conn,$query);
	echo '<script language="javascript">alert("Data Anda berhasil di update , dan halaman terlogout otomatis!"); document.location="../../../controller_logout.php";</script>';
  }
else{
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='apl_pegawai.php'>Kembali</a>";
}
?>