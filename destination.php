<!DOCTYPE html>
<html lang="en">

<?php include("head.php"); ?>



<body>
      <!-- Start of NavBar -->
<?php include("navbar.php"); ?>
  <!-- End of NavBar -->

    <div class="container top_container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-med-12 col-lg-12">
          <img class="img-responsive" src="http://franklincode.coursekit.com.s3.amazonaws.com/30e1ceef65aa4ba1a1bb66056eeb09b6/sass/img/onboarding-bg.jpg" alt="">
        </div>
      </div> <!-- end row -->
      

      <div class="row local_details"> <!-- loca_details row -->
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"> <!--left column -->
            <?php 
            require ('mysqli_connect.php'); 

            if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
            	$id = $_GET['id'];
               	$q = "SELECT location_detail, activities, Dining, weather FROM destinations WHERE destination_id='$id'";
            	$result = mysqli_query($dbcon, $q);
            	if ($result){
            		$row = mysqli_fetch_array($result);
            	echo '' . $row['location_detail'] . '';
            	echo '' . $row['activities'] . '';
            	echo '' . $row['Dining'] . '';
            	echo '' . $row['weather'] . '';
          		mysqli_free_result($result);
          		 }
          		  else{
          		  	echo '<p> Sorry,but the page you have accessed is currently unavailable.<p>';
          		  }
       		 } 
       		  ?>
          </div> <!-- end left column -->
           <div class="col-xs-12 col-sm-5 col-md-3 col-lg-3 ">
              <h3>What's Included</h3>
                <ul>
                  <li>Round-trip Airfare</li>
                  <li>Accommodations</li>
                  <li>Local Transportation</li>
                  <li>Food and Drinks</li>
                  <li>Spa Credits</li>
                  <li>Choice of two Activities</li>
                </ul>
              <h4>Select Dates</h4>
                <form action="forms.php" >
                  <div class="input-daterange input-group" id="datepicker">
                    <input type="date" class="input-sm form-control" name="departure" />
                    <span class="input-group-addon">to</span>
                    <input type="date" class="input-sm form-control" name="return" />
                    <input type="hidden" value="<?php echo $id ?>" name="id" />
                  </div><br>
                  <button class="btn btn-default" role="button">Book Now!</button>
                </form>
                <?php mysqli_close($dbcon); ?>
        </div> <!-- end right offset column -->
      </div> <!-- end loca_details row -->

      <div class="row map_weath"> <!-- map_weath row -->
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <h3 id="weather_info"></h3>
            <h4>Currently:</h4>
            <p class="current_weather"></p>
            <h4>Today's Forecast:</h4>
            <p class="weather_desc"></p>
        </div>   
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <div id="googleMap" style="width:500p;height:200px;"></div>
        </div> 
      </div> <!-- end map_weath row -->

    </div> <!-- end container top_container -->




    <?php include("footer.php"); ?>
</body>
</html>







