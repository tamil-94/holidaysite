<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
session_start();
  $usrname = $_SESSION['username1'];
session_destroy();
header('Location:layout.php');

echo $grade6;
?>
</body>
</html>