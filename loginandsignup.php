<script>
function signup() {
 window.location.href = "signup.php";
}
function adminlogin() {
 window.location.href = "adminlogin.php";
}
function vendorlogin() {
 window.location.href = "vendorlogin.php";
}
function userlogin() {
 window.location.href = "userlogin.php";
}

</script>
<html>
<head>
<style>
.div{
 text-align:center
width:800px;
margin:0 auto;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px 25px;
  text-align: center;
  text-decoration: none;
  display: block;
  font-size: 16px;
margin-left:auto;
margin-right:auto;
display:block;
margin-top:15%;
margin-bottom:0%;
  cursor: pointer;
 border-radius: 12px;
}


.center {
  margin: 0;
  position:fixed;
  top: 20%;
  left: 90%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.wrapper{
	width:30%;
	float:left;
	padding:10px;
	align-items:center;
	justify-content:center;

	}

</style>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body style="background:url(../onlinebookstoreminiproject-2/asoggetti-cfKC0UOZHJo-unsplash.jpg);min-height:380px;background-position:center;background-repeat:no-repeat;background-size:cover;position:relative;">
<!-- Navigation -->
<div class="topnav">
<img src="IMG_1584976001886.jpg" width=50px height=47px style="float:left;">
<a  class="active" href="mainpage.php">HOME</a>
</div>

 <div class="center">
<button class="button" onclick="signup()">SIGN UP</button>
</div>
<div style="position:inherit;top:40%;">
  <div class="wrapper">
  <h2 style="text-align:center">FOR ADMIN..........</h2>
  <p style="text-align:center">This is for administrator to login, to add or delete books to website as per the availability and to perform other administrative tasks.</p>
  <button class="button" onclick="adminlogin()">ADMIN LOGIN</button>


  </div>
<div class="wrapper">
<h2 style="text-align:center">FOR VENDOR..........</h2>
<p style="text-align:center">This is for vendors to login, to add or delete books to our website as per the availability in there shop.</p>
<button class="button" onclick="vendorlogin()">VENDOR LOGIN</button>

</div>
<div class="wrapper">
<h2 style="text-align:center">FOR USER..........</h2>
<p style="text-align:center">This is for user to login, to browse through different catageries of books and to buy or sale books from/to our website.</p>
<button class="button" onclick="userlogin()">USER LOGIN</button>
</div>
</div>
</body>
</html>
