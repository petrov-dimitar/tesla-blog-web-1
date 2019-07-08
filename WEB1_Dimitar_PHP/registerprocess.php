<?php

$con = mysqli_connect("studmysql01.fhict.local","dbi392329","password","dbi392329");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $user;
  $pass;
  $email;
  $firstName;
  $lastName;
  $country;
  $education;
  $job;
  
if (isset ($_POST["username"]) && isset($_POST["password"])&& $_POST["username"] != ""  && $_POST["password"] != "" )  {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$country = $_POST['country'];
	$education = $_POST['education'];
	$city = $_POST['city'];
	$job = $_POST['job'];
	
	$SQL= "INSERT INTO Usersregistered (Username, Password, FirstName, LastName, Email, Country, Education, City, Job)
	VALUES ('$user','$pass', '$firstName', '$lastName', '$email', '$country', '$education', '$city', '$job')";
	
	$query = mysqli_query($con, $SQL);
	
	require 'process.php';
	
	
	if ($con->query($SQL) === TRUE) {
    echo "New record created successfully";
} else {
	
    echo "Error: " . $SQL . "<br>" . $con->error;
}



		
		header ("location: index.php");
		

}
