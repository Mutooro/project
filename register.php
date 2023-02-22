
<?php if(!isset($username)){
	$username ='';
}


 ?> 

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style1.css">
	<title>Signup page</title>
</head>
<body>
<div class="container">
	<div class="card">
		<div class="img_container">
			<img src="images/user.png" alt="">
			<h3>Signup</h3>
		</div>
		<form action="results.php" id="registrationForm" onsubmit="return validateForm()" method="POST" autocomplete="off">
			<input type="text" id="name" name="name" placeholder="Full name" >
			<input type="text" name="username" placeholder="username" value="<?php echo htmlspecialchars($username) ?>" <br />
			

			<input type="email"id="email" name="email" placeholder="Email" >
			
			<input type="password" id="password" name="password" placeholder="password"><br>
			<input type ="password" id="confirm_password" name="password2" placeholder ="Confirm password">
			
			<input class="register_button" type="submit" name="submit" value="REGISTER">
			<p><a href="login.php">Already have account?</a></p>
		</form>
</div>
</div>
<script src="js/registerForm.js"></script>
</body>
</html>