<?php

session_start();
	// connect to the database
	$db = mysqli_connect("localhost", "root", "", "barba");


if(isset($_POST['usersignup'])){
	
$_SESSION['email'] = $_POST['user_email'];	
	
$name = mysql_real_escape_string($_POST['user_name']);
$email = mysql_real_escape_string($_POST['user_email']);
$password = mysql_real_escape_string($_POST['user_password']);
$phonenum= mysql_real_escape_string($_POST['user_num']);

		$sql = "SELECT * FROM cust WHERE custemail='$email'";
		$result = mysqli_query($db, $sql);
		$count = mysqli_num_rows($result);
	
		if($count == 0){
			$sql = "INSERT INTO cust (custname, custemail, custpassword, custphonum)
					VALUES ('$name', '$email', '$password', '$phonenum')";
			mysqli_query($db, $sql);
			header('location: usermain.php');
		}else{
			
			$message = "Email already exist";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
}


if(isset($_POST['barbersignup'])){
	
$_SESSION['email'] = $_POST['barber_email'];

$bname = mysql_real_escape_string($_POST['barber_name']);
$bemail = mysql_real_escape_string($_POST['barber_email']);
$bpassword = mysql_real_escape_string($_POST['barber_password']);
$bphonenum= mysql_real_escape_string($_POST['barber_num']);
$baddress= mysql_real_escape_string($_POST['barber_address']);
$bcity= mysql_real_escape_string($_POST['barber_city']);
$bzip= mysql_real_escape_string($_POST['barber_zipcode']);
$bcountry= mysql_real_escape_string($_POST['barber_country']);
$bcompany = mysql_real_escape_string($_POST['barber_cname']);

$barcut = mysql_real_escape_string($_POST['service1']);
$barclean = mysql_real_escape_string($_POST['service2']);
$barcolor = mysql_real_escape_string($_POST['service3']);
$barfacial = mysql_real_escape_string($_POST['service4']);
	
		$sql = "SELECT * FROM barber WHERE baremail='$bemail'";
		$result = mysqli_query($db, $sql);
		$count = mysqli_num_rows($result);
	
		if($count == 0){
		 $sql = "INSERT INTO barber (barname, baremail, barpassword, barphonum, baraddress, 
					barcity, barzipcode, barcountry, barcompany, barstatus)
				VALUES ('$bname', '$bemail', '$bpassword', '$bphonenum', '$baddress', '$bcity', 
				'$bzip', '$bcountry', '$bcompany', '1')";
			mysqli_query($db, $sql);
		
		($barcut==''?0 : $barcut);
		($barclean==''?0 : $barclean);
		($barcolor==''?0 : $barcolor);
		($barfacial==''?0 : $barfacial);
			$sql ="INSERT INTO service (haircut, haircleaning, haircoloring, essentialfacials)
					VALUES ('$barcut', '$barclean', '$barcolor', '$barfacial')";
			mysqli_query($db, $sql);
		header('location: barbermain.php'); 
		}else{
			$message = "Email already exist";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
}

if(isset($_POST['statusupdate'])){
	
$email = $_SESSION['email'];
	
$bstatus = mysql_real_escape_string($_POST['status']);
	
	$sql = "UPDATE barber SET barstatus='$bstatus' WHERE baremail='$email'";
	mysqli_query($db, $sql);
	header('location: barbermain.php');
}

if (isset($_POST['login'])) {

$loge = mysql_real_escape_string($_POST['logemail']);
$logp = mysql_real_escape_string($_POST['logpassword']);
$signas = mysql_real_escape_string($_POST['sign']);
$_SESSION['email'] = $_POST['logemail'];


if ($signas==1) {
	$sql = "SELECT * FROM cust WHERE custemail='$loge' AND custpassword='$logp'";
	$result = mysqli_query($db, $sql);
	$count = mysqli_num_rows($result);
	
	if($count == 1){	
	$_SESSION['user_id'] = $row['id'];
	header('location: usermain.php');
	}else{
	$message = "wrong Email/Password";
	echo "<script type='text/javascript'>alert('$message');</script>";
	}
}
else{
	$sql = "SELECT * FROM barber WHERE baremail='$loge' AND barpassword='$logp'";	
	$result = mysqli_query($db, $sql);
	$count = mysqli_num_rows($result);

	if($count == 1){
		$_SESSION['user_id'] = $row['id'];
		header('location: barbermain.php');
	}
	else{
		$message = "wrong Email/Password";
		echo "<script type='text/javascript'>alert('$message');</script>";}
}		
}

if (isset($_POST['deleteuser'])) {
	$email = $_SESSION['email'];	
	$sql = "DELETE FROM cust WHERE custemail='$email'";
	mysqli_query($db, $sql);
	header('location: index.php');
}

if (isset($_POST['updateuser'])) {
	$email = $_SESSION['email'];	
	header('location: userupdate.php');
}

if (isset($_POST['userupdate'])) {

$email = $_SESSION['email'];	
	
$cname = mysql_real_escape_string($_POST['up_username']);
$cemail = mysql_real_escape_string($_POST['up_useremail']);
$cpassword = mysql_real_escape_string($_POST['up_userpassword']);
$cphonenum = mysql_real_escape_string($_POST['up_usernum']);
	
	$sql = "UPDATE cust SET custname='$cname', custemail='$cemail', custpassword='$cpassword', custphonum='$cphonenum' WHERE custemail='$email'";
	mysqli_query($db, $sql);
	header('location: usermain.php');
}

if (isset($_POST['deletebarber'])) {
	$email = $_SESSION['email'];

	$sql = "SELECT * FROM barber WHERE baremail='$email'";
	$custo = mysqli_query($db, $sql);
	foreach ($custo as $lol){
		$bar_id = $lol['id'];
	}	
	$sql = "DELETE FROM barber WHERE baremail='$email'";
	mysqli_query($db, $sql);
	
	$sql = "DELETE FROM service WHERE id='$bar_id'";
	mysqli_query($db, $sql);
	header('location: index.php');
}

if (isset($_POST['updatebarber'])) {
	$email = $_SESSION['email'];	
	header('location: barberupdate.php');
}

if (isset($_POST['barberupdate'])) {

$email = $_SESSION['email'];	
	
$bname = mysql_real_escape_string($_POST['up_barbername']);
$bemail = mysql_real_escape_string($_POST['up_barberemail']);
$bpassword = mysql_real_escape_string($_POST['up_barberpassword']);
$bphonenum= mysql_real_escape_string($_POST['up_barbernum']);
$baddress= mysql_real_escape_string($_POST['up_barberaddress']);
$bcity= mysql_real_escape_string($_POST['up_barbercity']);
$bzip= mysql_real_escape_string($_POST['up_barberzipcode']);
$bcountry= mysql_real_escape_string($_POST['up_barbercountry']);
$bcompany = mysql_real_escape_string($_POST['up_barbercname']);

$barcut = mysql_real_escape_string($_POST['service1']);
$barclean = mysql_real_escape_string($_POST['service2']);
$barcolor = mysql_real_escape_string($_POST['service3']);
$barfacial = mysql_real_escape_string($_POST['service4']);
	
	$sql = "SELECT * FROM barber WHERE baremail='$email'";
	$custo = mysqli_query($db, $sql);
	foreach ($custo as $lol){
		$bar_id = $lol['id'];
	}
	$sql = "UPDATE barber SET barname='$bname', baremail='$bemail', barpassword='$bpassword', barphonum='$bphonenum', baraddress='$baddress', barcity='$bcity', barzipcode='$bzip', barcountry='$bcountry', barcaompany='$bcompany' WHERE custemail='$email'";
	mysqli_query($db, $sql);
	
	$sql = "UPDATE service SET haircut='$barcut', haircleaning='$barclean', haircoloring='$barcolor', essentialfacials='$barfacial' WHERE id='$bar_id'";
	mysqli_query($db, $sql);
	header('location: index.php');
	header('location: barbermain.php');
}

if (isset($_POST['logoutuser'])) {
	header('location: index.php');
}

if (isset($_POST['fsignup'])) {
	
$_SESSION['femail'] = $_POST['femail'];
	header('location: usersignup.php');
}

if (isset($_POST['fspsignup'])) {
	
$_SESSION['spemail'] = $_POST['spemail'];
	header('location: barbersignup.php');
}


if(isset($_REQUEST['barber_id'])&&($_REQUEST['user_id'])) {
	
$barid  = $_REQUEST['barber_id'];
$usid = $_REQUEST['user_id'];
	
	
	$sql = "INSERT INTO booking (cust_id, bar_id, booking_status)
			VALUES ('$usid','$barid', '0')";
	mysqli_query($db, $sql);
	header('location: userbooking.php');
}

if(isset($_REQUEST['barb_id'])&&($_REQUEST['use_id'])) {
	
$baid  = $_REQUEST['barb_id'];
$useid = $_REQUEST['use_id'];
	

	$sql = "DELETE FROM booking WHERE cust_id='$useid' AND bar_id='$baid' ";
	mysqli_query($db, $sql);
	header('location: usermain.php');
}

if(isset($_REQUEST['barbe_id'])&&($_REQUEST['u_id'])) {
	
$baid  = $_REQUEST['barbe_id'];
$useid = $_REQUEST['u_id'];
	

	$sql = "DELETE FROM booking WHERE cust_id='$useid' AND bar_id='$baid' ";
	mysqli_query($db, $sql);
	header('location: barbermain.php');
}

if(isset($_REQUEST['b_id'])&&($_REQUEST['us_id'])) {
	
$baid  = $_REQUEST['b_id'];
$useid = $_REQUEST['us_id'];
	
	
	$sql = "UPDATE booking SET booking_status='1' WHERE cust_id='$useid' AND bar_id='$baid' ";
	mysqli_query($db, $sql);
	header('location: barbermain.php');
}

if(isset($_POST['usersearch'])) {

$_SESSION['search'] = $_POST['usearch'];

header('location: usersearch.php');

}



?>


