<?php

session_start();

$con=mysqli_connect('localhost','root','123456');

mysqli_select_db($con,'userregistration');

$trackingId=$_POST['trackingId'];
$status=$_POST['status'];
$email=$_POST['email'];
$useremail=$_POST['useremail'];
$Address=$_POST['Address'];


	
	$s=" select * from trackingtable where trackingId = '$trackingId' ";

	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);
	if($num == 0){
		$reg=" INSERT INTO trackingtable (trackingId, email, status, Address, PreferredTime, userEmail) VALUES ('$trackingId','$email','$status','$Address','','$useremail') ";
	//INSERT INTO `trackingtable` (`trackingId`, `email`, `status`, `Address`, `PreferredTime`, `userEmail`) VALUES  ('7890', 'd@gmail.com', 'In transit', '489 Milton', '', 'dj@gmail.com')
		mysqli_query($con,$reg);
		echo '<script language="javascript">';
		echo 'alert(" successfully Inserted");';
		echo 'window.location.href="index.php";';
		echo '</script>';
	}	else{
		$reg=" UPDATE trackingtable SET email='$email',status='$status',Address='$Address',userEmail='$useremail' ";
		// update trackingtable set Time = '$time' where trackingId='$trackingId'
		// UPDATE trackingtable SET email='$email',status='$status',Address='$Address',userEmail='$useremail'
	//INSERT INTO `trackingtable` (`trackingId`, `email`, `status`, `Address`, `PreferredTime`, `userEmail`) VALUES  ('7890', 'd@gmail.com', 'In transit', '489 Milton', '', 'dj@gmail.com')
		mysqli_query($con,$reg);
		echo '<script language="javascript">';
		echo 'alert(" successfully Updated");';
		echo 'window.location.href="index.php";';
		echo '</script>';
	}
	


?>                               
                                 
                                 
                                 