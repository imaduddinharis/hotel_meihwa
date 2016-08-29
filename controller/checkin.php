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
$id = $_GET['id'];
	
$q = "UPDATE tb_pemesanan set status_pengunjung = 'Cek In' where id_transaksi = '$id' ";
$result = mysql_query($q);
						if($result){
									?> 
							<script> alert("Pengunjung Sudah Cek In");
							</script>
						<?php 
						}else{ 
						echo 'error';}
?>
</body>
</html>