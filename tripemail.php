<?php 
$mailto = $_POST['email'];
$subject = "Thank You For Booking";

$destination = $_POST['destination'];
$name = $_POST['firstName'];
$price = $_POST['cost'];
$departure = $_POST['departure'];

$messageproper = 
"This message was sent from:\n" .
"Human Resources at Leap Trip\n" .
"------------------------------------------------------------\n" .
"Destination: ". $destination . "\n" .
"Price of trip: " . $price . "\n" .
"Departure Date: " . $departure . "\n" .
"------------------------------------------------------------\n\n" .

"\n\n------------------------------------------------------------\n" ;
  
  mail($mailto, $subject, $messageproper, "From: " . $name . " <" . $email . ">" );
  header("Location: thanks.php"); 

?>