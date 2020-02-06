<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css">
	    <link rel="stylesheet" type="text/css" href="stylex.css">
<style>

.error{color:red;}
</style>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['username1'])){
	$user=$_SESSION['username1'];
	
}
	
	

?>
<?php

$nameErr = $phoneErr = $cvvErr = $addErr = "";
$name = $cvv = $address = $phone ="";
$testboolean=true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["cardholdername"])) {
    $nameErr = "Name is required";
	$testboolean=false;
	
  } else {
    $name =$_POST["cardholdername"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		$testboolean=false;
      $nameErr = "Only letters and white space allowed"; 
    }
  }	
	
if (empty($_POST["cvv"])) {	
	$cvvErr = "valid CVV is required";
	$testboolean=false;
 } else {
    $cvv =$_POST["cvv"];
 }
 if (!preg_match("/^[0-9]{3,4}$/",$cvv)) {
	 $testboolean=false;
      $cvvErr = "valid CVV is required"; 
    }
	
if (empty($_POST["address"])) {
    $addErr = "address required";
	$testboolean=false;
  } else {
    $address=$_POST["address"];
       }
	   
	if (empty($_POST["cardnumber"])) {
    $cardErr = "address required";
	$testboolean=false;
  } else {
    $cnumber=$_POST["cardnumber"];
       }
	
if (empty($_POST["phone"])) {
    $phoneErr = "Phone Number is required";
	$testboolean=false;
  } else {
    $phone =$_POST["phone"];
	//header('Location:success.php');
	
  }
	// check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]{10}$/",$phone)) {
      $phoneErr = "Only Numbers allowed"; 
	  $testboolean=false;
    }	

	if($testboolean)
	{
		header('Location:success.php');
	}
 
	
	
}


?>

    <div class="container-fluid">
        <div class="heading" align="center">
                <h3>Hello <?php echo $user; ?> , Please enter your Credit Card Information</h3>
				</div>
        <div class="creditCardForm">
            
            <div class="payment">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				
                    <div class="form-group owner">
                        <label for="owner">Name on the card</label>
                        <input type="text" class="form-control" id="owner" name="cardholdername" >	
						 <span class="error">* <?php echo $nameErr;?></span>
                    </div>
					
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="password" class="form-control" id="cvv" name="cvv" >
						<span class="error">* <?php echo $cvvErr;?></span>
						
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardnumber" >
						<span class="error">* <?php echo $cardErr;?></span>
                    </div>
					
					<div class="form-group" id="card-number-field">
                        <label for="cardNumber">Billing Address</label>
                        <input type="text" class="form-control" id="cardNumber" name="address" >
						<span class="error">* <?php echo $addErr;?></span>
                    </div>
					
					<div class="form-group" id="card-number-field">
                        <label for="cardNumber">Phone Number</label>
                        <input type="text" class="form-control" id="cardNumber" name="phone" >
						<span class="error" style="color:red">* <?php echo $phoneErr;?></span>
                    </div>
					
                    <div class="form-group" id="expiration-date">
                        <label>Expiration Date</label>
                        <select>
                            <option value="01" name="exp_month">January</option>
                            <option value="02" name="exp_month">February </option>
                            <option value="03" name="exp_month">March</option>
                            <option value="04" name="exp_month">April</option>
                            <option value="05" name="exp_month">May</option>
                            <option value="06" name="exp_month">June</option>
                            <option value="07" name="exp_month">July</option>
                            <option value="08" name="exp_month">August</option>
                            <option value="09" name="exp_month">September</option>
                            <option value="10" name="exp_month">October</option>
                            <option value="11" name="exp_month">November</option>
                            <option value="12" name="exp_month">December</option>
                        </select>
                        <select>
                            
                            <option value="18" name="exp_year"> 2018</option>
                            <option value="19" name="exp_year"> 2019</option>
                            <option value="20" name="exp_year"> 2020</option>
                            <option value="21" name="exp_year"> 2021</option>
							<option value="22" name="exp_year"> 2022</option>
							<option value="23" name="exp_year"> 2023</option>
                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="images/visa.jpg" id="visa" >
                        <img src="images/mastercard.jpg" id="mastercard" >
                        <img src="images/amex.jpg" id="amex">
						<img src="images/discover.JPG" id="discover">
						<img src="images/dn.JPG" id="dinersclub">
					</div>
					</div>
                    <div class="form-group" id="pay-now" align="center">
                        <button type="submit" class="button" id="confirm-purchase">Confirm Purchase</button>
                    </div>
                
    
        
    </div>
	<div id="mini">
	
	</div>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
</body>

</html>
