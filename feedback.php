<?php 
$mailto = "chrisclear22@gmail.com";
$subject = "Thank You For Testing";

$email = $_POST['inputEmail1'];
$name = $_POST['inputName'];
$phone = $_POST['inputPhone'];
$comment = $_POST['inputMessage'];

$messageproper = 
"This message was sent from:\n" .
"Human Resources at Leap Trip\n" .
"------------------------------------------------------------\n" .
"Name of Sender:". $name . "\n" .
"Email of Sender:" . $email . "\n" .
"Phone Number:" . $phone . "\n" .
"------------------------------------------------------------\n\n" .
" " . $comment . "  " .
"\n\n------------------------------------------------------------\n" ;
  
  mail($mailto, $subject, $messageproper, "From: " . $name . " <" . $email . ">" );
  header("Location: index.php"); 

?>