<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/full-slider.css">
   <link rel="stylesheet" type="text/css" href="css/custom.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Start of NavBar -->
  <?php include("navbar.php"); ?>
        <!-- End of NavBar -->
    <div class="container top_container">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-med-9 col-lg-9">
                <div class="hero-unit">
                <img src="_images/bora_bora.jpg">
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-med-3 col-med-3">
                <form action="">
                    <div class="container">
                        <div class="col-xs-12" style="height:75px;">
                           <div class='col-sm-2'>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker9'>
                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-2'>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker10'>
                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-2">
                            <select class="form-control">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                            <h2>number of passengers</h2>
                            <button>Book!</button>
                        </div>
                        <script type="text/javascript">
        $(function () {
            $('#datetimepicker9').datetimepicker();
            $('#datetimepicker10').datetimepicker();
            $("#datetimepicker9").on("dp.change",function (e) {
               $('#datetimepicker10').data("DateTimePicker").setMinDate(e.date);
            });
            $("#datetimepicker10").on("dp.change",function (e) {
               $('#datetimepicker9').data("DateTimePicker").setMaxDate(e.date);
            });
        });
    </script>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <h1>Bora Bora</h1>
                <p>About destination describing the location and telling about the travel options and included activities................................."Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <h2>Current Weather</h2>
                <ul>
                    <li>timer</li>
                    <li>price</li>
                    <li>
                        <button>Book Now</button>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <map name=""></map>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"></div>

                <h2>What's Included</h2>
                <ul>
                    <li>Roundtrip Airfare</li>
                    <li>Four Seasons Resort Bora Bora</li>
                    <ul>THE HOLISTIC SPA</ul>

                    <ul>THE FITNESS CENTRE</ul>

                    <ul>INFINITY POOL</ul>

                    <ul>TENNIS</ul>
                    <ul>ANDEM TREATMENTS</ul>
                </ul>
                <li>Transportation to and from airport as well as local transportation of your choice!</li>
                <li>Activity 1</li>
                <li>Activity 2</li>
                <li>Activity 3</li>
                </ul>
            </div>
        <div class="row">
            <div class="col-xs-12">
                    <?php
                      $json_string = file_get_contents("http://api.wunderground.com/api/df523ab79a6d3d46/geolookup/conditions/q/OK/Oklahoma_City.json");
                      $parsed_json = json_decode($json_string);
                      $location = $parsed_json->{'location'}->{'city'};
                      $temp_f = $parsed_json->{'current_observation'}->{'temp_f'};
                      echo "Current temperature in ${location} is: ${temp_f}\n";
                    ?>

                    <div class="weatherInfo infographicWidget">
                    <div class="weatherUnits">
                    <span data-unit="F" class="selected" onclick="ta.call(&#39;ta.servlet.Tourism.toggleWeatherUnit&#39;, event, this, &#39;F&#39;)">F°</span> |
                    <span data-unit="C" onclick="ta.call(&#39;ta.servlet.Tourism.toggleWeatherUnit&#39;, event, this, &#39;C&#39;)">C°</span>
                    </div>
                    <div class="weatherTitle">
                    Local Weather </div>
                    <div class="poweredBy">Powered by <span class="taLnk" onclick="ta.util.ASDF.asdfPopup(&#39;Lzl&#39;)">Weather Underground</span></div>
                    <div class="weatherMonths wrap">
                    <div class="weatherMonth">
                    <div class="temps wrap ">
                    <span class="high">80°</span>
                    <span class="low">69°</span>
                    </div>
                    <div class="temps wrap hidden">
                    <span class="high">26°</span>
                    <span class="low">20°</span>
                    </div>
                    <div class="month">December</div>
                    </div>
                    <div class="weatherMonth">
                    <div class="temps wrap ">
                    <span class="high">80°</span>
                    <span class="low">68°</span>
                    </div>
                    <div class="temps wrap hidden">
                    <span class="high">26°</span>
                    <span class="low">20°</span>
                    </div>
                    <div class="month">January</div>
                    </div>
                    <div class="weatherMonth">
                    <div class="temps wrap ">
                    <span class="high">81°</span>
                    <span class="low">68°</span>
                    </div>
                    <div class="temps wrap hidden">
                    <span class="high">27°</span>
                    <span class="low">20°</span>
                    </div>
                    <div class="month">February</div>
                    </div>
                    <div class="weatherMonth">
                    <div class="temps wrap ">
                    <span class="high">83°</span>
                    <span class="low">70°</span>
                    </div>
                    <div class="temps wrap hidden">
                    <span class="high">28°</span>
                    <span class="low">21°</span>
                    </div>
                    <div class="month">March</div>
                    </div>
                    </div>
                    </div>



                </div>
            </div>
            <div class="row">
                <footer></footer>
            </div>
        </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>

    
</body>

</html>







