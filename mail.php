<?php
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

//filters out bad emails
if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="$name - \n$message";
    $recipient = "oldworldstoneworks@gmail.com";
    $subject = "Potential clients";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    header("Location: https://www.oldworldstoneworks.com/#contact");
    exit;
}

?>