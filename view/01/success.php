<?php
include('../../controller/login.php');
if(isset($_SESSION['hak_akses'])){  
 header("location: ../forward.php");
}
?>
<?php include('header.php');?>
  
  
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

    <p></br></p>
  </div>

<?php include('footer.php');?>
