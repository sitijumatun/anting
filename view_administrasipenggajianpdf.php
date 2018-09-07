<?php
include "../apl_koneksi.php";

$gaji=$_POST['gaji'];
if($gaji=="Beban Gaji"){
	header("location: pdffix/bebangaji.php"); 
}

if($gaji=="Gaji yang sudah dibayarkan")
{
	header("location: pdffix/gajibayar.php"); 
}
?>