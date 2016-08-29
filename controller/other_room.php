<?php
function rupiah($nilai, $pecahan = 0) { 
	return number_format($nilai, $pecahan, ',', '.'); 
}

function random($panjang)
{
   $pengacak = '1234567890';
   $string = '';
   for($i = 0; $i < $panjang; $i++) {
   $pos1 = rand(0, strlen($pengacak)-1);
   $string .= $pengacak{$pos1};
   }
    return $string;
}
$c= random(3);

include('../../controller/config.php');
$id = $_GET['id'];
$cek = mysql_query("SELECT * FROM tb_pemesanan WHERE id_transaksi ='$id'") or die(mysql_error());
$split = mysql_fetch_assoc($cek);
	$tk = $split['tipe_kamar'];
	$jj = $split['jumlah_kamar'];

$c = mysql_query("SELECT * FROM tb_kamar WHERE type_kamar ='$tk'") or die(mysql_error());
$s = mysql_fetch_assoc($c);
$i = $s['id_kamar'];
$facilities = $s['fasilitas_kamar'];
$hh = $s['harga_kamar'];
$ek = mysql_query("SELECT * FROM tb_pembayaran WHERE id_transaksi ='$id'") or die(mysql_error());
$sp = mysql_fetch_assoc($ek);
	$th = rupiah($sp['total_harga']);
$dd = $sp['deadline_pembayaran'];


?>