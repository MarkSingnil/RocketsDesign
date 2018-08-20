<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "mark@rocketsdesign.com";
$subject = "Web Design";

mail ($to, $subject, $message, "From:" . $email );
echo "Your Message has been sent";


?>