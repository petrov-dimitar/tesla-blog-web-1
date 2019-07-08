<html>
<head>
<body>
<?php

if(isset ($_SESSION['prize']))
{
	echo "<p> your prize is a: " . $_SESSION["prize"] .  "!</p>";
}
else{
	echo "<p> You didn't win anything </p>";
	
}

?>
</body>
</html>