<!doctype html>

<html>
<head>
<?php include "isset.php"?>

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
		<li><a href="Sign_Up.php"><?php echo $logged?></a></li>
		<li><a href="Sign_In.php"><?php echo $account?></a></li>
	</ul>
	</div>
</nav>

<div class = "wholeblock">
<div class = "block">
<h1 > Tesla Supercharging explained </h1>

<span class = "firstpicture" >
<img src="Images/supercharging.jpg"
width = "700"
height = "400"/>
</span>


<p> The Tesla Supercharger network is a system of 480-volt DC fast-charging stations built by American vehicle manufacturer Tesla Inc. to allow  
longer journeys for their all-electric manufactured vehicles (Model S, 3 and X), through quick charging of the vehicle's battery packs.
</br></br>

Tesla began building the network in 2012. As of December 2017, there were 1,045 stations globally, with 7,496 chargers. The Supercharger
 is a proprietary direct current (DC) technology that provides up to 120 kW of power per car (depending on circumstances), giving the 90 
 kWh Model S an additional 170 miles (270 km) of range in about 30 minutes charge and a full charge in around 75 minutes. A software update 
 provided in 2015 to all Tesla cars uses demand information from each Supercharger station to plan the fastest route, if charging will be necessary 
 to reach the destination.
 </br></br>
Tesla has taken several measures to discourage drivers from using Superchargers for longer than necessary. In December 2016, Tesla started fining
 owners who remain plugged into a Supercharger after the car is fully charged. A year later, Tesla banned commercial, ride-sharing, taxicab, or 
 government vehicles from using Superchargers. Additionally, owners of vehicles purchased after January 15, 2017, were given an annual limit of 
 400 kWh (about 1,000 miles or 1,600 km) of free charging "credit" before they have to pay for charging.
</br>
As of April 2017, Tesla plans to expand from approximately 9,000 destination charging stations to 15,000 during 2017, in advance of the Model 3
 rollout which they expect to put significant additional demand for use of the facilities.
</p>

<span class = "midpicture" >
<img src="Images/teslacharging.jpg"
width = "700"
height = "400"/>
</span>



<p></br>
<b>Supercharging Technology</b>
</br></br>
Tesla supercharging stations charge with up to 145 kW of power distributed between two cars with a maximum of 120 kW per car.
 They take about 20 minutes to charge to 50%, 40 minutes to charge to 80%, and 75 minutes to 100% on the original 85 kwh Model S. 
 The charging stations provide high-power direct-current (DC) charging power directly to the battery, bypassing the internal charging power supply. 
 The next version of Supercharging is expected to charge with more than 350 kW.

A few of the Tesla supercharging stations use solar panels to offset energy use and provide shade.In the next few years after 2016, Tesla plans
 to install additional solar power generation at superchargers. For Model S and X vehicles ordered through January 2017, the cost for using the 
 superchargers for the life of the car is covered with the purchase of the car. As of January 2017, the network is exclusive to Model S and Model X.
 Supercharging hardware is standard on Model S vehicles equipped with a battery of 70 kWh or greater, and optional
 (with a one-time payment of US$2,000) on Model S vehicles equipped with a 60 kWh battery. The Roadster is not equipped
 to charge from the Superchargers, but all future Tesla cars will include the ability. In May 2017, Tesla announced
 that existing Tesla owners can give free Supercharging to up to five friends if they use their referral code, and all existing Tesla
 owners who purchase a new Model S or Model X will receive free Supercharging on those cars.
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