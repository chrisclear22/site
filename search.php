<?php $page_title="Leap Trip | Search"; ?>
<?php include("head.php"); ?>
<body class="search">
<?php include ("analyticstracking.php"); ?>
	
	<!-- Start of NavBar -->
<?php include("navbar.php"); ?>
	<!-- End of NavBar -->

<?php

require ('mysqli_connect.php'); 

	if(isset($_GET['search'])){
	$info = $_GET['search'];
$q = "SELECT location_detail, destination_id AS id FROM destinations WHERE title LIKE '%" . $info . "%' OR location_detail LIKE '%" . $info . "%'" AND > 10; 

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
	echo "<p> Sorry but your search result returned 0 items<p>";
	}
?>
 	    <!-- Start of Footer -->
<?php include("footer.php"); ?>
	<!-- End of Footer -->
</body>
</html