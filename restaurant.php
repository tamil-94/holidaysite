


<!doctype html>
<html lang="en">
    <head>
        <title>Holidays</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">            
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/orange.css">
        <link rel="stylesheet" href="css/test.css">  
        <link rel="stylesheet" href="css/responsive.css">  
		           <link rel="stylesheet" href="css/hoteloveride.css">
		<?php


		session_start();   
        if(isset($_SESSION["destid"]))
		{  
		
			$search1=$_SESSION['destid'];
			//echo $search1;
		}
		else{
			header('Location: Landing_page.php');
		}
	?>

   


</head>
<body>
        <!--====== LOADER =====-->
        <div class="loader"></div>
<?php
	if(isset($_POST["filter"])){
		if(!empty($_POST["check_list"])){
			$selected1="";
			
			//echo count($_POST["check_list"]);
			$max=count($_POST["check_list"]);
			//echo "test";
			$count=1;
			foreach($_POST["check_list"] as $selected){
				
				if ($count<$max)
				{
				$selected1 .= $selected."%252C";
				}
				if ($count==$max)

					{
						$selected1 .= $selected;
				}					
				$count++;
			}
			//echo $selected1;
			$url = "https://tripadvisor1.p.rapidapi.com/restaurants/list?dietary_restrictions=$selected1&location_id=$search1";
			//echo $url;
		}
		else{
		$url = "https://tripadvisor1.p.rapidapi.com/restaurants/list?&location_id=$search1";
	}
		
	}
	else{
		$url = "https://tripadvisor1.p.rapidapi.com/restaurants/list?&location_id=$search1";
	}
	
       

?>
 
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
                        <li class="dropdown"><a href="hotelbooking.php">Hotels</a>
			
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


	
	
	                                            		
 <section class="innerpage-wrapper">
        	<div id="hotel-listing" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">        	
                        
                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">
                                        
                            <div class="side-bar-block filter-block">
                                <h3>Sort By Facilities</h3>
                                
                                <div class="panels-group">
                                    <form method='post' action='#'>
                                   
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">					
                                            <a href="#panel-2" data-toggle="collapse" >Facilities<span><i class="fa fa-angle-down"></i></span></a>
                                        </div><!-- end panel-heading -->
                                        
                                        <div id="panel-2" class="panel-collapse collapse">
                                            <div class="panel-body text-left">
                                                <ul class="list-unstyled">
                                                  
                                                    <li class="custom-check"><input type="checkbox" id="check09" name="check_list[]" value="Vegetarian%20Friendly"/>
                                                    <label for="check09"><span><i class="fa fa-check"></i></span>Vegetarian Friendly</label></li>
                                                    <li class="custom-check"><input type="checkbox" id="check10" name="check_list[]" value="Gluten%20Free%20Options"/>
                                                    <label for="check10"><span><i class="fa fa-check"></i></span>Gluten Free Options</label></li>
                                                    <li class="custom-check"><input type="checkbox" id="check11" name="check_list[]" value="Italian"/>
                                                    <label for="check11"><span><i class="fa fa-check"></i></span>Italian</label></li>
                                                    <li class="custom-check"><input type="checkbox" id="check12" name="check_list[]" value="Asian"/>
                                                    <label for="check12"><span><i class="fa fa-check"></i></span>Asian</label></li>
                                                    <li class="custom-check"><input type="checkbox" id="check13" name="check_list[]" value="Vegan%20Options"/>
                                                    <label for="check13"><span><i class="fa fa-check"></i></span>Vegan Options</label></li> 
                                                </ul>
                                            </div><!-- end panel-body -->
                                        </div><!-- end panel-collapse -->
                                    </div><!-- end panel-default -->
                                    
                                    
									
									<div align="center"><button type="filter" name="filter" value="filter" class="btn btn-orange btn-lg" id="filter">Filter</button></div>
									
                                    </form>
                                </div><!-- end panel-group -->
                                
                             </div><!-- end side-bar-block -->
                            
                           
                        </div><!-- end columns --> 
						  <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                        
<?php

	$new_url = $url;
	$curl = curl_init();
	curl_setopt_array($curl, array(
	CURLOPT_URL => $new_url,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: tripadvisor1.p.rapidapi.com",
		"x-rapidapi-key: 00f0606f28mshf1cfdf4339991b9p1506e6jsndb00284e0a66"
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
	  
//print_r($result);
     $resultdata = $result['data'];
	 foreach($resultdata as $final){
		$res = isset($final['photo']['images']['small']) ? $final['photo']['images']['small']: null;
		if ($res == null)
		{
			$res['url']="default_url";
		}
		$hotel_name = isset($final['name'])?$final['name']:null;
		$hotel_image=$res['url'];
		$phone=isset($final['phone'])?$final['phone']:null;
		$rating=isset($final['rating'])?$final['rating']:null;
		$ranking=isset($final['ranking'])?$final['ranking']:null;
		$resid = isset($final['location_id'])?$final['location_id']:null;
		$num = isset($final['num_reviews'])?$final['num_reviews']:null;
		

	echo <<< EOT
		  <div class="list-block1 main-block1" style="height: 200px; width: 80%">
                                <table cellspacing="10">
								<tr>
                            	
                            		<td width="30%">
                            		      <img src="$hotel_image" alt="hotel-img"  />
                           
                                        
                                    </td>
                                    
                                      <td width="70%" style="margin_left:20px;">
                                
                                        <h3 class="block-title">$hotel_name</h3>
                                        <p class="block-minor"> <b>$ranking</b></p>
										<p> <b>$rating</b> rating based on <b>$num</b> of reviews</p>
                                        <p> Contact: <b>$phone</b></p>
										<form method="post" action="restaurant_connect.php"> 
									   <input type="hidden" name="orest_id" value= $resid  />
										<input type="submit" value="View more" class="btn btn-orange btn-lg"/> 
									  </form> 
                                    </td>
                            	</tr>
								</table>
                            </div><!-- end h-list-block -->
		


		
EOT;

	
	 }
}
                        
	echo <<< EOT
                           
                            <div class="pages">
                                <ol class="pagination">
                                    <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                                </ol>
                            </div><!-- end pages -->
                        

EOT;

	
  ?>
						</div><!-- end columns -->

                    </div><!-- end row -->
            	</div><!-- end container -->
            </div><!-- end hotel-listing -->
        </section><!-- end innerpage-wrapper -->
   <section id="footer" >
        
                     <ul class="social-links list-inline list-unstyled">
				     <h3 class="footer-heading">FOLLOW US</h3>

                     <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                     <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                     <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                     <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                     <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                     </ul>
            
        </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
        <script src="custom-navigation.js"></script>
        <script src="custom-owl.js"></script>
		<script>
$(document.ready(function()
{
 $("#show_login").click(function(){
  showpopup();
 });
 $("#close_login").click(function(){
  hidepopup();
 });
});
function showpopup()
{
 $("#reviewform").fadeIn();
 $("#reviewform").css({"visibility":"visible","display":"block"});
}

function hidepopup()
{
 $("#reviewform").fadeOut();
 $("#reviewform").css({"visibility":"hidden","display":"none"});
}
		</script>
</body>
</html>
