<?php
session_start();

$email=$_POST["email"];
$password=$_POST["password"];

if ($email=="admin@gmail.com" AND $password=="admin") {
    $_SESSION["email"]=$email;
    header("location:home.php");
}else{
    header("location:index.php?login_error");
}

// email : admin2@gmail.com
// password : admin

?>