<?php
session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<title> Tracking </title>
	<link rel = "stylesheet" type = "text/css" href = "t-css/style1.css">
	<style>
		table, th, td {
		border: 1px solid white;
		width: 75%;
		color:white;
		}
		
		th, td {
		text-align: left;
		padding: 32px;
}
</style>
</head>
	<body>
		
			
		<br>
		<h1 style="color:white"> Welcome <?php echo $_SESSION['name']; ?></h1>
		
		<br>
			<br>
				<br>
					<br>
	<ul>
				<li><a href = "index.php" >Home</a></li>
				<li><a href = "#" >Technology</a></li>
				<li><a href = "#" >About</a></li>
				<li class = "active"><a href = "track.php" >Track</a></li>
				<li ><a href = "SIGNUP.php" >Sign Up</a></li>
				<li ><a href = "sign-in.php" >Sign in</a></li>

			</ul>
		
		
<?php 
	$con=mysqli_connect('localhost','root','123456');

	mysqli_select_db($con,'userregistration');
	$user=$_SESSION['username'];
	$type=$_SESSION['type'];
	
	$qry=" select trackingId,status,Address,PreferredTime from trackingtable where email = '$user'";
		$qryResult=mysqli_query($con,$qry);
	
	if($type=="Driver"){
		
		echo "<table>";
		echo "<tr><td>" . "Tracking ID" . "</td><td> " . "Status" . "</td><td> " . "Delievery Address" . "</td><td> " . "Time" . "</td></tr>"; 
		while($row = mysqli_fetch_assoc($qryResult)) {
			echo "<tr><td >" . $row['trackingId'] . "</td><td> " . $row['status'] . "</td><td> " . $row['Address'] . "</td><td> " . $row['PreferredTime'] . "</td></tr>"; 
			}
		echo "</table>";
		echo "<li ><a href = \"otptracker.php\" style=\"color:Red\"  >OTP</a></li>";
	}if($type=="Customer"){
		$qry=" select trackingId,status,Address,PreferredTime from trackingtable where userEmail = '$user'";
		$qryResult=mysqli_query($con,$qry);
		
		echo "<br>";
		echo "<table>";
		echo "<tr><td>" . "Tracking ID" . "</td><td> " . "Status" . "</td><td> " . "Delievery Address" . "</td><td> " . "Time" . "</td></tr>"; 
		while($row = mysqli_fetch_assoc($qryResult)) {
			echo "<tr><td >" . $row['trackingId'] . "</td><td> " . $row['status'] . "</td><td> " . $row['Address'] . "</td><td> " . $row['PreferredTime'] . "</td></tr>"; 
			}
		echo "</table>";
		echo "<br>";
		echo "<li ><a href = \"timeSetter.php\" style=\"color:white\"  >Set Preferred Time</a></li>";
	}
?>
  
<br>
		<a href = "logout.php" style="color:#fff" > LOGOUT </a>

	</body>
	</html>