<?php
$access_token = 'Pq835IUEPmUDrJoYyYn5h+n13WvM8jtvs91AmAhIyBkmung2/Kqlay3pJ6xejoWIDuVWkmWfSv6iMlNIiGUaNhHVQLDxkswX3tMFxo5AM65oY5b71psreTeQaGfXZkGI/Fy5X7lJHPZFElP1/tHv9AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;