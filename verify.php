<?php
$access_token = 'lHkGfFCCDGmvCvMzNoJNTt6d2nhB+h9VMPN/HQi3TL9Qig1fs+c+MQ9lRkZ61ptk8W1KYVJplZd1YU9TQrk9Qq7F6O0bK1Qc4CNt1rLK5smKcl2TmKY8QJMnMJ3YTGYFacmpH3A5w40cEWujXTDMdgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>