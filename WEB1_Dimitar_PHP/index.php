<!doctype html>

<?php 
include 'registerprocess.php';
session_start();

$logged;
$fronttext;
$account;
    
if (isset($_SESSION['name'])) {
$fronttext = 'Welcome, '.$_SESSION['name']; 
$logged = "Account";
$account = "Logout";}
 else { $fronttext = "TeslaBlog.com: Register now and win prizes!" ;
 $logged = "Sign Up";
 $account = "Sign In";}

?>


<html>
<head>
<title>TeslaBlog</title>
<link rel = "stylesheet" type = "text/css" href = "Css/Home.css">
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



<div class = "wholeblock">
	<div class= "firstblock">
		
	<img class="mySlides" src="Images/TeslaCover.jpg">
<img class="mySlides" src="Images/ModelSphoto4.jpg">
<img class="mySlides" src="Images/ModelSNature.jpg">
<img class="mySlides" src="Images/TeslaRoadster.jpg">


<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2500); // Change image every 2 seconds
}
</script>

	<h1> <a href="message.php"><?php echo $fronttext?></a></h1>
</div>


<div class="grid22">
	<div class ="article">
		
		<h1 class="imgtitle"><a href="ArticleTeslaRoadsterTheConcept.php">Tesla Roadster: The Concept</a></h1>
		<a href="ArticleTeslaRoadsterTheConcept.php">
		<img src = "Images/TeslaRoadster.jpg"
			alt= "Tesla Roadster: The Concept" 
			title = "TeslaBlog.com"
			width = "548"
		height = "300"/>
		</a>
	</div>


	<div class ="article">
		<h1 class="imgtitle"> <a href="ArticleTeslaTruck.php">Tesla Truck: The Future Is Here</a></h1>
		
		<a href="ArticleTeslaTruck.php">
		<img src = "Images/TeslaTruck.jpg"
			alt= "Tesla Truck will amaze you" 
			title = "TeslaBlog.com"
			width = "548"
			height = "300"/>
		</a>


	</div>

	<div class = "article">
		<h1 class="imgtitle"> <a href="ArticleInSpace.php">Model 3: Tesla's New Baby</a></h1>
		
		<a href="ArticleModel3.php">
		<img src = "Images/Tesla3.jpg"
			alt= "Tesla Roadster in space" 
			title = "TeslaBlog.com"
			width = "548"
			height = "300"/>
		</a>
	</div>

	<div class= "article">
		<h1 class="imgtitle"> <a href="ArticleCaroftheYear.php">Model S: Car Of The Year</a> </h1>
		
		<a href="ArticleCaroftheYear.php">
		<img src = "Images/ModelSNature.jpg"
		width = "548"
		height = "300"/>
		</a>
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