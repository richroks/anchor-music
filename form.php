<?php

// Get values from form
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$to = "richrok88@gmail.com";
$subject = "Website Inquiry";
$message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Message: " . $message;


$from = "AnchorMusicGroupForm";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='http://primeinnovations.us/success';</script>";
  // Created by Future Tutorials
}else{
  echo "Error! Please try again.";
}



?>
