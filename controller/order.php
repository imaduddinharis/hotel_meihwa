<?php
function random($panjang)
{
   $pengacak = 'ABCDEFGHIJKLMNOPQRSTUVXYZ1234567890';
   $string = '';
   for($i = 0; $i < $panjang; $i++) {
   $pos1 = rand(0, strlen($pengacak)-1);
   $string .= $pengacak{$pos1};
   }
    return $string;
}

function ran($panjang)
{
   $pengacak = '1234567890';
   $string = '';
   for($i = 0; $i < $panjang; $i++) {
   $pos1 = rand(0, strlen($pengacak)-1);
   $string .= $pengacak{$pos1};
   }
    return $string;
}

//Contoh Pemanggilan
$c= random(10);
$on = random(10);
$token = random(8);
$cx= ran(3);
include('config.php');

$tanggalSekarang=date('Y-m-d h:i:s');
$newTanggalSekarang=strtotime($tanggalSekarang);

$jumlahHari=1;
$NewjumlahHari=86400*$jumlahHari;

$hasilJumlah = $newTanggalSekarang + $NewjumlahHari;
$deadline=date('Y-m-d h:i:s',$hasilJumlah);



	$custId = $_POST['custId'];
	$type = $_POST['type'];
	$cn = $_POST['custName'];
	$cm = $_POST['custmail'];
	$nr = $_POST['numRooms'];
	$df = $_POST['dateFrom'];
	$dt = $_POST['dateTill'];
	$tk = $_POST['tk'];
	
	$ce = mysql_query("SELECT * FROM tb_kamar WHERE type_kamar ='$tk'") or die(mysql_error());
$s = mysql_fetch_assoc($ce);
$hh = $s['harga_kamar'];
$total_harga = ($nr * $hh)+ $cx;
$m = mysql_query( "INSERT INTO tb_pembayaran VALUES('$on','$token','$hh','$total_harga','$deadline','belum lunas')");
$q = "INSERT INTO tb_pemesanan VALUES('$c','$on','$custId','$type','$cn','$cm','$tk','$nr',sysdate(),'$df','$dt','booked')";
$result = mysql_query($q);
						if($result){
									?> 
							<script> alert("Lanjutkan ke Pembayaran");
							</script>
						<?php 
						}else{ 
						echo 'error';}
?>
<html>
<head>
<?php
include('../controller/login.php');
if(isset($_SESSION['hak_akses'])){	
 echo'<meta http-equiv="Refresh" content="0; url=../view/02/order-next.php?id='.$on.' "/>';
}else{
 echo'<meta http-equiv="Refresh" content="0; url=../view/01/order-next.php?id='.$on.' "/>';
}
 ?>
</head>
<body>
</body>
</html>