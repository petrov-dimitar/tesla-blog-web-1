<html>
<head>
<body>

<table>
<?php 
$conn = new PDO('mysql:host=studmysql01.fhict.local;dbname=dbi392329', 'dbi392329', 'password');
foreach($conn->query("SELECT * FROM `Article`") as $row)
{
    $title = $row["Title"] ;
	$text = $row["Text"] ;
	$title2 = $row["Title2"] ;
	$text2 = $row["Text2"] ;
	$title3 = $row["Title3"] ;
	$text3 = $row["Text3"] ;
	$title4 = $row["Title4"] ;
	$text4 = $row["Text4"] ;
	$title5 = $row["Title5"] ;
	$text5 = $row["Text5"] ;
	$title6 = $row["Title6"] ;
	$text6 = $row["Text6"] ;
    
}
?>
</table>

</body>
</html>