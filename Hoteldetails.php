<?php
session_start();
$restid = $_SESSION["rest_id"];


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
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/orange.css">
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
                        <li class="dropdown"><a href="Landing_page.php">Home</a>

                        </li>
                        <li class="dropdown"><a href="#" class="active" >Hotels</a>
			
                        </li>
                        <li class="dropdown"><a href="restaurant.php">Restaurants</a>
			
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
	CURLOPT_URL => "https://tripadvisor1.p.rapidapi.com/hotels/get-details?adults=1&nights=2&location_id=$location",
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

	$result = json_decode($response,true);
      $resultdata = $result['data'];
	  foreach($resultdata as $final){
		  $hotel_name = $final['name'];
		  $res = isset($final['photo']['images']['medium']) ? $final['photo']['images']['medium'] : null;
					if ($res == null)
		{
			$res="https://www.reaganfoundation.org/umbraco/ucommerce/images/ui/image_not_found.jpg";
		}	
		$hotel_image=$res['url'];
		$hotel_des=$final['description'];
		$hotel_address=$final['address'];
		$hotel_website=$final['website'];
		$hotel_phone=$final['phone'];
		$hotel_price=$final['price'];
		$hotel_rating=$final['rating'];
		$hotel_amenities=$final['amenities'];
		$hotel_reviews=$final['room_tips'];
	echo <<< EOT
	
			
<div id="row1">
<div>
 <div id="xy"> <h4 align="center"> $hotel_name </h4> </div>
</div>
 <div id="block1">
 <table>
 <tr style="display:table-header-group;">
 <td>
 <img src="$hotel_image" alt="" width="300" height="300" style="margin_right:10px"> </img>
 </td>
 <td>
 <table>
 <tr style="display:table-header-group;">
 <td style="border-right:1px dotted grey;">
   <ul class="top" type="none">
   <li>
 <h3> Ratings </h3> 
EOT;
  
$whole= floor($hotel_rating);

for ($i=1;$i<=$whole;$i++)
{
	echo <<< EOT
	
	<span class="fa fa-star half checked"></span>
EOT;
	
}
if(($hotel_rating-$whole)!=0)
{
	echo <<< EOT
	
	<span class="fa fa-star-half-full checked"></span>
EOT;
	
}
if((5-$hotel_rating)>1)
{
	for ($i=1;$i<=floor(5-$hotel_rating);$i++)
	{
	echo <<< EOT
	
		<span class="fa fa-star"></span>
EOT;
		
	}
}
	echo <<< EOT
	</li><br>
	  <li><span class="fa fa-globe"> </span> $hotel_website</li><br>
	   <li><span class="fa fa-map-marker"> </span> $hotel_address </li><br>
    <li><span class="fa fa-phone"> </span>  $hotel_phone </li> <br>
	</ul>
 
 </td>
 <td style="padding-left:10px;">
 <h3> Ameneties <span class="fa fa-wifi"> </span> <span class="fa fa-car">  </span> <span class="fa fa-coffee"> </span> </h3><br>
 
  <ul>
EOT;
  $count=0;
  foreach($hotel_amenities as $amenitie)
  {
	  if($count<10)
	  {
	  $name=$amenitie['name'];
	echo <<< EOT
	<li>$name</li>
EOT;
	  }
	  $count++;
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
 <p><b>$hotel_des</b></p>
 </td>
 </tr>


 </table>
 </div>
 <br>
  <div id="block"> 
  <div id="row2">
  <form>
  <ul class="top" type="none">
  <li> <span> <h3>Price : $hotel_price</h3>  </span></li><br>
  <li>  Room(s)<select size"25"> 
  <option value="1">1 </option> 
    <option value="2">2 </option> 
  <option value="3">3 </option> 
  <option value="4">4 </option> 
</select>
  </li> <br> 
  <li> <span> Adult(s)<select size"25"> 
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
  <li><input type="submit" value="Book now" class="btn btn-orange btn-lg"> 
 </li>
</ul>
</form>  
  </div> </div>

</div>
<div>
 <div id="xz1"> <h3 align="center"> Top TripAdvisor Reviews </h3> </div>
</div>
<div id="overview">

  <div id="block5"></div>
 <div id="block3">
 
EOT;
 

	echo <<< EOT

	<ul class="top" type="none">
EOT;
	foreach($hotel_reviews as $review)
	{
		$text=$review['text'];
	echo <<< EOT
	<li> " $text" </li>
	<br>
	<li> </li>
EOT;
	}
	echo <<< EOT
	
			
 </div>
 
  

</div>
<div id="row5">
EOT;

			
			


			
echo <<< EOT
 
			
EOT;
			

echo <<< EOT
			
	 
			</div>
			
	
	
</div>			
					
EOT;
	  }
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
