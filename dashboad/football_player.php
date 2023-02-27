<?php

?>


<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="style1.css">
	<title>PLAYER DETAILS</title>
</head>
<body>
<div class="container">
	<div class="card">
		<div class="img_container">
			<img src="images/user.png" alt="">
            <h3>PLAYER DETAILS</h3>

		</div>
		<form action="" onsubmit="return validateForms()"   method="POST" autocomplete="off">
			<!-- <input type="text" name="name" placeholder="Full name" required> -->
			<input type="text" name="name" id="name" placeholder="name" value=""> <br />
			

<!-- <input type="email" name="email" placeholder="Email" required> -->
			
			<input type="dob" id="dob" name="dob" placeholder="password"><br>
            
			
			<input class="text" type="gender" name="gender" value="gender" id="gender"><br>

            <input type="text" id="dob" name="nationality" placeholder="nationality"><br>
            
            <input type="text" id="dob" name="position" placeholder="position"><br>
            
            <input type="text" id="shirtNumber" name="shirtNumber" placeholder="shirtNumber"><br>

			
		</form>
</div>
</div>
<script src="js/bootstrap.js"></script>

</body>
</html>