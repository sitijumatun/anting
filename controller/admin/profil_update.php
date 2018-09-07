<?php 
 
include "../../../apl_koneksi.php"; 
 
$username= $_POST['username']; 
$password= $_POST['password']; 
$id= $_POST['id']; 

$query = "UPDATE `apl_login` SET `Username` = '".$username."' , `Password` = '".$password."' WHERE `apl_login`.`Id` = '".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil mengupdate data anda akan otomatis logout !"); document.location="../../../controller_logout.php";</script>';

?>