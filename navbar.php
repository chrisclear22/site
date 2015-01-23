<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a href="index.php" title="Home Page"><img src="_images/leaptrip_logo/leaptrip_logo_orange_bg_clear.png" alt="logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php" title="Home Page">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php" title="About Us">About</a></li>
        <li><a href="packages.php" title="Vacation Packages">Vacations</a></li>
        <li><a href="contact.php" title="contact">Contact Us</a></li>
      </ul>
      <form class="navbar-form navbar-right" action="search.php" method="GET" role="search">
        <div class="form-group">
        <label for="search" class="hidden"></label>
          <input type="text" id="search" name="search" class="form-control">
        </div>
        <input type="submit" class="btn btn-default nav-search-button" id="submit" name="submit">Search</input>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>