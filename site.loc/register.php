<?php
session_start();
require('connect.php');


$email = $_POST ["email"];
$username = $_POST ["username"];
$pass =md5( $_POST ["pass1"]);
$pass_confirm =md5( $_POST ["pass2"]);


//$email > 0 && $username > 0 && $pass > 0 &&


if ($email > 0 && $username > 0 && $pass > 0 && $pass===$pass_confirm) {
    //continue
   echo "$email";
  
 mysqli_query($connect,"INSERT INTO `users` (`id`, `name`, `login`, `password`, `email`) VALUES (NULL, '$username', '$pass_confirm', '$pass', '$email')");
    header('Location:login.php');

} else {
   echo "Password or Form Error!";
}



?>