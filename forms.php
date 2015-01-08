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

 <header id="myCarousel" class="carousel slide tron">
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div><img src="_images/bora_bora.jpg"></div>>
            </div>
        </div>
    </header>
    <div class="container">
<form role="form">
    <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" name="firstName"id="firsName" placeholder="First" value="<?php if (isset($_POST['firstName'])) echo $_POST['firstName']; ?>" required>
  </div>
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last" value="<?php if (isset($_POST['lastName'])) echo $_POST['lastName']; ?>" required>
  </div>
  <div class="form-group">
    <label for="address">Street Address</label>
    <input type="text" class="form-control" id="address" name="address" value="<?php if (isset($_POST['address'])) echo $_POST['address']; ?>" required>
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" id="city" name="city" value="<?php if (isset($_POST['city'])) echo $_POST['city']; ?>" required>
  </div>
  <div class="form-group">
    <label for="state">State</label>
    <input type="text" class="form-control" id="state" name="state" value="<?php if (isset($_POST['city'])) echo $_POST['city']; ?>" required>
  </div>
  <div class="form-group">
    <label for="zip">Zip Code</label>
    <input type="email" class="form-control" id="zip" name="zip"value="<?php if (isset($_POST['city'])) echo $_POST['city']; ?>" required>
  </div>
   <div class="form-group">
    <label for="phone">Phone Number</label>
    <input type="email" class="form-control" id="phone" name="phone"value="<?php if (isset($_POST['city'])) echo $_POST['city']; ?>">
  </div>
  <div class="form-group">
    <label for="Email1">Email address</label>
    <input type="email" class="form-control" id="Email1" name="Email" placeholder="Enter email" value="<?php if (isset($_POST['Email'])) echo $_POST['Email']; ?>" required>
  </div>
  
</form>
</div>

    <!---- Start of Footer ---->
<?php include("footer.php"); ?>
	<!---- End of Footer ---->


</body>
</html>