<script>
function login() {
 window.location.href = "loginandsignup.php";
}
function vendorsignup() {
 window.location.href = "vendorregister.php";
}
function usersignup() {
 window.location.href = "userregister.php";
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
	width:40%;
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
<button class="button" onclick="login()">login</button>
</div>
<div style="position:inherit;top:40%;">
<div class="wrapper">
<h2 style="text-align:center">FOR VENDOR..........</h2>
<p style="text-align:center">This is for vendors to signup to our website so that they can add or delete books to our website as per the availability in there shop.</p>
<button class="button" onclick="vendorsignup()">VENDOR SIGNUP</button>

</div>
<div class="wrapper">
<h2 style="text-align:center">FOR USER..........</h2>
<p style="text-align:center">This is for user to signup to our website so that they can browse through different catageries of books and can buy or sale books from/to our website.</p>
<button class="button" onclick="usersignup()">USER SIGNUP</button>
</div>
</div>
</body>
</html>
