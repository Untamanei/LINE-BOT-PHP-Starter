<?php
$access_token = '+ LtQfr5HpAMhtJuE2VBQxoXiFARCnVXn3DNE8LkmGHTruOUXcxWIxh + IOBNhy2lQ8Q / nAbQdyX + yPeOtQ / GcvQQFH122gT6Lu0eqtci22BQjA48JGV9RJ3B8Rbi34ZiHy8 + OUKms2JIlOT9hjVrAtAdB04t89 / 1O / w1cDnyilFU =';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
