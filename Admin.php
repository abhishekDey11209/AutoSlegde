<html>
<head>
	<title> Sign up </title>
	<link rel = "stylesheet" type = "text/css" href = "SU-CSS/style.css">
</head>
	<body>
		<ul>
				<li><a href = "index.php" >Home</a></li>
				<li class = "active"><a href = "Admin.php" >Admin</a></li>
				<li><a href = "#" >About</a></li>
				<li><a href = "track.php" >Track</a></li>
				<li ><a href = "SIGNUP.php" >Sign Up</a></li>
				<li><a href = "sign-in.php" >Sign in</a></li>

			</ul>
		<div class="sign-up-form">
			<h1> Tracking Details </h1>
			<img src="su-css/c.png">
			<form action="AdminTracker.php" method="post">
				<div class="form-group">
				<input type="Number" name="trackingId" class="input-box" placeholder="trackingId">
				</div>
				<div class="form-group">
				<!-- <input type="text" name="status" class="input-box" placeholder="status"> -->
				<select name="status" id="status">
 				<option value="In Transit">In Transit</option>
 				<option value="Delivered">Delivered</option>
   				<option value="Not Picked Up">Not Picked Up</option>
  				
 				</select>
				</div>
				<div class="form-group">
				<input type="email" name="email" class="input-box" placeholder=" Email of Driver" >
				</div>
				<div class="form-group">
				<input type="text" name="Address" class="input-box" placeholder="Address" >
				</div>
				<div class="form-group">
				<input type="email" name="useremail" class="input-box" placeholder="Email of customer" >
				</div>
				
				

				<button type="submit" class="signup-btn">Update</button>
				
				
			</form>
		</div>
	</body>
	</html>
	