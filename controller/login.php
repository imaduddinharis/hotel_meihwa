<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
header("location: ../view/index.php?error=salah");
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("meihwa", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from tb_user where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
    $c = mysql_fetch_array($query);
        $_SESSION['username'] = $c['username'];
        $_SESSION['hak_akses'] = $c['hak_akses'];
        if($c['hak_akses']=="resepsionis"){
           header("location: ../view/02/");
        }

}else {
header("location: ../view/index.php?error=salah");
}
mysql_close($connection); // Closing Connection
}
}
?>