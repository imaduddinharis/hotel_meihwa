<?php
include ('config.php');
$token=$_POST['tokenNumber'];
$query = mysql_query("SELECT * from tb_pembayaran where token_pembayaran = '$token'");
$sp = mysql_fetch_assoc($query);
	$id = $sp['id_transaksi'];
$rows = mysql_num_rows($query);
$sql =  "UPDATE tb_pembayaran set status_pembayaran = 'lunas' where token_pembayaran = '$token'";
$cek = mysql_query("SELECT * FROM tb_pemesanan WHERE id_transaksi ='$id'") or die(mysql_error());
$split = mysql_fetch_assoc($cek);
	$tk = $split['tipe_kamar'];
	$jj = $split['jumlah_kamar'];
	$c = mysql_query("SELECT * FROM tb_kamar WHERE type_kamar ='$tk'") or die(mysql_error());
$s = mysql_fetch_assoc($c);
	$jkt = $s['jumlah_kamar_tersedia'];
	$pengurangan = $jkt - $jj;
	$ss =  "UPDATE tb_kamar set jumlah_kamar_tersedia = '$pengurangan' where type_kamar = '$tk'";
if ($rows ==1 ) {
	$m = mysql_query($sql);
	$up = mysql_query($ss);
		if ($m){

			?> 
							<script> alert("Token Valid");
							</script>
							
						<?php
						include('../controller/login.php');
if(isset($_SESSION['hak_akses'])){	
 echo'<meta http-equiv="Refresh" content="0; url=../view/02/success.php?id='.$id.' "/>';
}else{
 echo'<meta http-equiv="Refresh" content="0; url=../view/01/success.php?id='.$id.' "/>';
} 
						}else{ 
						echo 'error';}

}else {
	?> 
							<script> alert("token tidak valid");
							</script>
						<?php 
}
?>