<?php
$access_token = 'adI7TFsrfiwJAdmuyZ5+ol9amRpnBjd2gsxJRJqzeKX+Ae9949j2LUGmELOXtnDjeYpkC4tRe0URTYE67IBPzfc+hMfQmh6DWk6760zDjt7r4nE3gZf0dSY47D5xGa39NGt89NNtTNbSvofHfhzHII9PbdgDzCFqoOLOYbqAITQ=';

$url = 'https://api.line.me/oauth2/v2.1/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
