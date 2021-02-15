<?php
include('userfunctions.php');
?>

<!DOCTYPE html>
<html>
<head>
<style>
footer {
width: 100%;
background-color: #00334d;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style2.css">

</head>
<body style="background:url(../onlinebookstoreminiproject-2/asoggetti-cfKC0UOZHJo-unsplash.jpg);min-height:380px;background-position:center;background-repeat:no-repeat;background-size:cover;position:relative;">
<!-- Navigation -->
<div class="topnav">
	<img src="IMG_1584976001886.jpg" width=50px height=47px style="float:left;">
       <a class="active" href="loginandsignup.php">LOGIN</a>
			  <a  class="passive" href="newbooks_display.php">NEW BOOKS</a>
        <a  class="active" href="oldbooks_display.php">OLD BOOKS</a>
       <a class="pasive" href="cart.php">CART</a>

</div>
			 <div style="float: right;text-align: right;color: #888">

			 <?php  if (isset($_SESSION['user'])) : ?>

			 <strong>
			 <?php echo $_SESSION['user']['username']; ?>
			 </strong>
			 <i>(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>

			 <br>

<a href="userlogout.php" style="color: red;">logout</a>

<?php else: ?>
<a href="userlogin.php" style="color: red;">login</a>
<?php endif ?>
</div>
</div>
<form action="searchbar.php" method="post">
<section>
<div class="wrap">
   <div class="search" aling="center">
      <input type="text" name="search" class="searchTerm" placeholder="search books..." style="font-size:20px;">
      <button type="submit" class="searchButton">search</button>
   </div>
</div>
</section>
</form>
<!-- Slide Show -->
<div aling="center">
<section>
  <img class="mySlides"  src="aliptak_190612_3457_8687.0.JPG"  width=1567px height=500px>
<img class="mySlides"  src="SAVE_20200113_172917.JPG" width=1567px height=500px>
<img  class="mySlides"  src="free-book-library.JPG"  width=1567px height=500px>
<img  class="mySlides"  src="getty_883231284_200013331818843182490_335833.jpg"  width=1567px height=500px>
<img  class="mySlides"  src="daisy-2320519_1920.jpg"  width=1567px height=500px>
</section>
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
<?php
$con = mysqli_connect('localhost', 'root', '', 'bookstoredb');
$status="";
if (isset($_POST['isbn']) && $_POST['isbn']!=""){
$isbn = $_POST['isbn'];
$result = mysqli_query($con,"SELECT * FROM books WHERE isbn='$isbn' AND type='new'");
$row = mysqli_fetch_assoc($result);
$book_title = $row['book_title'];
$isbn = $row['isbn'];
$author = $row['author'];
$publisher = $row['publisher'];
$price = $row['price'];
$image = $row['image_loc'];
$image_loc = "upload/".$image;

$cartArray = array(
	$isbn=>array(
	'book_title'=>$book_title,
	'isbn'=>$isbn,
	'author'=>$author,
	'publisher'=>$publisher,
	'price'=>$price,
	'quantity'=>1,
	'image_loc'=>$image_loc)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($isbn,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
if (isset($_POST['img']) && $_POST['img']!=""){
$isbn = $_POST['img'];
$_SESSION["image_details"] = $isbn;
header('location: index.php');
}
?>
<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
<?php
$i=1;
$sql = "SELECT * FROM books" ;
echo "<div style='float: right;text-align: right;color: #888;'>
<a href='' style='color: red;'>logout</a>
</div>";
while($row = mysqli_fetch_assoc($result)){
	  if($i>=13)
		{
			break;
		}
		if($i%4==0)
		{
		echo " <div class='row'> ";
		}
		echo " <div class='product_wrapper'>
		 	<form method='post' action=''>
			<div class='image'><button type='submit' name='img' value=".$row['isbn']."><img src='upload/".$row['image_loc']."' width=200px hieght=250px></button></div>
			</form>
			<form method='post' action=''>
			<input type='hidden' name='isbn' value=".$row['isbn'].">
			<div class='name'>".$row['book_title']."</div>
			<div class='name'>".$row['author']."</div>
			<div class='name'>".$row['publisher']."</div>
		   	  <div class='price'>RS-".$row['price']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
		</form>
		   	  </div>
			</div>";
		$i++;
}

mysqli_close($con);
?>

<footer>
<div style="text-align:center;">
<h3 style="color: #66ccff;font-weight:bold;"><u>CONTACT</u>  <u>INFO</u>:-</h3>
<p style="font-weight:bold;color: #99ddff;">PHONE NO:- 8008169286</p>
<p style="font-weight:bold;color: #99ddff;">ADDRESS:- CBIT, GANDIPET HYD</p>
<p style="font-weight:bold;color: #99ddff;">EMAIL ID:- SHAIKSAMEERSS111@GMAIL.COM</p>
</div>
</footer>
 </body>
</html>
