<!DOCTYPEhtml>
<html>
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
          
   
</head><!--/head-->

<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$new_pwd1=$_POST["new_pwd1"];
	$new_pwd2=$_POST["new_pwd2"];
	$un=$_POST["un"];
	print("$un");
	print("$new_pwd1");
	print("$new_pwd2");
	
	include("config.php");
	 mysql_select_db('tpalanivel1');
	$sql="SELECT * FROM userproj3 WHERE username1='$un'";
	$res=mysql_query($sql, $conn);

	 if(mysql_num_rows($res)>0)
  {
	
	while($row=mysql_fetch_assoc($res))
	{
		$uname1=$row["username1"];
		
	}
	
  }
  
  
  if($uname1===$un)
  {
  


	
	if($new_pwd1 === $new_pwd2)
	{
		echo "ok";
		
		include("config.php");
    mysql_select_db('tpalanivel1');
$sql="UPDATE userproj3 SET pwd1='$new_pwd1' WHERE username1='$uname1'";
$result=mysql_query($sql, $conn);


  }}
	
	$sql="SELECT * FROM userproj3 WHERE pwd1='$new_pwd1'";
	$res=mysql_query($sql, $conn);

	 if(mysql_num_rows($res)>0)
  {
	
	while($row=mysql_fetch_assoc($res))
	{
		$pwd2=$row["pwd1"];
		
	}
	
}
if($pwd2 === $new_pwd1)
{
	header('Location:success.html');
}

	
else
	{
		header('Location:resetpassword.php');
	}
	
}

?>

<section id="form"><!--form-->
		<h3 align="center">Enter your new password </h3>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form">


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
 <input type="text" name="un" placeholder="Enter your username"><br/><br/>

 <input type="text" name="new_pwd1" placeholder="Enter new password"><br/><br/>

							<br/><br/>
<input type="text" name="new_pwd2" placeholder="Re-type new password"><br/><br/>
<button type="submit" name="submit" class="btn btn-default">Submit</button>

</form>							
</div>
</div>
</div>
</div>


</body>
</html>
