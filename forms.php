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
<body>
	
	<!---- Start of NavBar ---->
<?php include("navbar.php"); ?>
	<!---- End of NavBar ---->

 <?php include("jumbotron.php"); ?>
    <div class="container">
<form role="form" class="">
  <fieldset>
  <legend>Personal Information</legend>
  <div class="row">
    <div class="col-xs-5">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" name="firstName"id="firsName" placeholder="First" value="<?php if (isset($_POST['firstName'])) echo $_POST['firstName']; ?>" required>
  </div>
  <div class="col-xs-5">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last" value="<?php if (isset($_POST['lastName'])) echo $_POST['lastName']; ?>" required>
  </div>
  <div class="col-xs-5">
    <label for="address">Street Address</label>
    <input type="text" class="form-control" id="address" name="address" value="<?php if (isset($_POST['address'])) echo $_POST['address']; ?>" required>
  </div>
  </div>
  <div class="row">
  <div class="col-xs-5">
    <label for="city">City</label>
    <input type="text" class="form-control" id="city" name="city" value="<?php if (isset($_POST['city'])) echo $_POST['city']; ?>" required>
  </div>
  <div class="col-xs-3">
    <label for="state">State</label>
    <select class="form-control" id="state" name="state" required>
      <option value="Alabama">AL</option>
      <option value="Alaska">AK</option>
      <option value="Arizona">AZ</option>
      <option value="Arkansas">AR</option>
      <option value="California">CA</option>
      <option value="Colorado">CO</option>
      <option value="Connecticut">CT</option>
      <option value="Delaware">DE</option>
      <option value="Florida">FL</option>
      <option value="Georgia">GA</option>
      <option value="Hawaii">HI</option>
      <option value="Idaho">ID</option>
      <option value="Illinois">IL</option>
      <option value="Indiana">IN</option>
      <option value="Iowa">IA</option>
      <option value="Kansas">KS</option>
      <option value="Kentucky">KY</option>
      <option value="Louisiana">LA</option>
      <option value="Maine">ME</option>
      <option value="Maryland">MD</option>
      <option value="Massachusetts">MA</option>
      <option value="Michigan">MI</option>
      <option value="Minnesota">MN</option>
      <option value="Mississippi">MS</option>
      <option value="Missouri">MO</option>
      <option value="Montana">MT</option>
      <option value="Nebraska">NE</option>
      <option value="Nevada">NV</option>
      <option value="New Hampshire">NH</option>
      <option value="New Jersey">NJ</option>
      <option value="New Mexico">NM</option>
      <option value="New York">NY</option>
      <option value="North Carolina">NC</option>
      <option value="North Dakota">ND</option>
      <option value="Ohio">OH</option>
      <option value="Oklahoma">OK</option>
      <option value="Oregon">OR</option>
      <option value="Pennsylvania">PA</option>
      <option value="Rhode Island">RI</option>
      <option value="South Carolina">SC</option>
      <option value="South Dakota">SD</option>
      <option value="Tennessee">TN</option>
      <option value="Texas">TX</option>
      <option value="Utah">UT</option>
      <option value="Vermont">VT</option>
      <option value="Virginia">VA</option>
      <option value="Washington">WA</option>
      <option value="West Virginia">WV</option>
      <option value="Wisconsin">WI</option>
      <option value="Wyoming">WY</option>
    </select>
  </div>
  <div class="col-xs-2">
    <label for="zip">Zip</label>
    <input type="email" class="form-control" id="zip" name="zip"value="<?php if (isset($_POST['city'])) echo $_POST['city']; ?>" required>
  </div>
  </div>
  <div class="row">
   <div class="col-xs-5">
    <label for="phone">Phone</label>
    <input type="email" class="form-control" id="phone" name="phone"value="<?php if (isset($_POST['city'])) echo $_POST['city']; ?>">
  </div>
  <div class="col-xs-5">
    <label for="Email1">Email</label>
    <input type="email" class="form-control" id="Email1" name="Email" placeholder="Enter email" value="<?php if (isset($_POST['Email'])) echo $_POST['Email']; ?>" required>
  </div>
  </div>
  </fieldset>
  <fieldset>
  <div class="col-xs-5">
    <legend>Destination Details</legend>
    <label for="destination">Destination</label>
    <select class="form-control" name="destination" id="destination">
      <option value="Bora Bora">Bora Bora</option>
      <option value="Cancun">Cancun</option>
      <option value="Costa Rica">Costa Rica</option>
      <option value="Kauai">Kauai</option>
      <option value="Las Vegas">Las Vegas</option>
      <option value="New York">New York</option>
      <option value="Paris">Paris</option>
      <option value="Venice">Venice</option>
      <option value="Dubai">Dubai</option>
    </select>
  </fieldset>
 </div>
  
</form>
</div>

    <!---- Start of Footer ---->
<?php include("footer.php"); ?>
	<!---- End of Footer ---->


</body>
</html>