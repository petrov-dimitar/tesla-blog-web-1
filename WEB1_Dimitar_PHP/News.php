<!doctype html>
<?php include('articles.php');
include 'registerprocess.php';

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
<html>

<head>
<title>
Tesla News
</title>
<link rel = "stylesheet" type = "text/css" href = "Css/News.css">
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
		<li><a href="Sign_Up.php"><?php echo $logged?></a></li>
		<li><a href="Sign_In.php"><?php echo $account?></a></li>
	</ul>
	</div>
</nav>

<div class= "Wholeblock">

<div class = "firstblock">

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>


<div class = "mySlides">
	<a href="ArticleTeslaRoadsterTheConcept.php"><img src="Images/TeslaRoadster.jpg" width = 1100 height=550></a>
	<h3> <a href="ArticleTeslaRoadsterTheConcept.php"><?php echo $title ;?> </a></h3>
</div>
	
<div class = "mySlides">
<a href="ArticleSupercharging.php"><img  src="Images/TeslaCharger.jpg" width = 1100 height=550></a>
<h3> <a href="ArticleSupercharging.php"> Tesla cars now recharges for seconds </a></h3>
</div>

<div class = "mySlides">
<a href="ArticleModel3.php"><img src="Images/model3.jpg" width = 1100 height=550></a>
<h3> <a href="ArticleModel3.php"> <?php echo $title6 ?> </a></h3>
</div>

<div class = "mySlides">
<a href="ArticleCaroftheYear.php"><img  src="Images/ModelSphoto3.jpg" width = 1100 height=550></a>
<!--<div class = "Dot"><a >O</a></div> -->
<h3> <a href="ArticleCaroftheYear.php"><?php echo $title5 ;?> </a></h3>
</div>

</div>

<button class="btnleft" onclick="plusDivs(-1)">&#10094;</button>
<button class="btnright" onclick="plusDivs(+1)">&#10095;</button>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    x[slideIndex-1].style.display = "block"; 
}
</script>

<div class="grid22">
	<div class ="article">
	
	<h2 class = "heading2"> <a href="ArticleTeslaRoadsterTheConcept.php"> <?php echo $title ?> </a></h2>
	<p class = "paragraph"><a href="ArticleTeslaRoadsterTheConcept.php"><?php echo $text ?>
		</a>
		</p>
		<h1 class="imgtitle"> <a href="ArticleTeslaRoadsterTheConcept.php"> Tesla Roadster: The Concept </a></h1>
		<a href="ArticleTeslaRoadsterTheConcept.php"><img src = "Images/TeslaRoadster.jpg"
			alt= "TeslaBlog.com" 
			title = "TeslaBlog.com"
			width = "469"
		height = "300"/></a>
		
	</div>


	<div class ="article">
	<h2 class = "heading2"> <a href="ArticleModelS.php"><?php echo $title2 ?> </a></h2>
	<p class = "paragraph"> <a href="ArticleModelS.php"><?php echo $text2 ?>
	</a>
		</p>
		<h1 class="imgtitle"><a href="ArticleModelS.php"> Model S : The Safest Car</a></h1>
		
		<a href="ArticleModelS.php">
		<img src = "Images/Teslanews5.jpg"
			alt= "TeslaBlog.com" 
			title = "TeslaBlog.com"
			width = "469"
			height = "300"/>
		<a>

	</div>

	<div class = "article">
	<h2 class = "heading2"><a href="ArticleInSpace.php"><?php echo $title3 ?></a></h2>
	<p class = "paragraph"> <a href="ArticleInSpace.php"><?php echo $text3 ?>
	</a>
		</p>
		<h1 class="imgtitle"> <a href="ArticleInSpace.php">Tesla Roadster In Space<a></h1>
		<a href="ArticleInSpace.php"><img src = "Images/teslainspace(mid).jpg"
			alt= "TeslaBlog.com" 
			title = "TeslaBlog.com"
			width = "469"
			height = "300"/> 
			</a>
	</div>
	
	<div class ="article">
	<h2 class = "heading2"><a href="ArticleTeslaTruck.php"><?php echo $title4 ?></a></h2>
	<p class = "paragraph"> <a href="ArticleTeslaTruck.php"><?php echo $text4 ?>
	</a>
		</p>
		<h1 class="imgtitle"> <a href="ArticleTeslaTruck.php">Tesla Truck: The Future Is Here</a> </h1>
		<a href="ArticleTeslaTruck.php"><img src = "Images/TeslaTruck.jpg"
			alt= "TeslaBlog.com" 
			title = "TeslaBlog.com"
			width = "469"
			height = "300"/>
		</a>


	</div>

	<div class = "article">
	<h2 class = "heading2"> <a href="ArticleCaroftheYear.php"><?php echo $title5 ?></a></h2>
	<p class = "paragraph"> <a href="ArticleCaroftheYear.php"><?php echo $text5 ?>
	</a>
		</p>
		<h1 class="imgtitle"> <a href="ArticleCaroftheYear.php">Model S: Car Of The Year </a></h1>
		<a href="ArticleCaroftheYear.php"><img src = "Images/Car.jpg"
			alt= "TeslaBlog.com" 
			title = "TeslaBlog.com"
			width = "469"
			height = "300"/></a>
	</div>

	<div class= "article">
	<h2 class = "heading2"><a href="ArticleModel3.php"><?php echo $title6 ?></a></h2>
	<p class = "paragraph"><a href="ArticleModel3.php">
	<?php echo $text6 ?>
	</a>
		</p>
		<h1 class="imgtitle"> <a href="ArticleModel3.php">Model 3: Tesla's New Baby </h1>
		<a href="ArticleModel3.php"><img src = "Images/Tesla3.jpg"
		width = "469"
		height = "300"/></a>
	</div>
	
	
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
