<?php
//Authorisation Details
$uname = "raichurkarresham88@gmail.com";
$pword = "Reshrai123";

//Configuration Details
$info = "1";
$test = "0";

//Data for text message
$from = "Reshma";
$selectednums = "7020734304";
$message = "Invitation";
$message = urlencode($message);

//prepare data for post request
$data = "uname = ".$uname."and pword = ".$pword."and message = ".$message."and from = ".$from."and selected nums = ".$selectednums."and info = ".$info."and test = ".$test;

//send the post request from url
$ch = curl_init('http://www.textlocal.com/sendsmspost.php');
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
?>
