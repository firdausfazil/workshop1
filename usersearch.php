<!DOCTYPE html>
<?php
include "db.php";

$email = $_SESSION['email'];	


if(isset($_SESSION['search'])){
	$ussearch = $_SESSION['search'];
	$sql = "SELECT * FROM barber WHERE barcountry='$ussearch' ";
	$result = mysqli_query($db, $sql);}
else{
	$sql = "SELECT * FROM barber WHERE barcountry='melaka' ";
	$result = mysqli_query($db, $sql);
}

	$cust = "SELECT * FROM cust WHERE custemail='$email'";	
	$custo = mysqli_query($db, $cust);
	foreach ($custo as $lol){
		$user_id = $lol['id'];
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
        <a class="navbar-brand" href="usermain.php">BarBa</a>
		<a href="userprofile.php"><?= $email ?></a>
        	
      </div>
    </nav>  
	
	<br><BR>
	<div class="container" >
		<div class="row">
			<div class="col-sm-1">
				<a href="usermain.php"><b>HOME </b></a>
			</div>
			<div class="col-sm-1">
				<a href="usersearch.php"><u><b>SEARCH </b></u></a>
			</div>
			<div class="col-sm-1">
				<a href="userbooking.php"><b>BOOKING</b></a>
			</div>
		</div>
	</div>
	 
	 
	
	<div class="container">
		<br><br><br><br>
		<form action="db.php" method="POST">
		<div class="col-sm-12">
			<b>Search by country :</b>
			<input class="contact" type="text" name="usearch">
		</div>
		<div class="col-sm-6">
            <button type="submit" name="usersearch">Search</button>
		</div>
		</form>
	</div>
	
	<div class="container">
	<br><br><br>
		<div class="col-sm-12">
				<h1>Search Information</h1>
			<table style="width:100%; border-spacing:1;" align="center">
				<tr align="center">
					<th>Barber Name</th>
					<th>Barber's Company</th>
					<th>Barber Region</th>
					<th>Action</th>
				</tr> 

				<?php
					foreach ($result as $key) {
				?> 
				
				<tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" align="center">
					<td><?php echo $key['barname']; ?></td>
					<td><?php echo $key['barcompany']; ?></td>
					<td><?php echo $key['barcity']; ?>,<?php echo $key['barcountry']; ?></td>
					<td><a href="db.php?barber_id=<?php echo  $key['id']; ?>&&user_id=<?php echo $user_id; ?>" onclick="return confirm('Are You sure');">BOOK</a> |
					<a href="viewbarber.php?barbra_id=<?php echo  $key['id']; ?>">VIEW</a></td>
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
