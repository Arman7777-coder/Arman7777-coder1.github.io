<?php
$name = $_POST['firstname'];
$county = $_POST['country'];
$email = trim($_POST['email']);
$sub = $_POST['subject'];

$to = "asatryanarman913@gmail.com";
$massage = htmlspecialchars($sub);
$massage1 = urldecode($massage);
$message2 = trim($massage1);

$headers = "From:$email" . "/r/n" . 
"Reply-to:$email" . "/r/n" .
"X-Mailer: PHP/" . phpversion();
if (mail($to,$massage,$headers)) {
    echo "gnac";
}else {
    echo "chgnac";
}


?>