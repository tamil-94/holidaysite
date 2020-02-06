<?php
session_start();
$restid = $_SESSION["orest_id"];
error_reporting(E_ERROR | E_PARSE);

?>


<!doctype html>
<html lang="en">
<head>
        <title>Holidays</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">            
        <link rel="stylesheet" href="css1/style.css">
        <link rel="stylesheet" href="css1/orange.css">
		<link rel="stylesheet" href="css/hotdetailoveride.css">

       
   


</head>
<body>

<?php
echo <<< EOT



    
        <!--====== LOADER =====-->
        <div class="loader"></div>
   
       

        <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="menu-button">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                    
                 <h1 class="page-title">  <span><i class="fa fa-plane"></i> <a style="color:green" > Happy Holidays</a> </span> </h1>
                </div><!-- end navbar-header -->
                
                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="nav navbar-nav navbar-right navbar-search-link">
                        <li class="dropdown"><a href="Landing_page.php"  >Home</a>

                        </li>
                        <li class="dropdown"><a href="hotelbooking.php"  >Hotels</a>
			
                        </li>
                        <li class="dropdown"><a href="restaurant.php" class="active">Restaurants</a>
			
                        </li>
                        
				<li class="dropdown" style="text-decoration:underline"><a href="#" ><span><i class="fa fa-user"></i></span>Login</a>
                            		
                        </li>
				<li class="dropdown"style="text-decoration:underline"><a href="#"><span><i class="fa fa-lock"></i></span>SignUp</a>
                            		
                        </li>
                        
                        <li style="visibility:hidden"><a href="" ></a></li>

                    </div><!-- end columns -->


                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </nav><!-- end navbar -->
		
		<div id="section">

EOT;

?>
 
	<?php
  
	
$location = $restid;

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://tripadvisor1.p.rapidapi.com/restaurants/get-details?location_id=$location&lang=en_US&currency=USD",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: tripadvisor1.p.rapidapi.com",
		"x-rapidapi-key: c2a6b8bfbamshd70ae450c4204e5p11eac0jsn3c2cc541312c"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
