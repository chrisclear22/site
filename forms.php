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
    <label for="firsName">First Name</label>
    <input type="text" class="form-control" id="firsName" placeholder="First">
  </div>
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" placeholder="Last">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  
</form>
</div>

    <!---- Start of Footer ---->
<?php include("footer.php"); ?>
	<!---- End of Footer ---->


</body>
</html>