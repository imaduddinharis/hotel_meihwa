<?php
include('../controller/session.php');
if(!isset($_SESSION)){	
	echo '<script>alert("you must login");</script>';
	header("location : index.php");
}
else if (isset($_SESSION) && $_SESSION['hak_akses'] == "resepsionis"){
header('location: 02/');
 } 
 else if (isset($_SESSION) && $_SESSION['hak_akses'] == "manager"){
header('location: 03/');
 } 
 ?>