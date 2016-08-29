<?php
include('../../controller/login.php');
if(isset($_SESSION['hak_akses'])){  
 header("location: ../forward.php");
}
?>

<?php 
include('header.php');
include('../../controller/other_room.php');
?>
  
  <div class="row">
  <div class="col-xs-6 col-sm-4">
    <div class="thumbnail">
     <?php echo '<img src="img/'.$i.'.jpg" alt="Image">';?>
      <div class="caption">
        <h3>Facilities :</h3>
        <?php 
        echo $facilities; ?><br/><br/>
        <p style="color:red;">Jumlah yang harus dibayar : <h3 style="color:red;">Rp. <?php echo $th ; ?></h3> </p> 

        <p style="color:blue;">Deadline Pembayaran : <?php echo $dd ; ?> </p> 

        </div>
    </div>
  </div>
  
  <div class="col-md-8 " style="background:#FFF; border-radius:5px;">
    <p><br/></p>
    
      <div class="form-group">
      <center><label for="orderNumber">Your Order Number</label> : <?php  echo $id; ?>
      <p> <h4>Please Transfer to this Bank Account  </h4></p></center>
      </div>
      <br/>
      <div class="form-group">
      <center>
      <img src="img/bni_logo.png" style="height:40px;" alt="bni logo" class="img-thumbnail"><br/><br/>
      <p>No. Rekening : 1234-567890 <br/>Atas Nama : MeihwaCorps
      </p>
      </center>
      </div>

      <div class="form-group">
      <center>
      <img src="img/bri.jpg" style="height:40px;" alt="bri logo" class="img-thumbnail"><br/><br/>
      <p>No. Rekening : 0123 01 123456 333 <br/>Atas Nama : MeihwaCorps
      </p>
      </center>
      </div>

      <div class="form-group">
      <center>
      <img src="img/BCA_logo.png" style="height:40px;" alt="bca logo" class="img-thumbnail"><br/><br/>
      <p>No. Rekening : 333-333-4444 <br/>Atas Nama : MeihwaCorps
      </p>
      </center>
      </div>

      <div class="form-group">
      <center>
      <img src="img/mandiri.jpg" style="height:40px;" alt="mandiri logo" class="img-thumbnail"><br/><br/>
      <p>No. Rekening : 333-333-333-4444 <br/>Atas Nama : MeihwaCorps
      </p>
      </center>
      </div>


      <p><br/></p><p><br/></p>
      <form method="post" action="../../controller/validasitoken.php" >
      <div class="form-group">
      <center><h5>then, input token number </h5></center>
      <input type="text" name="tokenNumber" class="form-control" id="tokenNumber" placeholder="Token Number">
      </div>

      <br/>
      <button type="submit" class="btn btn-primary" id="next">
      
      Submit
      </button>
    </form>
    <p><br/></p> <p><br/></p> <p><br/></p>
    <center>order progress</center>
    <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
    70%
  </div>
</div>
  </div>

</div>

<?php include('footer.php');?>
