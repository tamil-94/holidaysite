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
$username2=$_POST["recovery_uname"];
$security_q1=$_POST["security"];
$answer1=$_POST["recovery_answer"];




include("config.php");
mysql_select_db('tpalanivel1');
$sql="SELECT * FROM userproj3 WHERE username1='$username2'";
$result=mysql_query($sql, $conn);



if(mysql_num_rows($result)>0)
{
	
	while($row=mysql_fetch_assoc($result))
	{
		$security_q=$row["security_q"];
		$answer=$row["answer"];
		
	}
}

if($security_q === $security_q1)
{
	if($answer === $answer1)
{
	
header('Location:resetpassword.php');
}	

}
else
{
	header('Location:forgot_password.php');
}
}

?>
<section id="form"><!--form-->
		<h3 align="center">Please Enter following details to Proceed </h3>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form">


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

 <input type="text" name="recovery_uname" placeholder="Enter your username"><br/><br/>
<select name="security" id="security">
							<option value="" selected disabled hidden>Please Select a Security Question.</option>
							<option value="What is your Favourite Car?" name="security_q1">What is your Favourite Car?</option>
							<option value="What is your Favourite Holiday Destination?" name="security_q2">What is your Favourite Holiday Destination?</option>
							<option value="What is your Mother's Maiden Name?" name="security_q3">What is your Mother's Maiden Name?</option>
							
							</select>
							<br/><br/>
<input type="text" name="recovery_answer" placeholder="Answer"><br/><br/>
<button type="submit" name="submit" class="btn btn-default">Submit</button>

</form>							
</div>
</div>
</div>
</div>
</section>

</body>
</html>