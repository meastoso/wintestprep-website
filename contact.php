<?php

  // here are the variables mapped to form inputs
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $email_from = 'webadmin@wintestprep.com';
  $email_subject = "New Contact Message from: $name";
 
  $email_body = "Hello Roberta!\n\nSomeone sent you a message using the WinTestPrep Contact page. here is the message information:\n\n".
	  "Contact's Name: $name\n".
	  "Contact's email: $email\n".
	  "Contact's Phone Number: $phone\n\n".
	  "Message:\n\n$message";

  $to = "wintestprep@gmail.com";
 
  $headers = "From: $email_from \r\n";
 
  $headers .= "Reply-To: admin \r\n";
 
  mail($to,$email_subject,$email_body,$headers);
  
  header("Location:http://www.andypapas.com/wintestprep/contactComplete.html");
 
 ?>
