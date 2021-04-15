<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$var=rand(1000,10000);

$con=mysqli_connect('localhost','root','123456');

mysqli_select_db($con,'userregistration');
$trackingId=$_POST['trackingId'];
$s=" select trackingId,userEmail from trackingtable where trackingId = '$trackingId'";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num == 0){
	//echo" trackingId doesn't exist";
	echo '<script language="javascript">';
	echo 'alert("trackingId doesn\'t exist");';
	echo 'window.location.href="..\otptracker.php";';
	echo '</script>';
}else{
	$row = mysqli_fetch_assoc($result);
	$userEmail=$row['userEmail'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'ssl'; 
$mail->Host = "smtp.gmail.com";
$mail->isHTML(true);
$mail->Username = "autosledge@gmail.com"; 
$mail->Password = "Concordia@2021"; 
$mail->From = "autosledge@gmail.com";

$mail->Port = 465; 
$mail->addAddress($userEmail);
$mail->Subject = "OTP for Delivery";
$mail->Body =$var;
$mail->send();

$_SESSION['otp']=$var;
$_SESSION['trackingId']=$trackingId;
}
?>
<html>
<head>
	<title> Sign In </title>
	<link rel = "stylesheet" type = "text/css" href = "../su-css/style.css">
</head>
	<body>
		<ul>
				<li><a href = "index.php" >Home</a></li>
				<li><a href = "#" >Technology</a></li>
				<li><a href = "#" >About</a></li>
				<li><a href = "track.php" >Track</a></li>
				<li><a href = "SIGNUP.php" >Sign Up</a></li>
				<li class = "active"><a href = "sign-in.php" >Sign in</a></li>

			</ul>
		<div class="sign-up-form">
			<h1>Enter OTP</h1>
			<img src="../su-css/c.png">
			<form action="otpVerifier.php" method="post">
				
				<div class="form-group">
				<input type="text" name="otpValidator" class="input-box" placeholder=" OTP" required>
				</div>
				

				<button type="submit" class="signup-btn">Submit</button>
				
			
			</form>
		</div>
	</body>
	</html>