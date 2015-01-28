<?php $page_title="Leap Trip | Search"; ?>
<?php include("head_min.php"); ?>
<body class="search">
<?php include ("analyticstracking.php"); ?>
	
	<!-- Start of NavBar -->
<?php include("navbar_min.php"); ?>
	<!-- End of NavBar -->

<?php

require ('mysqli_connect.php'); 

	if(isset($_GET['search'])){
	$info = $_GET['search'];
$q = "SELECT location_detail, title AS id FROM destinations WHERE title LIKE '%" . $info . "%' OR location_detail LIKE '%" . $info . "%'" ; 

echo $q;

$result = mysqli_query($dbcon, $q) or die ('bad query');
      if ($result){
      	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo '' . $row["location_detail"] . '';
         echo '<a href="destination.php?id=' . $row['id'] . '"><span class="btn center-block">More Info</span></a>';
     
     }
         mysqli_free_result($result);
	
	}
}
	else{
	echo "<h1> Sorry but your search result returned 0 items<h1>";
	}
?>
 	    <!-- Start of Footer -->
<?php include("footer_min.php"); ?>
	<!-- End of Footer -->
</body>
</html