<?php
session_start();




?>
<html>
<h1>Your Email :<?=$_SESSION['user']['email']?></h1>
<h1 id="111">Your Name :<?=$_SESSION['user']['name']?></h1>
<a href="logout.php" class="logout">Log Out</a>

<style>
    a{
        margin-left: 25%;
        margin-right: auto;

        color: #231761;
    }
    h1{
        margin-left: 25%;
        margin-right: auto;
        margin-top: 100px;
        color: #231761;
    }
    #111{
        margin-left: 25%;
        margin-right: auto;

        color: #231761;
    }
</style>
</html>

