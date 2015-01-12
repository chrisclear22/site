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
<?php include("slider.php"); ?>
    <!-- END OF SLIDER -->
<!---- Start of First Row ---->
<div class="index_main_content_wrapper">
<section id="intro" data-speed="6" data-type="background">
    <div class="container imgs top">
        <div class="row">
            <div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
                <img class="img-thumbnail"src="box_images/bora_bora.jpg">
            <div class="img-caption">
                    <h2>Bora Bora</h2>
                    <p>$1,500</p>
                    <a href="forms.php"><button type="button" class="btn center-block">Book Now</button></a>
                </div>      
            </div>
            <div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
                <img class="img-thumbnail"src="box_images/cancun.jpg">
                <div class="img-caption">
                    <h2>Cancun</h2>
                    <p>$1,500</p>
                    <a href="forms.php"><button type="button" class="btn center-block">Book Now</button></a>
                </div>      
            </div>
            <div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
                <img class="img-thumbnail"src="box_images/costa_rica1.jpg">
                <div class="img-caption">
                    <h2>Costa Rica</h2>
                    <p>$1,500</p>
                    <a href="forms.php"><button type="button" class="btn center-block">Book Now</button></a>
                </div>      
            </div>
            <div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
                <img class="img-thumbnail"src="box_images/hawaii_kauai1.jpg">
                <div class="img-caption">
                     <h2>Kauai</h2>
                     <p>$1,500</p>
                     <a href="forms.php"><button type="button" class="btn center-block">Book Now</button></a>
                </div>  
            </div>
            <div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
                <img class="img-thumbnail"src="box_images/las_vegas.jpg">
                <div class="img-caption text-center">
                    <h2>Las Vegas</h2>
                    <p>$1,500</p>
                    <a href="forms.php"><button type="button" class="btn center-block">Book Now</button></a>
                </div>  
            </div>
            <div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
                <img class="img-thumbnail"src="box_images/new_york.jpg">
                <div class="img-caption">
                    <h2>New York</h2>
                    <p>$1,500</p>
                    <a href="forms.php"><button type="button" class="btn center-block">Book Now</button></a>
                </div>      
            </div>
        </div>
        
        </div>
</section>
   <!---- End of First Row ---->
   <section id="intro" data-speed="6" data-type="background">

</section>
   <!---- Start of Second Row ---->     
        <div class="container featured">
        <div class="row">
            <div class="col-lg-4 col-med-4 col-sm-4 col-xs-12">
                <img class="center-block" src="clients/thumbs_up.jpg">
            </div>
            <div class="col-lg-8 col-med-8 col-sm-8 col-xs-12">
                <blockquote class="gigantic center-block">
                    <p>This site is so awesome! It was very simple and easy to navigate through and the prices are fantastic</p><footer>Melissa Mathers<cite> Mother of 2</cite></footer>
                </blockquote>
            </div>
        </div>
        </div>

    <!---- End of Second Row ---->

    <!---- Start of Third Row ---->
<section id="about" data-speed="2" data-type="background">
        <div class="container imgs bottom">
        <div class="row">
            <div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
                <img class="img-thumbnail"src="box_images/paris.jpg">
                <div class="img-caption text-center">
                    <h2>Paris</h2>
                    <p>$1,500</p>
                    <a href="forms.php"><button type="button" class="btn center-block">Book Now</button></a>
                </div>  
            </div>
            <div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
                <img class="img-thumbnail"src="box_images/venice_italy.jpg">
                <div class="img-caption text-center">
                    <h2>Venice</h2>
                    <p>$1,500</p>
                    <a href="forms.php"><button type="button" class="btn center-block">Book Now</button></a>
                </div>      
            </div>
            <div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">
                <img class="img-thumbnail"src="box_images/dubai.jpg">
                <div class="img-caption">
                    <h2>Dubai</h2>
                    <p>$1,500</p>
                    <a href="forms.php"><button type="button" class="btn center-block">Book Now</button></a>
                </div>  
            </div>
        </div>
        </div>
</section>
    <!---- End of Third Row ---->

    <!---- Start of Footer ---->
<?php include("footer.php"); ?>
	<!---- End of Footer ---->
</body>
</html>