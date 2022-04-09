<?php

session_start();

if(isset($_SESSION['email']))
{
    header("location: home.php");
    exit;
}
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$database="ca3";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
	die("error".mysqli_error($con));
}
$email = $password = "";
$err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['email'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter email + password";
    }
    else{
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, Name, Email, Passwrd FROM register WHERE Email = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_email);
    $param_email = $email;
    
    
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $name, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            session_start();
                            $_SESSION["name"] = $name;
                            $_SESSION["email"] = $email;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;
                            header("location: home.php");
                            
                        }
                    }

                }

    }
}    


}


?>