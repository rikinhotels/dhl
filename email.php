<?php
if (isset($_REQUEST['name']) || isset($_REQUEST['email']) || isset($_REQUEST['subject']) || isset($_REQUEST['comments']) )
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $name = $_REQUEST['name'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['comments'] ;
  mail("contact@grandhotelsandresorts.in", "Webform : " . $subject,
  "Name : " . $name . ". <br/> Email : " . $email . "<br/> Subject: " . $subject . " <br/> Message : " .  $message, "From:" . "contact@grandhotelsandresorts.in");
  echo "Your Message Has been sent!";
  }
?>