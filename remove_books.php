<?php include('add_newbooks.php') ?>

<!DOCTYPE html>

<html>

<head>


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

<body style="background:url(../onlinebookstoreminiproject-2/asoggetti-cfKC0UOZHJo-unsplash.jpg);min-height:380px;background-position:center;background-repeat:no-repeat;background-size:cover;position:relative;">

<!-- Navigation -->
<div class="topnav">
<a  class="active" href="adminhome.php">BACK</a>
</div>
<?php
	// call the add_newbook() function if add_newbook button is clicked
	if (isset($_POST['delete']))
	{
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'bookstoredb');
	// receive all input values from the form
	$value = e($_POST['delete_value']);
	if (empty($value))
	{
		array_push($errors, "Feild value is required");
	}
	else
	{
		$sql="SELECT * FROM books WHERE  isbn='$value'";
		$result=mysqli_query($db, $sql) or die(mysqli_error($db));
		if(mysqli_num_rows($result)==0)
		{
			$_SESSION['success'] = "BOOK NOT FOUND!!!";
			header('location: home.php');
		}
		else{
			$sql1="DELETE * FROM books WHERE (isbn='$value') AND type='new'";
			$result1=mysqli_query($db, $sql1) or die(mysqli_error($db));
			$_SESSION['success'] = "Book deleted successfully!!";
			header('location: adminhome.php');
		}
	}
	}
?>
<div class="header">

<h2>Admin - REMOVE BOOKS</h2>

</div>


<form method="POST" action="<?php $_PHP_SELF ?>" enctype="multipart/form-data">


<?php echo display_error(); ?>


<div class="input-group">

<label>ENTER ISBN</label>

<input type="text" name="delete_value">

</div>

<div class="input-group">

<button type="submit" class="btn" name="delete"> DELETE BOOK</button>

</div>

</form>

</body>

</html>
