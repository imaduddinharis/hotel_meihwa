<?php
include('config.php');
$id = $_GET['id'];
$sql =  "UPDATE tb_pembayaran set status_pembayaran = 'lunas' where id_transaksi = '$id'";
	$m = mysql_query($sql);
		if ($m){
		?> 
							<script> alert("Lunas");
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


?>