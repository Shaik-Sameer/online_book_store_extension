<?php
include('adminfunctions.php');
?>

<!DOCTYPE html>

<html>

<head>

<title>Home</title>

<link rel="stylesheet" type="text/css" href="style.css">

<style>

.header {

background: #003366;

}

button[name=register_btn] {

background: #003366;

}

</style>

</head>

<body  style="background:url(../onlinebookstoreminiproject-2/asoggetti-cfKC0UOZHJo-unsplash.jpg);min-height:380px;background-position:center;background-repeat:no-repeat;background-size:cover;position:relative;">

<div class="header">

<h2>Admin - Home Page</h2>

</div>

<div class="content">

<!-- notification message -->

<?php if (isset($_SESSION['success'])) : ?>

<div class="error success" >

<h3>

<?php

echo $_SESSION['success'];

unset($_SESSION['success']);

?>

</h3>

</div>

<?php endif ?>


<!-- logged in user information -->

<div class="profile_info">

<img src="user_profile.png"  >


<div>

<?php  if (isset($_SESSION['user'])) : ?>

<strong>
<?php echo $_SESSION['user']['username']; ?>
</strong>


<small>

<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>

<br>

&nbsp; <a href="add_books.php"> ADD BOOKS</a> <br>
&nbsp; <a href="remove_books.php"> REMOVE BOOKS</a> <br>
&nbsp; <a href="adduandv.php"> ADD USER OR VENDOR</a> <br>
&nbsp; <a href="removeuandv.php"> REMOVE USER OR VENDOR</a> <br>
<a href="adminlogout.php" style="color: red;">logout</a>
	<br>	</small>


<?php endif ?>

</div>

</div>




</div>


</body>

</html>
