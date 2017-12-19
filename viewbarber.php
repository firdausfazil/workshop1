<!DOCTYPE html>
<?php
include "db.php";

$email = $_SESSION['email'];	
$str  = $_REQUEST['barbra_id'];
$sql="SELECT * FROM barber WHERE id='$str'";
$result = mysqli_query($db, $sql);
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
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="css/style.css">
	

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="usermain.php">BarBa</a>
		<a href=""><?= $email ?></a>	
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
				<a href="userbooking.php"><b>BOOKING</b></a>
			</div>
		</div>
	</div>
	
	<div class="container">
	<br><br>
	
	<div class="row">
	<div class="col-sm-12">
	<h1>Barber Profile</h1>
	<table style="width:100%; border-spacing:1;"  align="center">
		<?php
          foreach ($result as $key) {  
		?>
		<tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" align="center">
			<td>Name:</td>
			<td><?php echo $key['barname']; ?></td>
		</tr>
		<tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" align="center">
			<td>Email:</td>
			<td><?php echo $key['baremail']; ?></td>
		</tr>
		<tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" align="center">
			<td>Phone Number:</td>
			<td><?php echo $key['barphonum']; ?></td>
		</tr>
		<tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" align="center">
			<td>Company Name:</td>
			<td><?php echo $key['barcompany']; ?></td>
		</tr>
		<tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" align="center">
			<td>Address:</td>
			<td><?php echo $key['baraddress']; ?>, <?php echo $key['barcity']; ?>, <?php echo $key['barzipcode']; ?>, <?php echo $key['barcountry']; ?></td>
		</tr>
		
		<?php
			}//while
		?>
	</table>
	</div>
	</div>
	</div>
	
     
	 
	
    

	

        
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
