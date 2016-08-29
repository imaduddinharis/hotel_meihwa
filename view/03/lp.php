<?php
include('../../controller/session.php');
if(!isset($_SESSION)){
  header("location : ../index.php");
}else if ($_SESSION['hak_akses'] != "manager"){
header('location: ../forward.php');
 }
?>
<?php include('header.php');?>
   
  <div style=" border-radius:5px;">
  	<div class="form-group">
<table class="table table-hover">
            	<thead style="text-align:center;">
				<tr>
					<td> No. </td>
          <td>ID Pemesanan</td>
					<td>ID Customer</td>
					<td>Tipe Identitas</td>
					<td>Nama Customer</td>
					<td>Tanggal Pemesanan</td>
          <td>Dari Tanggal</td>
          <td>Sampai Tanggal</td>
          <td>Total Harga</td>
          <td>Status Pembayaran</td>
                </tr>
				</thead>
                <?php include'../../controller/lp.php';?>
            </table>
</div>
</div>
            <?php include('footer.php');?>