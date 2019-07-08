<!doctype html>

<html>
<?php
$logged;
$account;
session_start();

if(!isset($_SESSION["name"])){
	$logged = "Sign Up";
$account = "Sign_In";
header ("location: Sign_In.php");
 }
 else{$logged = "Account";
$account = "Logout";}
 ?>
<head>
<title>
TeslaBlog
</title>
<link rel = "stylesheet" type = "text/css" href = "Css/Models.css">
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

<div class ="Wholeblock" >

<div class ="firstblock">
	<img src = "Images/ModelSNature.jpg"
		alt= "TeslaBlog.com" 
		title = "TeslaBlog.com"
		width = "1493"
		height = "700"/>
		
		</div>
		<span class = "button1">
			<a href="Model_S.php" class="button">Model S</a>
		</span>
		
		<div class = "block2">
		<span class = "button2">
			<a href="Model_X.php" class="button">Model X</a>
		</span>
		<span class = "button3">
			<a href="Model_3.php" class="button">Model 3</a>
		</span>
		<br/>

<span class = "ImageModelX">
	<img  src = "Images/ModelX10.jpg"
			alt= "TeslaBlog.com" 
			title = "TeslaBlog.com"
			width = "745"
			height = "400"/>
</span>

	<img src = "Images/Model3Blue.jpg"
		alt= "TeslaBlog.com" 
		title = "TeslaBlog.com"
		width = "745"
		height = "400"/>
		</div>
		
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
</body>

</html>