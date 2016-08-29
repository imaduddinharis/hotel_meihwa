<?php
include('session.php');
if(!isset($_SESSION)){
  header("location : ../index.php");
}else if ($_SESSION['hak_akses'] != "resepsionis"){
header('location: ../forward.php');
 }
?><html>
<head>
<meta http-equiv="Refresh" content="0; url=../view/02/pengunjung.php "/>
</head>
<body>
<?php
include('config.php');
$id = $_GET['userId'];
$q = "SELECT tb_pemesanan where id_transaksi LIKE '%$id%' ";
$result = mysql_query($q);
						if($result){
									header('location : ../view/02/pengunjung.php?userId');
						}else{ 
						echo 'error';}
?>
</body>
</html>