<?php
include('../../controller/login.php');
if(isset($_SESSION['hak_akses'])){  
 header("location: ../forward.php");
}
?>
<?php include('header.php');?>
   
  
<p><br/></p>

<div class="row">
  <div class="col-xs-6 col-sm-4">
    <div class="thumbnail">
      <img src="img/1.jpg" alt="type A">
      <div class="caption">
        <h3>Type A</h3>
        <p>...</p>
        <p><a href="order.php?id=1" class="btn btn-primary" role="button">Order</a> <a href="detail.php?id=1" class="btn btn-default" role="button">Detail</a></p>
      </div>
    </div>
  </div>

  <div class="col-xs-6 col-sm-4">
    <div class="thumbnail">
      <img src="img/2.jpg" alt="type B">
      <div class="caption">
        <h3>Type B</h3>
        <p>...</p>
        <p><a href="order.php?id=2" class="btn btn-primary" role="button">Order</a> <a href="detail.php?id=2" class="btn btn-default" role="button">Detail</a></p>
      </div>
    </div>
  </div>
  
  <div class="col-xs-6 col-sm-4">
    <div class="thumbnail">
      <img src="img/3.jpg" alt="type C">
      <div class="caption">
        <h3>Type C</h3>
        <p>...</p>
        <p><a href="order.php?id=3" class="btn btn-primary" role="button">Order</a> <a href="detail.php?id=3" class="btn btn-default" role="button">Detail</a></p>
      </div>
    </div>
  </div>
  
</div>


<?php include('footer.php');?>