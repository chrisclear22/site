<!DOCTYPE html>
<html>

<?php include("head.php"); ?>

<body>
	<?php include ("analyticstracking.php"); ?>
	<!-- Start of NavBar -->
<?php include("navbar.php"); ?>
	<!-- End of NavBar -->

	<!-- Start of Slider -->
<?php include("slider.php"); ?>
    <!-- END OF SLIDER -->

<!-- Start of First Row -->
<div class="index_main_content_wrapper">
<section id="intro" data-speed="6" data-type="background">
    <div class="container imgs top">
        <div class="row">
            <?php
                require('mysqli_connect.php');
                $q = "SELECT destination_id AS id, image, title, price, alt FROM destinations WHERE destination_id <= 6";
                $result = mysqli_query($dbcon, $q);
                if($result){
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo '<div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">';
                        echo '<img class="img-thumbnail" src="' . $row['image'] . '" alt="' . $row['alt'] . '">';
                        echo '<div class="img-caption">';
                        echo '<h2 class="font">' . $row['title'] . '</h2>';
                        echo '<p>' . $row['price'] . '</p>';
                        echo '<a href="destination.php?id=' . $row['id'] . '"><span class="btn center-block">More Info</span></a>';
                        echo '</div> </div>';}
                        mysqli_free_result($result);
                    } else{
                        echo '<p class="error">The current users could not be retrieved. We apologize for any inconvenience.</p>';
    
                    echo '<p>' . mysqli_error($dbcon) . '<br><br />Query: ' . $q . '</p>';
                    } 
                    ; ?> 
            </div>
        </div>
        
        </div>
</section>
   <!-- End of First Row -->
 
   <!-- Start of Second Row -->     
        <div class="container featured">
        <div class="row">
            <div class="col-lg-4  col-med-4 col-sm-12 col-xs-12">
                <img class="center-block img-responsive img-circle" src="clients/thumbs_up.jpg" alt="client image">
            </div>
            <div class="col-lg-8 col-med-8 col-sm-12 col-xs-12">
                <blockquote class="gigantic center-block">
                    <p>This site is so awesome! It was very simple and easy to navigate through and the prices are fantastic</p><footer>Melissa Mathers<cite> Mother of 2</cite></footer>
                </blockquote>
            </div>
        </div>
        </div>

    <!-- End of Second Row -->

    <!-- Start of Third Row -->
<section id="about" data-speed="2" data-type="background">
        <div class="container imgs bottom">
        <div class="row">
            <?php
                
                $q = "SELECT destination_id AS id, image, title, price, alt FROM destinations WHERE destination_id BETWEEN 7 AND 9";
                $result = mysqli_query($dbcon, $q);
                if($result){
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo '<div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">';
                        echo '<img class="img-thumbnail" src="' . $row['image'] . '" alt="' . $row['alt'] . '">';
                        echo '<div class="img-caption">';
                        echo '<h2>' . $row['title'] . '</h2>';
                        echo '<p>' . $row['price'] . '</p>';
                        echo '<a href="destination.php?id=' . $row['id'] . '"><span class="btn center-block">More Info</span></a>';
                        echo '</div> </div>';}
                        mysqli_free_result($result);
                    } else{
                        echo '<p class="error">The current users could not be retrieved. We apologize for any inconvenience.</p>';
    
                    echo '<p>' . mysqli_error($dbcon) . '<br><br />Query: ' . $q . '</p>';
                    } 
                    mysqli_close($dbcon); ?> 

        </div>
        </div>
</section>
</div>
    <!-- End of Third Row -->

    <!-- Start of Footer -->
<?php include("footer.php"); ?>
	<!-- End of Footer -->
</body>
</html>