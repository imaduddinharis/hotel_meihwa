<?php
include('../../controller/session.php');
if(!isset($_SESSION)){
  header("location : ../index.php");
}else if ($_SESSION['hak_akses'] != "resepsionis"){
header('location: ../forward.php');
 }
?>
<?php include('header.php');?>
  
  <div class="row">
  
  
  <div style="background:#FFF; border-radius:5px;">
    <p><br/></p>
    
      <div class="form-group">
      <center>
      <img src="img/thanks.jpg" style="width:450px;" alt="selamat" > <br/>
      <img src="img/selamat.gif" style="height:75px;" alt="selamat" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="img/selamat2.gif" style="height:75px;" alt="selamat">
     <br/><br/>
      Please check your <i>email</i> to get a proof of payment.
     
      </center>
      </div>

    <p><br/></p> 
    <center>Order Success</center>
    <div class="progress">
  <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
    100%
  </div>
</div>
  </div>

</div>

<?php include('footer.php');?>
