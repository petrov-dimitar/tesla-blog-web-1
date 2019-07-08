<html>
<head>
<body>

<table>
<?php 
$conn = new PDO('mysql:host=studmysql01.fhict.local;dbname=dbi392329', 'dbi392329', 'password');
foreach($conn->query("SELECT * FROM `usersregistered`") as $row)
{
    echo "<tr><td>" . $row["Username"] . 
    "</td><td>". $row["Password"]
     ."</td></tr>";
}
?>
</table>

<?php include('test2.php'); ?>
<?php echo "" . $var; ?>

</body>
</html>