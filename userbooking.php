<!DOCTYPE html>
<?php
include "db.php";

$email = $_SESSION['email'];	

	$cus = "SELECT * FROM cust WHERE custemail='$email'";	
	$custom = mysqli_query($db, $cus);
	foreach ($custom as $lol){
		$userid = $lol['id'];
	}
	
	$boo = "SELECT * FROM booking JOIN barber ON barber.id = booking.bar_id WHERE cust_id='$userid' AND booking_status='0'";	
	$book = mysqli_query($db, $boo);
	foreach ($book as $booki){
		$barbrid = $booki['bar_id'];
		$sql = "SELECT * FROM barber WHERE id='$barbrid'";	
		$result = mysqli_query($db, $sql);
	}
	
	
	
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BARBA System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="css/style.css">
	
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
		<a href="userprofile.php"><?= $email ?></a>	
      </div>  
    </nav>

	<br><br><br>
	<div class="container" >
		<div class="row">
			<div class="col-sm-1">
				<a href="usermain.php"><b>HOME </b></a>
			</div>
			<div class="col-sm-1">
				<a href="usersearch.php"><b>SEARCH </b></a>
			</div>
			<div class="col-sm-1">
				<a href="userbooking.php"><u><b>BOOKING</b></u></a>
			</div>
		</div>
	</div>
	 
	 
	<div class="container">
		<br><br>
			<div class="col-sm-12">
				<h1>Booking Information</h1>
			  <table style="width:100%; border-spacing:1;" align="center">
				  <tr align="center">
					<th>Barber Name</th>
					<th>Barber's Company</th>
					<th>Barber Email</th>
					<th>Barber Number</th>
					<th>Barber Region</th>
					<th>Action</th>
					
				  </tr>  
				  
				 <?php
				foreach ($book as $key) {
				?> 
				
				<tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" align="center">
					<td><?php echo $key['barname']; ?></td>
					<td><?php echo $key['barcompany']; ?></td>
					<td><?php echo $key['baremail']; ?></td>
					<td><?php echo $key['barphonum']; ?></td>
					<td><?php echo $key['barcity']; ?>,<?php echo $key['barcountry']; ?></td>
					<td><a href="db.php?barb_id=<?php echo  $key['id']; ?>&use_id=<?php echo $userid; ?>" onclick="return confirm('Are You sure');">CANCEL</a></td>
				</tr>			
				
				<?php
					}
				?>
			  </table>		
			</div>
		</div>	
	
     
        
	
    

	
	

        
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
