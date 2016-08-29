<?php
$a = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hotel Meihwa</title>

    <!-- call the Bootstrap -->
    
	<link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/index.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="../img/favicon.ico"/>
  <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    
	</head>
  <body>
  <br/>
  <div class="container">
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Hotelku.com</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="room.php">Rooms</a></li>
        <li><a href="pengunjung.php?default">Pengunjung</a></li>
          <form class="navbar-form navbar-right" action="">
            <input type="text" class="form-control" name="search" placeholder="Search...">
            <button type="submit" class="btn btn-info" ><span class="glyphicon glyphicon-search"></span></button>
          </form>
      </ul>
            
<ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
            <?php echo $a ;?> &nbsp; <span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Account</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../../controller/logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
 