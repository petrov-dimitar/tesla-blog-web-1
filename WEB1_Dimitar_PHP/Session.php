
<html>
<head>
<body>

<?php 
$secret_code = $_POST['code'];

session_start();

if ($secret_code == "moonlightstars")
{
	session_start();
	$SESSION["prize"] = "Mountain Bike";
	echo "<p> Yeah! you won the prize! It's a mountain bike</p> ";
}
else{
	echo "<p>"Sorry, the code was wrong."";
}

?>

</body>
</head>
</html>