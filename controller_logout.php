<?php
session_start();
include 'apl_koneksi.php';
session_destroy();
header("location:index.php");
?>