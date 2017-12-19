<!DOCTYPE html>
<?php
include "db.php";

$email = $_SESSION['email'];

	$sql = "SELECT * FROM barber WHERE barstatus='1'";	
	$result = mysqli_query($db, $sql);
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
				<a href="usermain.php"><u><b>HOME </b></u></a>
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
    <div class="col-sm-12">
        <h1>Available Barber</h1>
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
          foreach ($result as $key) {   
		?> 
		<tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" align="center">
			<td><?php echo $key['barname']; ?></td>
			<td><?php echo $key['barcompany']; ?></td>
			<td><?php echo $key['baremail']; ?></td>
			<td><?php echo $key['barphonum']; ?></td>
			<td><?php echo $key['barcity']; ?>,<?php echo $key['barcountry']; ?></td>
			<td><a href="db.php?barber_id=<?php echo  $key['id']; ?>&&user_id=<?php echo $user_id; ?>" onclick="return confirm('Are You sure');">BOOK</a> |
			<a href="viewbarber.php?barber_id=<?php echo  $key['id']; ?>">VIEW</a></td>
		</tr>
			
		  
		  
		<?php
  }//while
  ?>  
	</table>
        	
      </div>
	  </div>
	
     
        
	
    

	
	

        
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
