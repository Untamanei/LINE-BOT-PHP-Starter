<?php
$access_token = '+ Gf4J + t / MWxhEzJ4TGKPbyHJyfrCEnU9mqqbhyyi5mwyfamkVgpzQyn4 + igBZ5hO8Q / nAbQdyX + yPeOtQ / GcvQQFH122gT6Lu0eqtci22BSk / O4C26pSWo4X0t2xtfEZaUXoSKSfuVQ87Y / AFa6esAdB04t89 / 1O / w1cDnyilFU =';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
