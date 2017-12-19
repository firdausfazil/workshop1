<!DOCTYPE html>
<?php
include "db.php";

$email = $_SESSION['email'];	
$sql = "SELECT * FROM barber WHERE baremail='$email'";
$con = mysqli_query($db, $sql);
foreach ($con as $row){
$new = $row['barstatus'];
$barid = $row['id'];
}

$boo = "SELECT * FROM booking JOIN cust ON cust.id = booking.cust_id WHERE bar_id='$barid'  AND booking_status='0'";	
	$book = mysqli_query($db, $boo);
	foreach ($book as $booki){
		$userbook = $booki['cust_id'];
		$barbook = $booki['bar_id'];
		$cus = "SELECT * FROM cust WHERE id='$userbook'";	
	$custom = mysqli_query($db, $cus);
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
        <a class="navbar-brand" href="#">BarBa</a>
		<a href="barberprofile.php"><?= $email ?></a>
        	
      </div>
    </nav>  
	
	<br><BR>
	<div class="container" >
		<div class="row">
			<div class="col-sm-1">
				<a href="barbermain.php"><u><b>HOME </b></u></a>
			</div>
			<div class="col-sm-1">
				<a href="barberstatus.php"><b>STATUS</b></a>
			</div>
			</div>
	</div>>
	 
	 
	
<div class="container">
<br><br>
    <div class="col-sm-12">
        <h1>Booking Information</h1>
      <table style="width:100%; border-spacing:1;" align="center">
          <tr align="center">
          	<th>Customer Name</th>
          	<th>Customer Email</th>
            <th>Customer Number</th>
			<th>Action</th>
            
          </tr> 

			<?php
				foreach ($book as $key) {
				?>
				
				<tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" align="center">
					<td><?php echo $key['custname']; ?></td>
					<td><?php echo $key['custemail']; ?></td>
					<td><?php echo $key['custphonum']; ?></td>
					<td><a href="db.php?barbe_id=<?php echo $barbook  ?>&u_id=<?php echo $key['id']; ?>" onclick="return confirm('Are You sure');">CANCEL</a>  | 
						<a href="db.php?b_id=<?php echo  $barbook ?>&us_id=<?php echo $key['id']; ?>" onclick="return confirm('Are You sure');">COMPLETE</a></td>
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
