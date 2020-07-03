<?php

  // here are the variables mapped to form inputs
  $studentName = $_POST['studentName'];
  $studentDOB = $_POST['studentDOB'];
  $studentEmail = $_POST['studentEmail'];
  $studentGrade = $_POST['studentGrade'];
  $studentCell = $_POST['studentCell'];
  $parentName = $_POST['parentName'];
  $parentCell = $_POST['parentCell'];
  $parentEmail = $_POST['parentEmail'];
  $homePhone = $_POST['homePhone'];
  $street = $_POST['street'];
  $city = $_POST['city'];
  $zip = $_POST['zip'];
  $class = $_POST['class'];
  $private = $_POST['private'];

  $email_from = 'webadmin@wintestprep.com';
  $email_subject = "New Student Registration! $studentName";
 
  $email_body = "Hello Roberta!\n\nA new student has registered for WinTestPrep services! Here is their registration info:\n\n".
	  "Student Info...\n".
	  "Student Name: $studentName\n".
	  "Student Date of Birth: $studentDOB\n".
	  "Student Email: $studentEmail\n".
	  "Student Grade: $studentGrade\n".
	  "Student Cell Phone: $studentCell\n\n".
	  "Parent Info...\n".
	  "Parent Name: $parentName\n".
	  "Parent Cell Phone: $parentCell\n".
	  "Parent Email: $parentEmail\n\n".
	  "Address info...\n".
	  "Home Phone: $homePhone\n".
	  "Street: $street\n".
	  "City: $city\n".
	  "Zip Code: $zip\n".
	  "\n\nInterested in WinTestPrep Services:\n";

  if(isset($_POST['SATprep']) && $_POST['SATprep'] == 'true') 
  {
      $email_body = $email_body."SAT Critical Reading & Writing Prep Classes: YES\n";
  }
  else
  {
      $email_body = $email_body."SAT Critical Reading & Writing Prep Classes: NO\n";
  }
  if(isset($_POST['PSATprep']) && $_POST['PSATprep'] == 'true') 
  {
      $email_body = $email_body."PSAT Critical Reading & Writing Prep Classes: YES\n";
  }
  else
  {
      $email_body = $email_body."PSAT Critical Reading & Writing Prep Classes: NO\n";
  }
  if(isset($_POST['SSATprep']) && $_POST['SSATprep'] == 'true') 
  {
      $email_body = $email_body."SSAT Critical Reading & Writing Prep Classes: YES\n";
  }
  else
  {
      $email_body = $email_body."SSAT Critical Reading & Writing Prep Classes: NO\n";
  }
  if(isset($_POST['studySkills']) && $_POST['studySkills'] == 'true') 
  {
      $email_body = $email_body."Study Skills: YES\n";
  }
  else
  {
      $email_body = $email_body."Study Skills: NO\n";
  }
  if(isset($_POST['readingRemed']) && $_POST['readingRemed'] == 'true') 
  {
      $email_body = $email_body."Reading Remediation: YES\n";
  }
  else
  {
      $email_body = $email_body."Reading Remediation: NO\n";
  }
  if(isset($_POST['academicSupport']) && $_POST['academicSupport'] == 'true') 
  {
      $email_body = $email_body."Academic Support: YES\n";
  }
  else
  {
      $email_body = $email_body."Academic Support: NO\n";
  }

  $to = "wintestprep@gmail.com";
 
  $headers = "From: $email_from \r\n";
 
  $headers .= "Reply-To: admin \r\n";
 
  mail($to,$email_subject,$email_body,$headers);
  
  header("Location:http://www.andypapas.com/wintestprep/registrationComplete.html");
 
 ?>
