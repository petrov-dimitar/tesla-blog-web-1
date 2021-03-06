<!doctype html>

<html>
<head>
<?php include "isset.php" ?>
<title>TeslaBlog</title>
<link rel = "stylesheet" type = "text/css" href = "Css/Articles.css">
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
		<li><a href="Sign_In.php"> <?php echo $account ?></a></li>
	</ul>
	</div>
</nav>

<div class = "wholeblock">
<div class = "block">
<h1 > Tesla Roadster : The Concept </h1>

<span class = "firstpicture" >
<img src="Images/TeslaRoadster.jpg"
width = "700"
height = "400"/>
</span>


<p> Tesla is making a new version of the Roadster sports car, Elon Musk announced Thursday night, and it looks spectacular.
</br></br>Musk promises insane specs from this new sports car. Zero to 60 mph in 1.9 seconds, quicker than the average Formula 1 car. 
A quarter mile in 8.9 seconds, in a world where “10-second cars” are coveted. Top speed somewhere north of 250 mph, putting it in 
the realm of the fastest production cars on the planet, like the Bugatti Chiron and Koenigsegg Agera. And to go with it, four seats 
(if you’re traveling with two small people), decent cargo room, and 620 miles of range, thanks to a 200-kilowatt hour battery pack, 
about double what you get in the most capable Model S. Also, it's a convertible.
</br> </br>
No surprise the base price will be $200,000, and reserving your spot on the list will cost you $50,000.
 Considering that Bugatti is a seven-figure car, it's a pretty good deal.
</p>

<span class = "midpicture" >
<img src="Images/Tesla roadster the concept.jpg"
width = "700"
height = "400"/>
</span>



<p>The Tesla CEO has long said he doesn’t want to make the best electric cars around, but the best cars, period. 
</br>Introducing this new wonderbeast, he took on a bolder tone. “The point of this is to give the hardcore smackdown to gasoline cars.
” He also said it’ll make driving a gas car feel like piloting a steam engine with a side of quiche. When you make cars this outrageous, 
you get to make up your own metaphors, apparently.
</br></br>
The original Roadster was Tesla’s first car, the proof of concept it built from 2008 to 2012. It was the young automaker’s way of showing
 that electric cars could be cool, not just overgrown golf carts. People had long asked Musk when he would revive the model to go with his 
 sedans and SUVs, he says. Now he’s making it happen—come 2020.
</br></br>
A customary word of caution: Tesla has a history of over-promising and delivering late, if ever. Musk is struggling just to produce enough
 (now quaint-seeming) Model 3 sedans, the car that should appeal to the masses and make Tesla more than a niche automaker—and finally make
 it profitable. A sports car won’t fix its problems—but it might make one hell of a getaway car.
 <hr>
</p>
<p class = "specs">Base Specs:
<hr>
Acceleration 0-60 mph:     
1.9 sec
<hr>
Acceleration 0-100 mph:
4.2 sec
<hr>
Acceleration 1/4 mile:
8.8 sec
<hr>
Top Speed:
Over 250 mph
<hr>
Wheel Torque:
10,000 Nm
<hr>
Mile Range:
620 miles
<hr>
Seating:
4
<hr>
Drive: 
All-Wheel Drive
<hr>
Base Price:
$200,000
<hr>
Base Reservation:
$50,000

</p>


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

</body>
</html>