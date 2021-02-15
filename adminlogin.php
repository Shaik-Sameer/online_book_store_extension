<?php include('adminfunctions.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:url(../onlinebookstoreminiproject-2/asoggetti-cfKC0UOZHJo-unsplash.jpg);min-height:380px;background-position:center;background-repeat:no-repeat;background-size:cover;position:relative;">
<div>
<!-- Navigation -->
<div class="topnav">
	<img src="IMG_1584976001886.jpg" width=50px height=47px style="float:left;">
<a  class="active" href="loginandsignup.php">LOGIN</a>
<a  class="passive" href="mainpage.php">HOME</a>
</div>

	<div class="header">
		<h2>ADMIN LOGIN</h2>
	</div>

	<form method="post" action="adminlogin.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
	</form>


</body>
</html>
