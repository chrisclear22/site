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
        <div class="col-xs-12 col-sm-6 col-md-3 col-md-push-9 col-lg-3 col-lg-push-9">
              <h3>What's Included</h3>
                <ul>
                  <li>Roundtrip Airfare</li>
                  <li>Accomodations</li>
                  <li>Local Transportation</li>
                  <li>Food and Drinks</li>
                  <li>Spa Credits</li>
                  <li>Choice of two Activities</li>
                </ul>
              <h4>Select Dates</h4>
                <form action="">
                  <div class="input-daterange input-group" id="datepicker">
                    <input type="date" class="input-sm form-control" name="departure" />
                    <span class="input-group-addon">to</span>
                    <input type="date" class="input-sm form-control" name="return" />
                  </div><br>
                  <button class="btn btn-default" role="button">Book Now!</button>
                </form>
        </div> <!-- end right offset column -->

          <div class="col-xs-12 col-sm-9 col-md-9 col-md-pull-3 col-lg-9 col-lg-pull-3"> <!--left column -->
            <h1 class="loca_name text-center">Bora Bora</h1>
              <p>After landing at the Bora Bora Airport(BOB) you will travel via shuttle or small bus to the Four Seasons Resort Bora Bora where you will be staying in a two-bedroom overwater bungalow suite with plunge pool.</p>

             <p> Upon checking in with our VIP concierge you will be provided with an optional itinerary. This will include a map with dates and times for your local travel, activities, and dining. The concierge will also provide you with information regarding nightlife and social activities you may be interested in, as well as seasonal events. Don’t forget your camera!</p>

          <h1 class="text-center">Activities</h1>
              <p>We offer the best experiences for your trip. In order to do this we’ve searched far and wide to find the best of the best for your chosen activities, and since we know people have different interest we allow you to choose the activities for your Leap Trip package. Your package will include 2 activities (your choice) from the list below. You can contact our VIP concierge to get more info or schedule activities and don’t forget to use our spa after enjoying your activities after all it is included.</p>

              <ul>
                <li>Helicopter Tour</li>
                <li>Snorkeling Adventure</li>
                <li>Catamaran Excursion</li>
                <li>Scuba Diving Adventure</li>
                <li>Parasailing</li>
                <li>Pearl Farm Tour</li>
                <li>4wd Safari</li>
                <li>Deep Sea Fishing</li>
              </ul>

              <h1>Dinning</h1>
              <p>There’s nothing more miserable than going somewhere and not enjoying the cuisine. We’ve done our best to remedy that. After booking you Leap Trip please contact our VIP concierge to make your dinner dining reservations. We are currently offering reservations at these fine locations and as always your breakfast will be served in your room.</p>
              <ul>
                <li>La Villa Mahana</li>
                <li>Restaurant St James</li>
                <li>Catamaran Excursion</li>
                <li>Lagoon Restaurant by Jean-Georges</li>
                <li>Mai Kai Bora Bora</li>
                <li>Matira Beach Restaurant</li>
                <li>Arli Moana</li>
                <li>Tere Nui</li>
                <li>Fare Hoa Beach Bar</li>
                <li>Sunset Restaurant & Bar</li>
              </ul><br>
          </div> <!-- end left column -->
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







