<?php 
$mailto = $_POST['email'];
$subject = "Thank You For Booking";

$destination = $_POST['destination'];
$departure = $_POST['departure'];
$price = $_POST['cost'];
$email = "chrisclear22@gmail.com";

$messageproper = 
"This message was sent from:\n" .
"Human Resources at Leap Trip\n" .
"------------------------------------------------------------\n" .
"Destination: ". $destination . "\n" .
"Price: " . $price . "\n" .
"Departure: " . $departure . " \n" .
"------------------------------------------------------------\n\n" .
"Thank you for Leaping into Luxury.\n" .
"Your payment is being processed and your trip itinerary will be mailed to your address in 3-5 business days. \n" .
"\n\n------------------------------------------------------------\n" ;
  
  mail($mailto, $subject, $messageproper, "From: " . "Leap Trip" . " <" . $email . ">" );
  header("Location: thanks.php"); 

?>