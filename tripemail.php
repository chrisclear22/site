<?php 
$mailto = $_POST['email'];
$subject = "Thank You For Booking";

$destination = $_POST['destination'];
<<<<<<< Updated upstream
$name = $_POST['firstName'];
$price = $_POST['cost'];
$departure = $_POST['departure'];

=======
$departure = $_POST['departure'];
$name = $_POST['firstName'];
$price = $_POST['cost'];
$email = $_POST['email'];
>>>>>>> Stashed changes
$messageproper = 
"This message was sent from:\n" .
"Human Resources at Leap Trip\n" .
"------------------------------------------------------------\n" .
"Destination: ". $destination . "\n" .
<<<<<<< Updated upstream
"Price of trip: " . $price . "\n" .
"Departure Date: " . $departure . "\n" .
"------------------------------------------------------------\n\n" .

=======
"Price: " . $price . "\n" .
"Departure: " . $departure . " \n" .
"------------------------------------------------------------\n\n" .
"Thank you for Leaping into Luxury.\n" .
"Your payment is being processed and your trip itinerary will be mailed to your address in 3-5 business days. \n" .
>>>>>>> Stashed changes
"\n\n------------------------------------------------------------\n" ;
  
  mail($mailto, $subject, $messageproper, "From: " . $name . " <" . $email . ">" );
  header("Location: thanks.php"); 

?>