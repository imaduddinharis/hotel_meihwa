<?php
include('../../controller/session.php');
if(!isset($_SESSION)){
  header("location : ../index.php");
}else if ($_SESSION['hak_akses'] != "resepsionis"){
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
                	<td>Nama Pengunjung</td>
					<td>Kamar Type</td>
					<td>From Date</td>
					<td>Until Date</td>
					<td>Status Pengunjung</td>
                </tr>
				</thead>
                <?php include'../../controller/datapemesanan.php';?>
            </table>
</div>
</div>
            <?php include('footer.php');?>