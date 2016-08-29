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
$h = mysql_query ("SELECT * from tb_pemesanan where id_transaksi = '$id'");
$split = mysql_fetch_assoc ($h);
$j = $split ['tipe_kamar'];
$jk = $split ['jumlah_kamar'];
$l = $split ['status_pengunjung'];
if ($l == 'Cek In')
{
$b = mysql_query ("UPDATE tb_kamar set jumlah_kamar_tersedia = jumlah_kamar_tersedia + '$jk' WHERE type_kamar = '$j' ");
	
$q = "UPDATE tb_pemesanan set status_pengunjung = 'Cek Out' where id_transaksi = '$id' ";
$result = mysql_query($q);
						if($result){
									?> 
							<script> alert("Pengunjung Sudah Cek Out");
							</script>
						<?php 
						}else{ 
						echo 'error';}
}else if ($l == 'booked'){
?> 
							<script> alert("Pengunjung Harus Melakukan Cek In Terlebih Dahulu");
							</script>
						<?php 
}else{
	?> 
							<script> alert("Untuk Sementara Fungsi Tidak Dapat Berjalan");
							</script>
						<?php 
}
?>
</body>
</html>