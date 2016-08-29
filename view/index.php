<?php
include('../controller/login.php');
if(isset($_SESSION['hak_akses'])){	
 header("location: forward.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MeiHwa</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/login.css"/>
    </head>
  <body>
    <div class="container">
	 <center>
<h1> <img src="img/MEIHWA.jpg" style="width:200px; height:auto;" /><br> Selamat Datang di Hotel MeiHwa</h1>
<h3>Silahkan Login</h3>
  </center>
  <p><br/></p>
  <center>
  <?php 
            /**
             * Pesan Error Bila terjadi kegagalan dalam login
             */
            if (isset($_GET['error']) && $_GET['error'] == 'salah') {
                echo '<div class="alert alert-warning alert-dismissible" role="alert" style="width:250px;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Wrong ! <br/></strong> Username dan Password tidak ditemukan
                       </div>'; 
            }?>
  <form action="../controller/login.php" method="post">
        
<input id="name" class="form-control" name="username" placeholder="username" type="text" style="width:250px;"></li>
        <p><br/></p>
<input id="password" class="form-control" name="password" placeholder="**********" type="password" style="width:250px;"></li>
        <br/>
			<span><!--/*<?php echo $error; ?>*/--></span>
			<button name="submit" type="submit" class="btn btn-default" style="width:250px; background :gray;"><span class="glyphicon glyphicon-send"></span>
						Login
						</button>
          </form></center>
  </div>

 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
			