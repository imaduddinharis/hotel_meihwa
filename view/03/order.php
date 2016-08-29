<?php
include('../../controller/session.php');
if(!isset($_SESSION)){
  header("location : ../index.php");
}else if ($_SESSION['hak_akses'] != "resepsionis"){
header('location: ../forward.php');
 }
?>
<?php include('header.php');?>
<?php function random($panjang)
{
   $pengacak = 'ABCDEFGHIJKLMNOPQRSTUVXYZ1234567890';
   $string = '';
   for($i = 0; $i < $panjang; $i++) {
   $pos1 = rand(0, strlen($pengacak)-1);
   $string .= $pengacak{$pos1};
   }
    return $string;
}

//Contoh Pemanggilan
$codes = random(10);
$id = $_GET['id'];
include('../../controller/room.php');
 ?>
  <div class="row">
  <div class="col-xs-6 col-sm-4">
    <div class="thumbnail">
      <?php echo '<img src="img/'.$id.'.jpg" alt="Image">';?>
      <div class="caption">
        <center><h3>Type <?php echo $tk ?> </h3></center>
        <h3>Facilities :</h3>
        <?php 
        
        echo $facilities; ?>
       </div>
    </div>
  </div>
  
  <div class="col-md-8 " style="background:#FFF; border-radius:5px;">
    <p><br/></p>
    <form method="post" action="../../controller/order.php" >
      <div class="form-group">
      <!--<label for="orderNumber">Your Order Number</label> : <h3 name="ordNumber"><?php/* echo*/ $codes;?></h3>-->
      </div>

      <div class="form-group form-inline">
      <label for="custId">ID Number</label><br/>
      <input type="text" style="width:45%;" name="custId" class="form-control" id="custId" placeholder="Customer Id">
      <span>
        <select name="type" class="form-control" style="width:45%;">
        <option name="type" value="NULL">Identity Type</option>
        <option name="type" value="SIM">SIM</option>
        <option name="type" value="KTP">KTP</option>
        <option name="type" value="PASSPORT">PASSPORT</option>
        </select>
      </span>
      </div>

      <div class="form-group">
      <label for="custName">Customer Name</label>
      <input type="text" name="custName" class="form-control" id="custName" placeholder="Customer Name">
      </div>


       <div class="form-group">
      <label for="custmail">Email</label>
      <input type="email" name="custmail" class="form-control" id="custmail" placeholder="Email">
      </div>
      
      
      <div class="form-group form-inline">
      <label for="numRooms">Number of Rooms</label>
      <input type="number"  name="numRooms" class="form-control" id="numRooms" >
      <label for="tk">Room Type</label>
      <input type="text"  name="tk" class="form-control" id="tk" value="<?php echo $tk ?>" >

      </div>

      <div class="form-group">
      <label for="numRooms"><h4>Date Booking</h4></label>

      <div class="form-group  form-inline">
      <label for="dateFrom">From Date</label>
      <input type="date" name="dateFrom" class="form-control " id="dateFrom" >
       <label for="dateTill">Until Date</label>
      <input type="date" name="dateTill" class="form-control" id="dateTill">
      </div>
      </div>
      
      <br/>
      <button type="submit" class="btn btn-primary" id="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      Next
      </button>
    </form>
    <p><br/></p> <p><br/></p> <p><br/></p>
    <center>order progress</center>
    <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
    30%
  </div>
</div>
  </div>

</div>

<?php include('footer.php');?>
