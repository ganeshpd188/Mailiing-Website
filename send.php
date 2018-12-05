<?php
$to=$_POST['to'];
$from=$_POST['from'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$body="You have been successfully registered with us!";
$from_new="From: $from";
mail($to,$subject,$message,$from_new);
echo "Email has been sent to the mentioned email addess!";

?>
