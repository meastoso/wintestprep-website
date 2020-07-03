<?php

  // here are the variables mapped to form inputs
  $visitor_email = $_POST['subscriberEmail'];
  
  $email_from = 'webadmin@wintestprep.com';
 
  $email_subject = "Newsletter Subscription! $visitor_email";
 
  $email_body = "The following user would like to receive additional new information from WinTestPrep regarding future classes:\n\n".
                            "\t $visitor_email";

  $to = "wintestprep@gmail.com";
 
  $headers = "From: $email_from \r\n";
 
  $headers .= "Reply-To: admin \r\n";
 
  mail($to,$email_subject,$email_body,$headers);
  
  header("Location:http://www.andypapas.com/wintestprep/subscriptionComplete.html");
 
 ?>
