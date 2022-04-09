<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$database="ca3";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
	die("error".mysqli_error($con));
}

if (isset($_POST['submit'])) {
    $toname = $_POST['name'];
    $toemail = $_POST['email'];
    $subject = $_POST['subject'];
    $tosubject = "$toname have a query.";
    $body = $_POST['body'];
    $tosendbody="We got a query from $toname on\nSubject: $subject.\nComplaint: $body.\nWe have his email ID: $toemail. Please provide him solution as soon as possible.";
    $headers = "From: saajan.199923@gmail.com";
    
    if (mail("saajan.199923@gmail.com", $tosubject, $tosendbody, $headers)) {
      echo "We got your query. We will contact you soon. Navigate back and enjoy our service. ";
  } 
  else {
      echo "Email sending failed...";
  }
  }
?>