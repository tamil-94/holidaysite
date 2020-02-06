<html>
<head>
<title> checking </title>


</head>
<body>

<?php

if((isset($_POST["orest_id"]))&(!empty($_POST["orest_id"])))
{
$rest=$_POST["orest_id"];
echo "restauarant id is " . $rest;
session_start();
$_SESSION['orest_id']	= $rest;
//echo $rest;	
header('Location: restaurantdetails.php');
}
else
{
	header('Location: restaurant.php');
}


?>


</body>
</html>	