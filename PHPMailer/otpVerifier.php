<?php
session_start();
$otp=$_SESSION['otp'];
$trackingId=$_SESSION['trackingId'];
$otpValidator=$_POST['otpValidator'];
if($otp == $otpValidator){
	$con=mysqli_connect('localhost','root','123456');

	mysqli_select_db($con,'userregistration');
	$reg=" update trackingtable set status = 'Delivered' where trackingId='$trackingId'";
	mysqli_query($con,$reg);
	
	echo '<script language="javascript">';
	echo 'alert("OTP successfully Verified");';
	echo 'window.location.href="../home.php";';
	echo '</script>';
}else {
	echo '<script language="javascript">';
	echo 'alert("Wrong OTP");';
	echo 'window.location.href="otpSender.php";';
	echo '</script>';
}



?>