<html>
<head>
<title> connecting </title>


</head>
<body>

<?php

if((isset($_POST["rest_id"]))&(!empty($_POST["rest_id"])))
{
$rest=$_POST["rest_id"];
echo "hotel id is " . $rest;
session_start();
$_SESSION['rest_id']	= $rest;
//echo $rest;	
header('Location: hoteldetails.php');
}
else
{
	header('Location: hotelbooking.php');
}


?>


</body>
</html>	