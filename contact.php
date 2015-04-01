<?php $page_title="Leap Trip | Contact Info"; ?>
<?php include("head.php"); ?>
<body id="body-2">
<?php include ("analyticstracking.php"); ?>
		<!-- Start of NavBar -->
<?php include("navbar.php"); ?>
	<!-- End of NavBar -->
<?php include("jumbotron.php"); ?>

<h1 class="text-center">Contact</h1>
<div class="container top_container">
              
    <div class="row contact-sect">
        <div class="col-xs-12 col-lg-7 cont-desc1">
            <h2 class="text-center">VIP Concierge</h2>
            <p>At Leaptrip we pride ourselves on making the most luxurious destinations available at unbelievable prices. If you ever have comments questions or concerns feel free to contact us. We've provided our toll free number so that you can speak directly to one of our VIP Conierge Hosts </p>
            <p>If you're on the go and would prefer digital communication please use the form below. Give us as much information as possible and we will get back to you within 12hrs.
            </p>
            <h4 class="text-center"><a href="tel:18887777777">1-(888)-777-7777</a></h4>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-6  col-lg-4 col-lg-offset-1 cont-form">

            <form method="post" class="contact" action="feedback.php">
              <div class="form-group">
                <label for="inputEmail1">Email</label>
                <input type="email" class="form-control" id="inputEmail1" name="inputEmail1" placeholder="jon@leaptrip.com" required>
              </div>
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" name="inputName" placeholder="jon smith" required>
              </div>
              <div class="form-group">
                <label for="inputPhone">Phone</label>
                <input type="tel" class="form-control" id="inputPhone" name="inputPhone" placeholder="(555)426-3609">
              </div>
              <div class="form-group">
                <label for="inputMessage">How can we help?</label>
                <textarea class="form-control" id="inputMessage" name="inputMessage" rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-default">Leap Now!</button>
            </form>
        </div>
    </div>
    
    </div>
   
<?php include("footer.php"); ?>
</body>
</html>
