<?php
$host = "localhost";
$user = "root"; //sesuaikan dengan user mysql anda
$pass = ""; //sesuaikan dengan password mysql anda
$dbName = "meihwa";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Koneksi Gagal : ".mysql_error());
?>