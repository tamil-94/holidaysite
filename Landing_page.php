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
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">      
  			                <link rel="stylesheet" href="css/responsive.css">

                <link rel="stylesheet" href="css/orange.css">       
				
				
				
<!-- Date rangepicker necessary stuff -->				

   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" href="css/style.css">

      
		<style type="text/css">
  div#config {
    display:none;
  }
</style>

<!--daterange close -->
       
    </head>
    
    
   
    <body>
	
    
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
                        <li class="dropdown"><a href="#" class="active">Home</a>

                        </li>
                        <li class="dropdown"><a href="hotelbooking.php">Hotels</a>
			
                        </li>
                        <li class="dropdown"><a href="restaurant.php" >Restaurants</a>
			
                        </li>
                        
				<li class="dropdown" style="text-decoration:underline"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-user"></i></span>Login</a>
                            		
                        </li>
				<li class="dropdown"style="text-decoration:underline"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-lock"></i></span>SignUp</a>
                            		
                        </li>
                        
                        <li style="visibility:hidden"><a href="" ></a></li>

                    </div><!-- end columns -->


                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </nav><!-- end navbar -->
        
       
        <section class="page-cover" id="cover-holiday">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title" style="color:white">Beautiful Holiday Trips</h1>
                        <ul class="breadcrumb">
						<div id="search">
		<form method="post" action="hotel_connect.php"> 
		<input type="text" name="search" placeholder="Search your location" size="45"> </input>
				
		<input type="text" name="daterangep" size="35">
			
		<input type="submit" value="find hotels" class="owl-buttons" size="25">
		</form>
		</div>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->

        <?php
	echo <<< EOT
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="holiday-trips" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
						<div>
                        	
                            <div class="trip-block mg-bot-60">
                                <div class="page-heading trip-heading">
                                    <h2>Top Beach Destinations</h2>
                                </div><!-- end page-heading -->
                                
                                <div class="owl-carousel owl-theme owl-custom-arrow owl-holidays">
                                    
                                    <div class="item" style="float:right;">
                                        <div class="main-block tour-block">
                                            <div class="main-img">
											<form method="post" action="checking1.php"> 
                                                <a href="#">
                                                    <input type="image" name="test1" value="paris" src="images/beach3.jpg" class="img-responsive" alt="tour-img" />
                                                </a>
											</form>	
                                            </div><!-- end offer-img -->
                                            

                                                
                                            <div class="main-info tour-info">
                                                <div class="main-title tour-title">
                                                    <a href="#">Bahamas</a>
                                                    
                                                </div><!-- end tour-title -->
                                            </div><!-- end tour-info -->
                                        </div><!-- end tour-block -->
                                    </div><!-- end item -->
                                    
                                    <div class="item" style="float:right;">
                                        <div class="main-block tour-block">
                                            <div class="main-img">
											<form method="post" action="checking1.php"> 
                                                <a href="#">
                                                    <input type="image" name="test1" value="sandy cay"  src="images/beach2.jpg" class="img-responsive" alt="tour-img" />
                                                </a>
											</form>	
                                            </div><!-- end offer-img -->
                                            
                                            
                                                
                                            <div class="main-info tour-info">
                                                <div class="main-title tour-title">
                                                    <a href="#">Sandy Cay</a>

                                                </div><!-- end tour-title -->
                                            </div><!-- end tour-info -->
                                        </div><!-- end tour-block -->
                                    </div><!-- end item -->
                                    
                                    <div class="item" style="float:right;">
                                        <div class="main-block tour-block">
                                            <div class="main-img">
                                                <a href="#">
                                                    <img src="images/beach4.jpg" class="img-responsive" alt="tour-img" />
                                                </a>
                                            </div><!-- end offer-img -->
                                            
                                            
                                                
                                            <div class="main-info tour-info">
                                                <div class="main-title tour-title">
                                                    <a href="#">Paradise Beach</a>

                                                </div><!-- end tour-title -->
                                            </div><!-- end tour-info -->
                                        </div><!-- end tour-block -->
                                    </div><!-- end item -->
                                    
                                    <div class="item" style="float:right;">
                                        <div class="main-block tour-block">
                                            <div class="main-img">
											
                                                <a href="#">
                                                    <img src="images/beach3.jpg" class="img-responsive" alt="tour-img" />
                                                </a>
                                            </div><!-- end offer-img -->
                                            
                                            
                                                
                                            <div class="main-info tour-info">
                                                <div class="main-title tour-title">
                                                    <a href="#">Cancun</a>

                                                </div><!-- end tour-title -->
                                            </div><!-- end tour-info -->
                                        </div><!-- end tour-block -->
                                    </div><!-- end item -->
                               </div><!-- end owl-holidays -->
                           </div><!-- end trip-block -->
                           
                           
                           <div class="trip-block">
                                <div class="page-heading trip-heading">
                                    <h2>Romantic Destinations</h2>
                                </div><!-- end page-heading -->
                                
                                <div class="owl-carousel owl-theme owl-custom-arrow owl-holidays">
                                    
                                    <div class="item">
                                        <div class="main-block tour-block">
                                            <div class="main-img">
                                                <a href="#">
                                                    <img src="images/rom1.jpg" class="img-responsive" alt="tour-img" />
                                                </a>
                                            </div><!-- end offer-img -->
                                            
                                            
                                                
                                            <div class="main-info tour-info">
                                                <div class="main-title tour-title">
                                                    <a href="#">Venice</a>
                                                    
                                                </div><!-- end tour-title -->
                                            </div><!-- end tour-info -->
                                        </div><!-- end tour-block -->
                                    </div><!-- end item -->

                                    <div class="item">
                                        <div class="main-block tour-block">
                                            <div class="main-img">
                                                <a href="#">
                                                    <img src="images/rom2.jpg" class="img-responsive" alt="tour-img" />
                                                </a>
                                            </div><!-- end offer-img -->
                                            
                                            
                                                
                                            <div class="main-info tour-info">
                                                <div class="main-title tour-title">
                                                    <a href="#">Greece</a>
                                                    
                                                </div><!-- end tour-title -->
                                            </div><!-- end tour-info -->
                                        </div><!-- end tour-block -->
                                    </div><!-- end item -->
                                    
                                    <div class="item">
                                        <div class="main-block tour-block">
                                            <div class="main-img">
                                                <a href="#">
                                                    <img src="images/rom3.jpg" class="img-responsive" alt="tour-img" />
                                                </a>
                                            </div><!-- end offer-img -->
                                            
                                            
                                                
                                            <div class="main-info tour-info">
                                                <div class="main-title tour-title">
                                                    <a href="#">Maldives</a>

                                                </div><!-- end tour-title -->
                                            </div><!-- end tour-info -->
                                        </div><!-- end tour-block -->
                                    </div><!-- end item -->
                                    
                                    <div class="item">
                                        <div class="main-block tour-block">
                                            <div class="main-img">
                                                <a href="#">
                                                    <img src="images/rom4.jpg" class="img-responsive" alt="tour-img" />
                                                </a>
                                            </div><!-- end offer-img -->
                                            
                                            
                                            </div><!-- end offer-price-2 -->
                                                
                                            <div class="main-info tour-info">
                                                <div class="main-title tour-title" style="text-align:center">
                                                    <a href="#">Paris</a>

                                                </div><!-- end tour-title -->
                                            </div><!-- end tour-info -->
                                        </div><!-- end tour-block -->
                                    </div><!-- end item -->
                                    
								</div><!-- end owl-holidays -->
                           </div><!-- end trip-block -->
                                               
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->          
            </div><!-- end holidays -->
			        	<div id="holiday-trips" class="innerpage-section-padding">
            <div class="container">
			<div class="row">
			<div>

            <div class="trip-block">
                           <div class="big-heading">
                    	<h2>Popular <br/>Destinations<div class="light"></div></h2>                       
                    </div><!-- end big-heading -->
                                
                                <div class="owl-carousel owl-theme owl-custom-arrow owl-holidays">
                                    
                                    <div class="item">
                                        <div class="main-block tour-block">
                                            <div class="main-img">
                                                <a href="#">
                                                    <img src="images/pop1.jpg" class="img-responsive" alt="tour-img" />
                                                </a>
                                            </div><!-- end offer-img -->
                                            
                                            
                                                
                                            <div class="main-info tour-info">
                                                <div class="main-title tour-title">
                                                    <a href="#">Dublin</a>
                                                    
                                                    
                                                </div><!-- end tour-title -->
                                            </div><!-- end tour-info -->
                                        </div><!-- end tour-block -->
                                    </div><!-- end item -->

                                    <div class="item">
                                        <div class="main-block tour-block">
                                            <div class="main-img">
                                                <a href="#">
                                                    <img src="images/pop2.jpg" class="img-responsive" alt="tour-img" />
                                                </a>
                                            </div><!-- end offer-img -->
                                            
                                            
                                                
                                            <div class="main-info tour-info">
                                                <div class="main-title tour-title">
                                                    <a href="#">Bali</a>
                                                    
                                                    
                                                </div><!-- end tour-title -->
                                            </div><!-- end tour-info -->
                                        </div><!-- end tour-block -->
                                    </div><!-- end item -->
                                    
                                    <div class="item">
                                        <div class="main-block tour-block">
                                            <div class="main-img">
                                                <a href="#">
                                                    <img src="images/pop3.jpg" class="img-responsive" alt="tour-img" />
                                                </a>
                                            </div><!-- end offer-img -->
                                            
                                           
                                                
                                            <div class="main-info tour-info">
                                                <div class="main-title tour-title">
                                                    <a href="#">TajMahal</a>
                                                    

                                                </div><!-- end tour-title -->
                                            </div><!-- end tour-info -->
                                        </div><!-- end tour-block -->
                                    </div><!-- end item -->
                                    
                                    <div class="item">
                                        <div class="main-block tour-block">
                                            <div class="main-img">
                                                <a href="#">
                                                    <img src="images/pop4.jpg" class="img-responsive" alt="tour-img" />
                                                </a>
                                            </div><!-- end offer-img -->
                                            
                                            
                                                
                                            <div class="main-info tour-info">
                                                <div class="main-title tour-title">
                                                    <a href="#">Rome</a>

                                                </div><!-- end tour-title -->
                                            </div><!-- end tour-info -->
                                        </div><!-- end tour-block -->
                                    </div><!-- end item -->
                                    
								</div><!-- end owl-holidays -->
                           </div><!-- end trip-block -->       
                       </div>
					   </div>
					   </div>
					</div>

        </section><!-- end innerpage-wrapper -->

        
        <!-- Div required for daterangepicker but hidden -->
		
		     <div id="config" name="config">

                        <h2>Configuration Generator</h2>

                        <div class="well configurator">
                                           
                          <form>
                          <div class="row">

                            <div class="col-md-4">

                              <div class="form-group">
                                <label for="parentEl">parentEl</label>
                                <input type="text" class="form-control" id="parentEl" value="" placeholder="body">
                              </div>

                              <div class="form-group">
                                <label for="startDate">startDate</label>
                                <input type="text" class="form-control" id="startDate" value="07/01/2017">
                              </div>

                              <div class="form-group">
                                <label for="endDate">endDate</label>
                                <input type="text" class="form-control" id="endDate" value="07/15/2017">
                              </div>

                              <div class="form-group">
                                <label for="minDate">minDate</label>
                                <input type="text" class="form-control" id="minDate" value="" placeholder="MM/DD/YYYY">
                              </div>

                              <div class="form-group">
                                <label for="maxDate">maxDate</label>
                                <input type="text" class="form-control" id="maxDate" value="" placeholder="MM/DD/YYYY">
                              </div>

                              <div class="form-group">
                                <label for="opens">opens</label>
                                <select id="opens" class="form-control">
                                  <option value="right" selected>right</option>
                                  <option value="left">left</option>
                                  <option value="center">center</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="drops">drops</label>
                                <select id="drops" class="form-control">
                                  <option value="down" selected>down</option>
                                  <option value="up">up</option>
                                </select>
                              </div>

                            </div>
                            <div class="col-md-4">

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="showDropdowns"> showDropdowns
                                </label>
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="showWeekNumbers"> showWeekNumbers
                                </label>
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="showISOWeekNumbers"> showISOWeekNumbers
                                </label>
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="singleDatePicker"> singleDatePicker
                                </label>
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="timePicker"> timePicker
                                </label>
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="timePicker24Hour"> timePicker24Hour
                                </label>
                              </div>

                              <div class="form-group">
                                <label for="timePickerIncrement">timePickerIncrement (in minutes)</label>
                                <input type="text" class="form-control" id="timePickerIncrement" value="1">
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="timePickerSeconds"> timePickerSeconds
                                </label>
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="dateLimit"> dateLimit (with example date range span)
                                </label>
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="locale"> locale (with example settings)
                                </label>
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="autoApply"> autoApply
                                </label>
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="linkedCalendars" checked="checked"> linkedCalendars
                                </label>
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="autoUpdateInput" checked="checked"> autoUpdateInput
                                </label>
                              </div>

                            </div>
                            <div class="col-md-4">

                              <div class="form-group">
                                <label for="buttonClasses">buttonClasses</label>
                                <input type="text" class="form-control" id="buttonClasses" value="btn btn-sm">
                              </div>

                              <div class="form-group">
                                <label for="applyClass">applyClass</label>
                                <input type="text" class="form-control" id="applyClass" value="btn-success">
                              </div>

                              <div class="form-group">
                                <label for="cancelClass">cancelClass</label>
                                <input type="text" class="form-control" id="cancelClass" value="btn-default">
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="ranges"> ranges (with example predefined ranges)
                                </label>
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="alwaysShowCalendars"> alwaysShowCalendars
                                </label>
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="showCustomRangeLabel" checked="checked"> showCustomRangeLabel
                                </label>
                              </div>

                            </div>

                          </div>
                          </form>

                        </div>

                       

                        </div>
						
		<!-- daterange hidden Div closed -->				
        
        
        <section id="footer" >
        
            
	
                     <ul class="social-links list-inline list-unstyled">
				     <h3 class="footer-heading">FOLLOW US</h3>

                     <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                     <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                     <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                     <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                     <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                     </ul>
                        
                

            
            
        </section><!-- end footer -->
                              
                              
                               
EOT;
?>
             <!-- Script passing value to daterangepicker -->                                 
                                   
        
        <!-- Page Scripts Starts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
        <script src="custom-navigation.js"></script>
        <script src="custom-owl.js"></script>
		 <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="moment.min.js"></script>         
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="daterangepicker.js"></script>
			<script type="text/javascript">

         $('input[name="daterangep"]').daterangepicker();
            </script>  
        <!-- Page Scripts Ends -->
    </body>
</html>
