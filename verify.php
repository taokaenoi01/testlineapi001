<?php
$access_token = 'sRhpDiNZWojwzBZcwEfNrK5sqVGQoA2Hy/HB6Rg9unwbQC6y+vzkLAA3UIMk2C7qDlEno8pGOaZ1bti9wlcLrIWsYwh5P0m9ClZ9wv1ZUefWChYBhVLlMF2OHBbIDUVZ0BSqyXqiUT37HTI4WXbxqgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/oauth2/v2.1/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
