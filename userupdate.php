<!DOCTYPE html>

<?php
include "db.php";

$email = $_SESSION['email'];

$sql="SELECT * FROM cust WHERE custemail='$email'";
$result = mysqli_query($db, $sql);

foreach($result as $disp) {
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
        <a class="navbar-brand" href="#">BarBa</a>
        <a href="userprofile.php"><?= $email ?></a>	
      </div>
	  
    </nav>   
	<br><br>
		<form action="db.php" method="post">
      
        <h1>Update Your Profile</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="up_username" name="up_username" placeholder="<? $disp['custname']; ?>" value="<?php echo $disp['custname']; ?>">
          
          <label for="mail">Email:</label>
          <input type="email" id="up_useremail" name="up_useremail" placeholder="<?= $email ?>" value="<?= $email ?>">
          
          <label for="password">Password:</label>
          <input type="text" id="up_userpassword" name="up_userpassword" placeholder="<? $disp['custpassword']; ?>" value="<?php echo $disp['custpassword']; ?>">
		  
		  <label for="phonum">Phone Number:</label>
          <input type="text" id="up_usernum" name="up_usernum" placeholder="<? $disp['custphonum']; ?>" value="<?php echo $disp['custphonum']; ?>">
        </fieldset>
        
        <button type="submit" name="userupdate" id="userupdate">Update</button>
      </form>

	<?php
		}
	?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
