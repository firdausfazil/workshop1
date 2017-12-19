<!DOCTYPE html>
<?php
include "db.php";
$email = $_SESSION['email'];

$sql="SELECT * FROM barber WHERE baremail='$email'";
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
        <a href="barberprofile.php"><?= $email ?></a>	
      </div>
	  
    </nav>   
	<br><br>
		<form action="db.php" method="post">
      
        <h1>Update Your Profile</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="up_barbername" name="up_barbername" placeholder="<? $disp['barname']; ?>" value="<?php echo $disp['barname']; ?>">
          
          <label for="mail">Email:</label>
          <input type="email" id="up_barberemail" name="up_barberemail" placeholder="<?= $email ?>" value="<?= $email ?>">
          
          <label for="password">Password:</label>
          <input type="text" id="up_barberpassword" name="up_barberpassword" placeholder="<? $disp['barpassword']; ?>" value="<?php echo $disp['barpassword']; ?>">
		  
		  <label for="phonum">Phone Number:</label>
          <input type="text" id="name" name="up_barbernum" placeholder="<? $disp['barphonum']; ?>" value="<?php echo $disp['barphonum']; ?>">
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Your Location</legend>
          <label for="address">Address:</label>
          <input type="text" id="address" name="up_barberaddress" placeholder="<? $disp['baraddress']; ?>" value="<?php echo $disp['baraddress']; ?>">
		  
		  <label for="city">City:</label>
          <input type="text" id="city" name="up_barbercity" placeholder="<? $disp['barcity']; ?>" value="<?php echo $disp['barcity']; ?>">
		  
		  <label for="zip">ZIP Code:</label>
          <input type="text" id="zip" name="up_barberzipcode" placeholder="<? $disp['barzipcode']; ?>" value="<?php echo $disp['barzipcode']; ?>">
		  
		  <label for="country">Country:</label>
		  <select id="contry" name="up_barbercountry">
		  <option value="PERLIS">Perlis</option>
		  <option value="KEDAH">Kedah</option>
		  <option value="PENENG">Pulau Pinang</option>
		  <option value="PERAK">Perak</option>
		  <option value="SELANGOR">Selangor</option>
		  <option value="PAHANG">Pahang</option>
		  <option value="NEGERI SEMBILAN">Negeri Sembilan</option>
		  <option value="MELAKA">Melaka</option>
		  <option value="JOHOR">Johor</option>
		  <option value="SABAH">Sabah</option>
		  <option value="SARAWAK">Serawak</option>
		  <option value="KELANTAN">Kelantan</option>
		  <option value="TERENGGANU">Terengganu</option>
		  <option value="WILAYAH PERSEKUTUAN">Wilayah Persekutuan</option>
		  </select>
        </fieldset>
		
        <fieldset>
		<legend><span class="number">3</span>Company</legend>
		  <label for="name">Company Name:</label>
          <input type="text" id="name" name="up_barbercname" placeholder="<? $disp['barcompany']; ?>" value="<?php echo $disp['barcompany']; ?>">
		
          <label>Services Given:</label>
          <input type="checkbox" id="haircut" value="1" name="service1"><label class="light" >Hair Cut</label><br>
           <input type="checkbox" id="haircut" value="1" name="service2"><label class="light" >Hair Cleaning</label><br>
          <input type="checkbox" id="haircoloring" value="1" name="service3"><label class="light" >Hair Coloring</label><br>
		  <input type="checkbox" id="essentialfacials" value="1" name="service4"><label class="light" >Essential Facials</label>
        </fieldset>
        <button type="submit" name="updatebarber">Sign Up</button>
      </form>

	<?php
		}
	?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
