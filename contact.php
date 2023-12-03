<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "yashasravi03@gmail.com";
$subject = "Mail from visitor";
$txt = "Name: " .$name. "\r\n Email: " .$email. "\r\n Message: " .$message;
$header = "From: contact@rarewolf";

if($email!=null){
    mail($to,$subject,$txt,$header);
}

?>