if ($err) {
	echo "cURL Error #:" . $err;
} else {
	//echo $response;

	$final = json_decode($response,true);

		  $rest_name = $final['name'];
		  $res = isset($final['photo']['images']['medium']) ? $final['photo']['images']['medium'] : null;
					if ($res == null)
		{
			$res="https://www.reaganfoundation.org/umbraco/ucommerce/images/ui/image_not_found.jpg";
		}	
		$rest_image=$res['url'];
		$rest_des=isset($final['description'])?$final['description']:null;
		$rest_address=isset($final['address'])?$final['address']:null;
		$rest_website=isset($final['website'])?$final['website']:null;
		$rest_email=isset($final['email'])?$final['email']:null;
		$rest_phone=isset($final['phone'])?$final['phone']:null;
		$rest_price=isset($final['price'])?$final['price']:null;
		$rest_rating=isset($final['rating'])?$final['rating']:null;
		$rest_reasons=isset($final['owners_top_reasons']['top_reasons'])?$final['owners_top_reasons']['top_reasons']:null;
		$rest_menu=isset($final['menu_web_url'])?$final['menu_web_url']:null;
		$rest_dish=isset($final['dishes'])?$final['dishes']:null;
		$rest_spons=isset($final['owners_top_reasons']['sponsored_by'])?$final['owners_top_reasons']['sponsored_by']:null;
	echo <<< EOT
	
			
<div id="row1">
<div>
 <div id="xy"> <h2 align="center"> $rest_name </h2> </div>
</div>
 <div id="block1">
 <table>
 <tr style="display:table-header-group;">
 <td>
 <img src="$rest_image" alt="" width="300" height="300" style="margin_right:10px"> </img>
 </td>
 <td>
 <table>
 <tr style="display:table-header-group;">
 <td style="border-right:1px dotted grey;">
   <ul class="top" type="none">
   <li>
 <h3> Ratings </h3> 
EOT;

  
$whole= floor($rest_rating);

for ($i=1;$i<=$whole;$i++)
{
	echo <<< EOT
	
	<span class="fa fa-star half checked"></span>
EOT;

	
}
if(($rest_rating-$whole)!=0)
{
	echo <<< EOT
	
	<span class="fa fa-star-half-full checked"></span>
EOT;

	
}
if((5-$rest_rating)>1)
{
	for ($i=1;$i<=floor(5-$rest_rating);$i++)
	{
	echo <<< EOT
	
		<span class="fa fa-star"></span>
EOT;

		
	}
}
	echo <<< EOT
	</li><br>
	  <li><span class="fa fa-globe"> </span> $rest_website</li><br>
	  
	  <li><span class="fa fa-cutlery"> </span> $rest_menu</li><br>
	   <li><span class="fa fa-map-marker"> </span> $rest_address </li><br>
  <li><span class="fa fa-envelope"> </span>  $rest_email</li> <br>
    <li><span class="fa fa-phone"> </span>  $rest_phone </li> <br>
	</ul>
 
 </td>
 <td style="padding-left:10px;">
 <h3> Top Dishes <span class="fas fa-hamburger"> </span> <span class="	fas fa-pizza-slice">  </span> <span class="fa fa-coffee"> </span> </h3><br>
 
  <ul>
EOT;

  $count=0;
  foreach($rest_dish as $dish)
  {
	  if($count<5)
	  {
	  $name=$dish['name'];
	echo <<< EOT
	<li>$name</li>
EOT;
	  }
	  $count++;
  }
  if($count==0)
  {
	 	echo <<< EOT
	<li>Top Dishes Not available</li>
EOT;
 
  }
	echo <<< EOT
	
	
</ul>
 </td>
 </tr>
 
 </table>
 
 </td>
 </tr>
 <tr>
 <td>
 <br>
 <p><b>$rest_des</b></p>
 </td>
 </tr>


 </table>
 </div><!--block1-->
  <div id="block"> 
  <div id="row2">
  <br>
  <form>
  <ul class="top" type="none">
  <li> <span> Price :<h3>$rest_price</h3>  </span></li><br>
  <li> <span> <input type="text" name="startdate" value="02/05/2020" /> <input id="appt-time" type="time" name="appt-time" value="20:30"> </span></li> <br>

  <li> <span> Guests(s)<select size"25"> 
  <option value="1">1 </option> 
    <option value="2">2 </option> 
  <option value="3">3 </option> 
  <option value="4">4 </option> 
</select>
   Children<select size"25"> 
  <option value="1">1 </option> 
    <option value="2">2 </option> 
  <option value="3">3 </option> 
  <option value="4">4 </option> 
</select> </span>
  </li> <br> 
  <li><input type="submit" value="Reserve now"> 
 </li>
</ul>
</form>  
  </div> <!---row2-->
  </div><!--block2-->

<div><!---row1-->
 <div id="xz1"> <h3 align="center"> Top 3 Reasons to Eat Here-$rest_spons</h3> </div>
</div>
<div id="overview">

  <div id="block5"></div>
 <div id="block3">
 
EOT;


 

	echo <<< EOT

	<ul class="top" type="none">
EOT;


	foreach($rest_reasons as $reason)
	{
		$text=$reason['text'];
	echo <<< EOT
	<li> "$text" </li>
	<br>
	<li> </li>
EOT;

	}
	echo <<< EOT
	</ul>
			
 </div><!----block3--->
 
  

</div><!-----overview-->

			
	
	
</div><!---section closes-->			
					
EOT;

	  
}		
			
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
        <script src="custom-navigation.js"></script>
        <script src="custom-owl.js"></script>
				<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>
$(function() {
  $('input[name="startdate"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 2020,
    maxYear: parseInt(moment().format('YYYY'),10)
  }, function(start, end, label) {
    var years = moment().diff(start, 'years');
    //alert("You are " + years + " years old!");
  });
});
$(function() {
  $('input[name="enddate"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 2020,
    maxYear: parseInt(moment().format('YYYY'),10)
  }, function(start, end, label) {
    var years = moment().diff(start, 'years');
    //alert("You are " + years + " years old!");
  });
});
</script>
</body>
</html>
 