<?php
$access_token = '+LtQfr5HpAMhtJuE2VBQxoXiFARCnVXn3DNE8LkmGHTruOUXcxWIxh+IOBNhy2lQ8Q/nAbQdyX+yPeOtQ/GcvQQFH122gT6Lu0eqtci22BQjA48JGV9RJ3B8Rbi34ZiHy8+OUKms2JIlOT9hjVrAtAdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);

$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";

// Validate parsed JSON data
	if($arrJson['events'][0]['message']['text'] == "สวัสดี"){
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "text";
	  $arrPostData['messages'][0]['text'] = "สวัสดี ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
	}else if($arrJson['events'][0]['message']['text'] == "ชื่ออะไร"){
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "text";
	  $arrPostData['messages'][0]['text'] = "ฉันยังไม่มีชื่อนะ";
	}else if($arrJson['events'][0]['message']['text'] == "ทำอะไรได้บ้าง"){
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "text";
	  $arrPostData['messages'][0]['text'] = "ฉันทำอะไรไม่ได้เลย คุณต้องสอนฉันอีกเยอะ";
	}else{
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "text";
	  $arrPostData['messages'][0]['text'] = "ฉันไม่เข้าใจคำสั่ง";
	}
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);
