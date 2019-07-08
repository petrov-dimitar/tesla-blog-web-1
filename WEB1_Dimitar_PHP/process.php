<?php

$con = mysqli_connect("studmysql01.fhict.local","dbi392329","password","dbi392329");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $user;
  $pass;
if (isset ($_POST["username"]) && isset($_POST["password"])&& $_POST["username"] != ""  && $_POST["password"] != "" )  {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	$SQL= "Select * FROM usersregistered where username = '" .$user. "' and password ='" .$pass. "'";
	
	$query = mysqli_query($con, $SQL);
	if(mysqli_num_rows($query)>0){
		while($row=mysqli_fetch_array($query)){
		session_start();
		$_SESSION["name"] = $user;
		
		header ("location: index.php");
		}
		
	}
	else{
		$message = "Wrong inputs: Please, try again!";
		echo "<script type='text/javascript'>alert('$message');</script>";	
		
		header ("location: Sign_In.php");
		}
		
}



?>