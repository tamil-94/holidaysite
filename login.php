<!DOCTYPEhtml>
<html>
<body>

<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$username=$_POST['username'];
$pwd=$_POST["password"];

echo $username;

mysqli_select_db($conn,$dbname); 

$sql="SELECT * FROM userdetails WHERE username1='$username'";
$result=mysqli_query($conn,$sql);



if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$pwd1=$row["pwd1"];
		$uname=$row["username1"];
		
	}
}



if(empty($uname))
{
		
 header('Location:login2.php');	
}

else 
{
	if($pwd===$pwd1)
	{
		if ($username===$uname){
			session_start();
			$_SESSION['username1']=$username;
			echo "i am here";
			header('Location:holidays1test.php');
		}
		
			
		else
		{
			$_SESSION['username1']="invalid";
			header('Location:login2.php');
		}
	}
    else
	{
		$_SESSION['username1']="invalid";
		header('Location:login2.php');
		
	}
	
			
	
}
	
}
?>
</body>
</html>