<?php include('userfunctions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:url(../obs2/asoggetti-cfKC0UOZHJo-unsplash.jpg);min-height:380px;background-position:center;background-repeat:no-repeat;background-size:cover;position:relative;">
	<div class="topnav">
		<img src="IMG_1584976001886.jpg" width=50px height=47px style="float:left;">
	       <a class="active" href="loginandsignup.php">LOGIN</a>
				 <a  class="pasive" href="mainpage.php">HOME</a>
	</div>
	<div class="header">
		<h2>USER REGISTRATION</h2>
	</div>

	<form method="post" action="userregister.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Register</button>
		</div>
		<p>
			Already a member? <a href="userlogin.php">Sign in</a>
		</p>
	</form>
</body>
</html>
