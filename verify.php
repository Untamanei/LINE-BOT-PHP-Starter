<?php
$access_token = '0gwtA8DQeYGYpJb0VnGrFr946l0W / DZNTI8qoCAbBzN2Py40QdB + KeSw012k5E4t8Q / nAbQdyX + yPeOtQ / GcvQQFH122gT6Lu0eqtci22BTZ0UFyqLSghlZlYPItjrh3Bz + MVtI4GCbdf7YncAdkmgdB04t89 / 1O / w1cDnyilFU =';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
