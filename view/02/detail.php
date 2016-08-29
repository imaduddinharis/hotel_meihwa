<?php
include('../../controller/session.php');
if(!isset($_SESSION)){
  header("location : ../index.php");
}else if ($_SESSION['hak_akses'] != "resepsionis"){
header('location: ../forward.php');
 }
?>
<?php 
include('header.php');
include('../../controller/room.php');
?>
   
  
<p><br/></p>

<div class="row">
  <div class="col-xs-6 col-sm-4">
    <div class="thumbnail">
      <?php echo '<img src="img/'.$id.'.jpg" alt="Image">';?>
      <div class="caption">
            <center><h3>Type <?php echo $tk ?> </h3></center>
            <center><h3>Kamar Kosong : <?php echo $ra ?> </h3></center>


       </div>
    </div>
  </div>

  <div class="col-xs-6 col-sm-4">
    <p><h4>Harga : <span style="font-size:30px;"><?php echo'Rp.';echo $harga; ?><span> </h4> </p>
    <p><h3>Facilities :</h3></p>
    <p><?php echo $facilities; ?></p>
    <p class="text-right"><a href="room.php" class="btn btn-primary" role="button">Back</a></p>
  </div>
  
  
</div>


<?php include('footer.php');?>