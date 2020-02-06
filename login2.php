<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href="css/test/bootstrap.min.css" rel="stylesheet">
    <link href="css/test/font-awesome.min.css" rel="stylesheet">
    <link href="css/test/prettyPhoto.css" rel="stylesheet">
    <link href="css/test/price-range.css" rel="stylesheet">
    <link href="css/test/animate.css" rel="stylesheet">
	<link href="css/test/main.css" rel="stylesheet">
	<link href="css/test/responsive.css" rel="stylesheet">
          
   
</head><!--/head-->

<body>
<?php

$nameErr = $emailErr = "";
$name = $email = $pwd1 = $pwd2 = $username1 =$address= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  if (empty($_POST["new_name"])) {
    $nameErr = "Name is required";
  } else {
    $name =$_POST["new_name"];
	
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["new_email"])) {
	  
    $emailErr = "Email is required";
	
  } else {
  $email =$_POST["new_email"];
  	
	}
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
   
  }	
    
  if (empty($_POST["phone"])) {
    $phoneErr = "Phone Number is required";
  } else {
    $phone =$_POST["phone"];
  }
	// check if name only contains letters and whitespace
    if (!preg_match("/[^0-9]/",$phone)) {
      $phoneErr = "Only Numbers allowed"; 
    }
  
 
 if (empty($_POST["new_pwd"])) {
    $pwdErr = "password required";
  } else {
    $pwd1 =$_POST["new_pwd"];
       }
  
   if (empty($_POST["new_repwd"])) {
    $NpwdErr = "password required";
  } else {
    $pwd2=$_POST["new_repwd"];
    
    }
  
  if($pwd1!==$pwd2){
	  $pwdErr="Password doesn't match";
  }
  
  
  if (empty($_POST["new_username"])) {
    $usernameErr = "username required";
  } else {
    $username1=$_POST["new_username"];
       }
 if (empty($_POST["address"])) {
    $addErr = "address required";
  } else {
    $address=$_POST["address"];
       }

	   
$security_q1=$_POST["security"];



//echo "$security_q1";

/*
if (!empty($security_q1)) 
    $security_q =$security_q1;
else if (!empty($security_q2)) 
    $security_q =$security_q2;
else if (!empty($security_q3)) 
    $security_q =$security_q3;
*/	
	
$answer=$_POST["answer1"];


 include("config.php");
    mysqli_select_db('tpalanivel1');
$sql="SELECT * FROM userproj3 WHERE username='$username1'";
$result=mysqli_query($conn,$sql);


if(mysqli_num_rows($result)>0)
{
	
	while($row=mysqli_fetch_assoc($result))
	{
		$uname=$row["username"];
		
	}
}
if(empty($uname))
{
	echo "test5";	
	echo $name1;
	echo $pwd1;
	echo $email;
	echo $phone;
	echo $username1;
	echo $address;
	   mysql_select_db('travel');
	$sql = "INSERT INTO userdetail (name1,pwd1,email,phone,username1,address,security_q,answer)
				VALUES ('$name','$pwd1','$email','$phone','$username1','$address','$security_q1','$answer')";
				mysql_query($sql, $conn);
		echo "test6";		
		header('Location:view_cart.php');		
}				
else{
header('Location:login.php');	
}
}



?>	
	
	
	<section id="form"><!--form-->
		<h3 align="center">Please Login/Signup to Proceed </h3>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
					
					
						<h2>Login to your account</h2>
						<form action="login.php" method="post">
							<input type="text" placeholder="username" name="username" required />
							<input type="text" placeholder="password" name="password" required />
							
							<button type="submit" class="btn btn-default">Login</button> <span>  <a href="forgot_password.php" class="button"> Forgot Password? </a> </span>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
							<input type="text" placeholder="Name" name="new_name">
							<span class="error">* <?php echo $nameErr;?></span>
							
							<input type="text" placeholder="USER Name" name="new_username" >
							<span class="error">* <?php echo $usernameErr;?></span>
							
							<input type="email" placeholder="Email Address" name="new_email" >
							<span class="error">* <?php echo $emailErr;?></span>
							
							<input type="tel" placeholder="Telephone" name="phone"/ >
							<span class="error">* <?php echo $phoneErr;?></span>
							
							<input type="password" placeholder="Password" name="new_pwd">
							<span class="error">* <?php echo $pwdErr;?></span>
							
							<input type="password" placeholder="Re-type Password" name="new_repwd">
							
							<span class="error">* <?php echo $NpwdErr;?></span>
							
							<input type="text" placeholder="Address" name="address">
							<span class="error">* <?php echo $addErr;?></span>
							
							
							<select name="security" id="security" required>
							<option value="" selected disabled hidden>Please Select a Security Question.</option>
							<option value="What is your Favourite Car?" name="security_q1">What is your Favourite Car?</option>
							<option value="What is your Favourite Holiday Destination?" name="security_q2">What is your Favourite Holiday Destination?</option>
							<option value="What is your Mother's Maiden Name?" name="security_q3">What is your Mother's Maiden Name?</option>
							
							</select>
							<br/><br/>
							
							
							
							<input type="text" placeholder="Your Answer for Security Question" name="answer1" required>
							
							
							
							<button type="submit" name="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	

</body>
</html>