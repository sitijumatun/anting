<?php
error_reporting(0);
//session_start();
include 'apl_koneksi.php';
$username2 = $_POST['username'];
$password2 = $_POST['password'];

$sqlnama = "SELECT * FROM apl_login WHERE Username='$username2' && Password='$password2'";
$resultnama = mysqli_query($conn,$sqlnama);
if(mysqli_num_rows($resultnama)>0){
while($row = mysqli_fetch_assoc($resultnama)){
	$username = $row['Username'];
	$password = $row ['Password'];
	$posisi = $row['Id_posisi'];
	$karyawan = $row['Id_Karyawan'];
	$id = $row['Id'];
	//mendapatkan informasi posisi
			$sqlposisi = "SELECT * FROM apl_posisi WHERE Id_Posisi='$posisi'";
			$resultposisi = mysqli_query($conn,$sqlposisi);
			if(mysqli_num_rows($resultposisi)>0){
			while($row2 = mysqli_fetch_assoc($resultposisi)){
				$namaposisi = $row2['Posisi'];			
			}
			}
	//
	//mendapatkan informasi data diri
			$sqlkaryawan = "SELECT * FROM apl_karyawan WHERE Id_Karyawan='$karyawan'";
			$resultkaryawan = mysqli_query($conn,$sqlkaryawan);
			if(mysqli_num_rows($resultkaryawan)>0){
			while($row3 = mysqli_fetch_assoc($resultkaryawan)){
				$namakar = $row3['Nama'];
				$alamat = $row3['Alamat'];
				$usia = $row3['Usia'];
				$foto = $row3['Foto'];
				$hp = $row3['Hp'];			
			}
			}
			
			
	//		
	if ($namaposisi=="Administrator"){
		session_start();
		$_SESSION['Username'] = $username;
		$_SESSION['Password'] = $password;
		$_SESSION['Id_Posisi'] = $namaposisi;
		$_SESSION['Id']= $id;
		//sessiondatadiri
		$_SESSION['Nama']=$namakar;
		$_SESSION['Alamat']=$alamat;
		$_SESSION['Usia']=$usia;
		$_SESSION['Foto']=$foto;
		$_SESSION['Hp']=$hp;
		$_SESSION['Id_Karyawan']=$karyawan;
		header("location: apl/view_admindashboard.php"); 
	}
	else if ($namaposisi=="Administrasi Usaha"){
		session_start();
		$_SESSION['Username'] = $username;
		$_SESSION['Password'] = $password;
		$_SESSION['Id_Posisi'] = $namaposisi;
		$_SESSION['Id']= $id;
		//sessiondatadiri
		$_SESSION['Nama']=$namakar;
		$_SESSION['Alamat']=$alamat;
		$_SESSION['Usia']=$usia;
		$_SESSION['Foto']=$foto;
		$_SESSION['Hp']=$hp;
		$_SESSION['Id_Karyawan']=$karyawan;
		header("location: apl/view_administrasidashboard.php"); 
	}
	else if ($namaposisi=="Produksi"){
		session_start();
		$_SESSION['Username'] = $username;
		$_SESSION['Password'] = $password;
		$_SESSION['Id_Posisi'] = $namaposisi;
		$_SESSION['Id']= $id;
		//sessiondatadiri
		$_SESSION['Nama']=$namakar;
		$_SESSION['Alamat']=$alamat;
		$_SESSION['Usia']=$usia;
		$_SESSION['Foto']=$foto;
		$_SESSION['Hp']=$hp;
		$_SESSION['Id_Karyawan']=$karyawan;
		header("location: apl/view_produksidashboard.php"); 
	}
	else if ($namaposisi=="Manajer"){
		session_start();
		$_SESSION['Username'] = $username;
		$_SESSION['Password'] = $password;
		$_SESSION['Id_Posisi'] = $namaposisi;
		$_SESSION['Id']= $id;
		//sessiondatadiri
		$_SESSION['Nama']=$namakar;
		$_SESSION['Alamat']=$alamat;
		$_SESSION['Usia']=$usia;
		$_SESSION['Foto']=$foto;
		$_SESSION['Hp']=$hp;
		$_SESSION['Id_Karyawan']=$karyawan;
		header("location: apl/view_manajerdashboard.php"); 
	}
	
}
}
else
{
	echo '<script language="javascript">alert("Maaf Password dan Username yang anda masukkan tidak terdaftar !"); document.location="index.php";</script>';
}


	
?>