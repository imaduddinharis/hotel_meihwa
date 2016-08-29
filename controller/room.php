<?php
function rupiah($nilai, $pecahan = 0) { 
	return number_format($nilai, $pecahan, ',', '.'); 
}
include('../../controller/config.php');
$id = $_GET['id'];
$cek = mysql_query("SELECT * FROM tb_kamar WHERE id_kamar='$id'") or die(mysql_error());
$split = mysql_fetch_assoc($cek);
	$facilities = $split['fasilitas_kamar'];
	$harga = rupiah($split['harga_kamar']);
	$tk = $split['type_kamar'];
	$ra = $split['jumlah_kamar_tersedia'];
?>