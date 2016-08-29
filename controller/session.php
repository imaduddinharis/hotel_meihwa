<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("meihwa");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['username'];
$tipe_check=$_SESSION['hak_akses'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select hak_akses from tb_user where username='$user_check' AND hak_akses='$tipe_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['hak_akses'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: /hotel_meihwa/view/01/'); // Redirecting To Home Page
mysql_close($connection);
}
?>