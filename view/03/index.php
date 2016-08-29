<?php
include('../../controller/session.php');
if(!isset($_SESSION)){
  header("location : ../index.php");
}else if ($_SESSION['hak_akses'] != "manager"){
header('location: ../forward.php');
 }
?>
<?php include('header.php');?>

  <div id="myCarousel" class="carousel slide" data-ride="carousel"style="padding-top:40px;padding-bottom:40px;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active">
          <center><img src="img/slider1.jpg" width="75%" height="430px"></center>
           <div class="carousel-caption">
            <h3>Hotel Meihwa</h3>
            <p>Alamat : Jalan Merdeka No.72, Bandung</p>
            <p>Mail : meihwahotel@hotemail.com | Hotline : (022)888-2467</p>
          </div>
        </div><!-- End Item -->
 
         <div class="item">
          <center><img src="img/slider2.jpg" width="75%" height="430px"></center>
           <div class="carousel-caption">
            <h3>Hotel Meihwa</h3>
            <p>Alamat : Jalan Merdeka No.72, Bandung</p>
            <p>Mail : meihwahotel@hotemail.com | Hotline : (022)888-2467</p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <center><img src="img/slider3.jpg" width="75%" height="430px"></center>
           <div class="carousel-caption">
             <h3>Hotel Meihwa</h3>
            <p>Alamat : Jalan Merdeka No.72, Bandung</p>
            <p>Mail : meihwahotel@hotemail.com | Hotline : (022)888-2467</p>
          </div>
        </div><!-- End Item -->
        
      </div><!-- End Carousel Inner -->
    
      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div><!-- End Carousel -->


<?php include('footer.php');?>