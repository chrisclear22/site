<!DOCTYPE html>
<html>
<?php include("head.php"); ?>
<body>
		<!-- Start of NavBar -->
<?php include("navbar.php"); ?>
	<!-- End of NavBar -->

<?php include("jumbotron.php"); ?>

<div class="index_main_content_wrapper">
<section id="intro" data-speed="6" data-type="background">
    <div class="container packages imgs top">
        <div class="row">
            <?php
                require('mysqli_connect.php');
                $q = "SELECT image, title, price, alt, location FROM destinations";
                $result = mysqli_query($dbcon, $q);
                if($result){
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo '<div class="col-lg-4 col-med-4 col-sm-6 col-xs-12">';
                        echo '<img class="img-thumbnail" src="' . $row['image'] . '" alt="' . $row['alt'] . '">';
                        echo '<div class="img-caption">';
                        echo '<h2>' . $row['title'] . '</h2>';
                        echo '<p>' . $row['price'] . '</p>';
                        echo '<a href="' . $row['location'] . '"><span class="btn center-block">More Info</span></a>';
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
<?php include("footer.php"); ?>
</body>
</html>