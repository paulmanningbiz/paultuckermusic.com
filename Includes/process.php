<?php
  $email      = $_REQUEST['Email'] ;
  $phone      = $_REQUEST['Phone'];
  $subject    = "Contact Me";
  $message    = $_REQUEST['Message'] ;
  $name       = $_REQUEST['Name'] ;
  
  $to         = "paulmanning@outlook.com";
  $headers    = "From: $email \r\n";
  $headers   .= "Cc: unospark@outlook.come \r\n";
  
  $email_body = "Full Name     \n" .
  		"$name       \n\n" .
                "Email Adress  \n" . 
                "$email      \n\n" .  
                "Phone Number: \n" .
                "$phone      \n\n" .
                "$address2   \n\n" . 
                "Message:      \n" .
                "$message";
 
  mail($to,$subject,$email_body,$headers);


?>
