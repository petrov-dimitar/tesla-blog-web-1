<!doctype html>

<html>

<?php
$logged;
$account;
session_start();

if(!isset($_SESSION["name"])){
	$logged = "Sign Up";
$account = "Sign_In";

 }
 else{$logged = "Account";
$account = "Logout";}
 ?>

<head>
<title>
TeslaBlog
</title>
<link rel = "stylesheet" type = "text/css" href = "Css/ContactUs.css">
</head>

<body>
<nav id = "navbar">
<div class = "subbar" >
	<img class= "logo" src = "Images/TeslaLogo2.jpg"
		alt= "TeslaBlog.com" 
		title = "TeslaBlog.com">
	<ul>
		<li> <span id= "blog">Blog.com</span> </li>
		<li><a href="index.php">Home</a> </li>
		<li><a href="News.php">News</a></li>
		<li><a href="Models.php">Models</a></li>
		<li><a href="Contact.php">Contact Us</a></li>
		<li><a href="Sign_Up.php"><?php echo $logged ?></a></li>
		<li><a href="Sign_In.php"><?php echo $account ?></a></li>
	</ul>
	</div>
</nav>

<div class= "Wholeblock" >
<div class = "firstblock">
<div class = "block">
<h1 class = "title">Contact Us</h1>
<iframe
  width="400"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyACB3RZOy3EmaAXGCrVfunw7W2iKI1pyPI&q=Space+Needle,Seattle+WA" allowfullscreen>
</iframe>
</div>


<footer>

	<div class= "socialmedia">
		<div class = "fa fa-facebook"></div>
		<div class = "fa fa-twitter"></div>
		<div class = "fa fa-google-plus"></div>
		<div class = "fa fa-linkedin"></div>
	</div>
	<div class = "bottomtext" >
	<p> TeslaBlog.com ©    Copyright 2018. All rights reserved. </p>
	</div>
</footer>
</div>
</div>
</body>

</html>