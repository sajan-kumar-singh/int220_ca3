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
$errors = array();
if (isset($_POST['submit'])) {
  $username = $_POST['name'];
  $email = $_POST['email'];
  $paswrd = $_POST['password'];
  
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($paswrd)) { array_push($errors, "Password is required"); }
  
 
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  array_push($errors, "Invalid Email");
}

if(count($errors)==0){
  $param_password = password_hash($paswrd, PASSWORD_DEFAULT);
	$query = "INSERT INTO register (Name, Email, Passwrd) 
  			  VALUES('$username', '$email', '$param_password')";
  	
  if(mysqli_query($con,$query)){
	    $toemail=$email;
		$subject = "Confirmation mail";
		$body = "Hi $username , This mail is confirmation to tell you that you're registered in Gamezone";
		$headers = "From: saajan.199923@gmail.com";

if (mail($toemail, $subject, $body, $headers)) {
    header("location: index.php");
} else {
    echo "Email sending failed...";
}
  }
  else{
	  echo "error".mysqli_error($con);
  }
}
else{
	echo "Registration unsuccessful<br>Errors are:-<br><br>";
	foreach($errors as $error){
    echo $error;
	echo "<br>";
}
}
  mysqli_close($con);
}

?>
