 <header id="myCarousel" class="carousel slide tron"> <div class="carousel-inner"> <div class="item active"> <?php require ('mysqli_connect.php'); if ((isset($_GET['id'])) && (is_numeric($_GET['id']))){$id=$_GET['id']; $q="SELECT form_image FROM destinations WHERE destination_id=$id"; $result=mysqli_query($dbcon, $q); if ($result){$row=mysqli_fetch_array($result); echo '<div><img src="' . $row['form_image'] . '" alt="destination image"></div>'; mysqli_free_result($result);}}else{$t="SELECT form_image FROM destinations WHERE destination_id=10"; $result=mysqli_query($dbcon,$t); if($result) $row=mysqli_fetch_array($result); echo '<div><img src="' . $row['form_image'] . '" alt="destination image"></div>';}?> </div></div></header>