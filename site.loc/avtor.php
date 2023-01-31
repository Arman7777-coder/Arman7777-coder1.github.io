<?php
session_start();
require_once('connect.php');

$login = $_POST ["login"];
$password =md5($_POST["password"]);

$connect=mysqli_connect('localhost','root','','site.db');
if (!$connect) {
    die("Error connect to database");
}
$conn = new mysqli('localhost','root','','site.db');
$check_user = mysqli_query($connect,"SELECT * FROM `users` WHERE `email` = '$login' AND `password` = '$password'");
$sql = "SELECT * FROM `users` WHERE `email` = '$login'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Email exists in the database
    echo "This email already exists in our database.";
} else {
    // Email does not exist in the database

    if (mysqli_num_rows($check_user) > 0 && $login > 0 && $password > 0) {
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "email" => $user['email'],
            "name" => $user['name']
        ];
        header('Location:auto.php');

    } else {
        echo "Login or password error";


    }
}
$conn->close();
?>