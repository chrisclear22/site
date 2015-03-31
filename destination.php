<?php $page_title="Leap Trip | Details"; ?>
<?php include("head.php"); ?>

<body>
<?php include ("analyticstracking.php"); ?>

  <!-- Start of NavBar -->
<?php include("navbar.php"); ?>
  <!-- End of NavBar -->


    <div class="container top_container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-med-12 col-lg-12">
           <?php 
            require ('mysqli_connect.php'); 

            if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
              $id = $_GET['id'];
                $q = "SELECT top_image FROM destinations WHERE destination_id='$id'";
              $result = mysqli_query($dbcon, $q);
              if ($result){
                $row = mysqli_fetch_array($result);
              echo '<img class="img-responsive topimage" src="' . $row['top_image'] . '" alt="destination image">';
              mysqli_free_result($result);
               }
                else{
                  echo '<p> Sorry,but the page you have accessed is currently unavailable.<p>';
                }
           } 
            ?>
        </div>
        <div class="col-xs-12"><hr></div>
      </div> <!-- end row -->
    


      <div class="row loc-details"> <!-- location_details row -->
        <div class="col-xs-12 col-sm-12 col-md-3 col-md-push-9 col-lg-3 col-lg-push-9 included"> <!-- package bullets column -->
              <h3>What's Included</h3>
                <ul>
                  <li>Roundtrip Airfare</li>
                  <li>Accomodations</li>
                  <li>Local Transportation</li>
                  <li>Food and Drinks</li>
                  <li>Spa Credits</li>
                  <li>Choice of two Activities</li>
                </ul>
               <form action="forms.php" >
                    <input type="hidden" value="<?php echo $id ?>" name="id" />
                  <button class="btn btn-default dest" role="button">Book Now!</button>
                </form>
        </div> <!-- end package bullets column -->

          <div class="col-xs-12 col-sm-12 col-md-9 col-md-pull-3 col-lg-9 col-lg-pull-3"> <!-- package summary column -->
            <?php  
            if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
              $id = $_GET['id'];
                $q = "SELECT location_detail FROM destinations WHERE destination_id='$id'";
              $result = mysqli_query($dbcon, $q);
              if ($result){
                $row = mysqli_fetch_array($result);
              echo '' . $row['location_detail'] . '';
              mysqli_free_result($result);
               }
                else{
                  echo '<p> Sorry,but the page you have accessed is currently unavailable.<p>';
                }
           } 
            ?>
          </div> <!-- end package summary column -->
          <div class="col-xs-12"><hr></div>
      </div> <!-- end location details row -->
    </div> <!-- end container top_container -->

          <div class="container loc-activities"> <!-- activities container -->
            <div class="row act-text">
              <div class="col-xs-12 col-sm-6 col-med-4 col-lg-4">
                <?php 

            if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
              $id = $_GET['id'];
                $q = "SELECT act_image FROM destinations WHERE destination_id='$id'";
              $result = mysqli_query($dbcon, $q);
              if ($result){
                $row = mysqli_fetch_array($result);
              echo '<img class="img-responsive" src="' . $row['act_image'] . '" alt="activity image">';
              mysqli_free_result($result);
               }
                else{
                  echo '<p> Sorry,but the page you have accessed is currently unavailable.<p>';
                }
           } 
            ?>
              </div>
              <div class="col-xs-12 col-md-8 col-lg-8">
              <?php  
            if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
              $id = $_GET['id'];
                $q = "SELECT activities FROM destinations WHERE destination_id='$id'";
              $result = mysqli_query($dbcon, $q);
              if ($result){
                $row = mysqli_fetch_array($result);
              echo '' . $row['activities'] . '';
              mysqli_free_result($result);
               }
                else{
                  echo '<p> Sorry,but the page you have accessed is currently unavailable.<p>';
                }
           } 
            ?>
              </div>
              <div class="col-xs-12"><hr></div>
            </div>
          </div> <!-- end activities container -->
          <div class="container loc-dining"> <!-- dining container -->
            <div class="row">
              <div class="col-xs-12 col-md-8 col-lg-8">
                  <?php 

            if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
              $id = $_GET['id'];
                $q = "SELECT Dining, weather FROM destinations WHERE destination_id='$id'";
              $result = mysqli_query($dbcon, $q);
              if ($result){
                $row = mysqli_fetch_array($result);
              echo '' . $row['Dining'] . '';
              echo '' . $row['weather'] . '';
              mysqli_free_result($result);
               }
                else{
                  echo '<p> Sorry,but the page you have accessed is currently unavailable.<p>';
                }
           } 
            ?>
              </div>
              <div class="col-xs-12 col-sm-6 col-med-4 col-lg-4">
                <?php 

            if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
              $id = $_GET['id'];
                $q = "SELECT dine_image FROM destinations WHERE destination_id='$id'";
              $result = mysqli_query($dbcon, $q);
              if ($result){
                $row = mysqli_fetch_array($result);
              echo '<img class="img-responsive" src="' . $row['dine_image'] . '" alt="restaraunt image">';
              mysqli_free_result($result);
               }
                else{
                  echo '<p> Sorry,but the page you have accessed is currently unavailable.<p>';
                }
           } 
            ?>
              </div>
              <div class="col-xs-12"><hr></div>
            </div>
        
          </div> <!-- end dining container -->
          <div class="row">
 <div class="col-xs-8 col-xs-push-2 col-sm-10 col-sm-push-2 includedbottom"> <!-- package bullets column -->
              <h3>What's Included</h3>
                <ul>
                  <li>Roundtrip Airfare</li>
                  <li>Accomodations</li>
                  <li>Local Transportation</li>
                  <li>Food and Drinks</li>
                  <li>Spa Credits</li>
                  <li>Choice of two Activities</li>
                </ul>
               <form action="forms.php" >
                    <input type="hidden" value="<?php echo $id ?>" name="id" />
                  <button class="btn btn-default dest" role="button">Book Now!</button>
                </form>
        </div> <!-- end package bullets column -->
        </div>
          <div class="container loc-weath"> <!-- weather and map container -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <h3 id="weather_info"></h3>
                  <p class="current_weather">Currently: </p>
                  <h4>Today's Forecast:</h4>
                  <p class="weather_desc"></p>
                  <p class="wu-logo">Powered by: <a href="http://www.wunderground.com/" title="weather underground"><img src="_images/wundergroundLogo_4c_rev_horz.png" alt="weather logo" class="img-responsive"></a></p>
              </div>   
              <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-8 col-lg-8">
                <div id="googleMap" style="width:500p;height:310px;"></div>
              </div>
            </div> 
          </div> <!-- end weather and map container -->
          
 <?php include("footer.php"); ?>

</body>
</html>







