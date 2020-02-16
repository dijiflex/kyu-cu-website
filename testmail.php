

<?php

require '/user/includes/mailer.php';
$subject= "WELCOME";
$to = "dijiflex@gmail.com";
$message = "YOU ARE GREAT";

sendmail($to,$subject,$message);