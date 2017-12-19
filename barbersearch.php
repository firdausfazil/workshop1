<!DOCTYPE html>
<?php
include "db.php";

$email = $_SESSION['email'];	
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BARBA System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="css/style.css">
	
	

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">BarBa</a>
		<a href=""><?= $email ?></a>
        	
      </div>
    </nav>  
	
	<br><BR>
	<div class="container" >
		<div class="row">
			<div class="col-sm-1">
				<a href="barbermain.php"><b>HOME </b></a>
			</div>
			<div class="col-sm-1">
				<a href="barbersearch.php"><u><b>SEARCH </b></u></a>
			</div>
			<div class="col-sm-1">
				<a href="barberstatus.php"><b>STATUS</b></a>
			</div>
		</div>
	</div>
	 
	 
	
	<div class="container">
		<br><br><br><br>
		<div class="col-sm-4">
			<b>Search Here :</b>
			<input class="contact" type="text" name="bsearch"/>
		</div>
		<div class="col-sm-2">
            <button type="submit" name="barbersearch">Search</button>
		</div>
	</div>
	
	<div class="container">
	<br><br><br>
		<div class="col-sm-12">
				<h1>Search Information</h1>
			<table style="width:100%; border-spacing:1;" align="center">
				<tr align="center">
					<th>Customer Name</th>
					<th>Barber Email</th>
					<th>Barber Number</th>
					<th>Action</th>
				</tr>  
			</table>	
		</div>
	</div>
	  
 
		

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
