<?php $page_title="Leap Trip | Contact Info"; ?>
<?php include("head.php"); ?>
<body id="body-2">
<?php include ("analyticstracking.php"); ?>
		<!-- Start of NavBar -->
<?php include("navbar.php"); ?>
	<!-- End of NavBar -->



<div class="container top_container">
  <div class="row">
    <div class="jumbotron col-xs-12">
    
    </div>
  </div>
    <div class="row contact-sect">
        <div class="col-xs-12 cont-desc1">
            <h2 class="text-center">VIP Contact</h2>
            <p>At Leaptrip we pride ourselves on making the most luxurious destinations available at unbelievable prices. If you ever have comments questions or concerns feel free to contact us. We've provided our toll free number so that you can speak directly to one of our VIP Conierge Hosts </p>
            <p>If you're on the go and would prefer digital communication please use the form below. Give us as much information as possible and we will get back to you within 12hrs.
            </p>
            <h3 class="text-center">VIP Concierge</h3>
            <h4 class="text-center"><a href="tel:18887777777">1-(888)-777-7777</a></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 cont-img">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 cont-form">
            <h2 class="text-center">Contact</h2>
            <p>Send your comments or questions</p>
            <form method="post" class="contact" action="feedback.php">
              <div class="form-group">
                <label for="inputEmail1">Email address</label>
                <input type="email" class="form-control" id="inputEmail1" name="inputEmail1" placeholder="jon@leaptrip.com" required>
              </div>
              <div class="form-group">
                <label for="inputName">Name: First &amp; Last</label>
                <input type="text" class="form-control" id="inputName" name="inputName" placeholder="jon smith" required>
              </div>
              <div class="form-group">
                <label for="inputPhone">Phone &#35;</label>
                <input type="tel" class="form-control" id="inputPhone" name="inputPhone" placeholder="(123)456-789">
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
