<?php
$access_token = '1Txww16BXk+kyC47w9dWkFEKG8rwpXrKnKymlIHuiIdXa23eelwUuo8J0Toph3r8DlEno8pGOaZ1bti9wlcLrIWsYwh5P0m9ClZ9wv1ZUeeUUAgyUGqFpV72ahEbnQ7u9xEQtfr7QE/Ijp0FklRoRY9PbdgDzCFqoOLOYbqAITQ=';

$url = 'https://api.line.me/oauth2/v2.1/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
