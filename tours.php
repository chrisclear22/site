<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/full-slider.css">
   <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	
	<!---- Start of NavBar ---->
<?php include("navbar.php"); ?>
	<!---- End of NavBar ---->

	<!---- Start of Slider ---->
<header id="myCarousel" class="carousel slide tron">
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div><img src="_images/bora_bora.jpg"></div>>
            </div>
        </div>
    </header>
    <!-- END OF SLIDER -->
<!---- Start of First Row ---->
<section id="destination" data-speed="6" data-type="background">
    <div class="container imgs tours">
    	<div class="row">
    		<div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
    			<img src="box_images/bora_bora.jpg">
    		<div class="img-caption">
                    <h2>Bora Bora</h2>
                    <p>$1,500</p>
                    <button type="button" class="btn center-block">Book Now</button>
                </div>  	
    		</div>
    		<div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
    			<img src="box_images/cancun.jpg">
    			<div class="img-caption">
                    <h2>Cancun</h2>
                    <p>$1,500</p>
                    <button type="button" class="btn center-block">Book Now</button>
                </div>  	
    		</div>
    		<div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
    			<img src="box_images/costa_rica1.jpg">
    			<div class="img-caption">
                    <h2>Costa Rica</h2>
                    <p>$1,500</p>
                    <button type="button" class="btn center-block">Book Now</button>
                </div>  	
    		</div>
    		<div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
    			<img src="box_images/hawaii_kauai1.jpg">
    			<div class="img-caption">
                     <h2>Kauai</h2>
    			     <p>$1,500</p>
                     <button type="button" class="btn center-block">Book Now</button>
                </div>	
    		</div>
    		<div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
    			<img src="box_images/las_vegas.jpg">
    			<div class="img-caption text-center">
                    <h2>Las Vegas</h2>
                    <p>$1,500</p>
                    <button type="button" class="btn center-block">Book Now</button>
                </div> 	
    		</div>
    		<div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
    			<img src="box_images/new_york.jpg">
    		    <div class="img-caption">
                    <h2>New York</h2>
                    <p>$1,500</p>
                    <button type="button" class="btn center-block">Book Now</button>
                </div>  	
    		</div>
    		<div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
    			<img src="box_images/paris.jpg">
    			<div class="img-caption text-center">
                    <h2>Paris</h2>
                    <p>$1,500</p>
                    <button type="button" class="btn center-block">Book Now</button>
                </div>  
    		</div>
    		<div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
    			<img src="box_images/venice_italy.jpg">
    			<div class="img-caption text-center">
                    <h2>Venice</h2>
                    <p>$1,500</p>
                    <button type="button" class="btn center-block">Book Now</button>
                </div>  	
    		</div>
    		<div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
    			<img src="box_images/dubai.jpg">
    			<div class="img-caption">
                    <h2>Dubai</h2>
                    <p>$1,500</p>
                    <button type="button" class="btn center-block">Book Now</button>
                </div>  
    		</div>
    	</div>
    	</div>
</section>
    <!---- End of Tfirst Row ---->

    <!---- Start of Footer ---->
<?php include("footer.php"); ?>
	<!---- End of Footer ---->

<!---- Start Script ---->
<?php include("script.php"); ?>
<!----- End Script ---->
</body>
</html>