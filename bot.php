<?php
 
$strAccessToken = "+LtQfr5HpAMhtJuE2VBQxoXiFARCnVXn3DNE8LkmGHTruOUXcxWIxh+IOBNhy2lQ8Q/nAbQdyX+yPeOtQ/GcvQQFH122gT6Lu0eqtci22BQjA48JGV9RJ3B8Rbi34ZiHy8+OUKms2JIlOT9hjVrAtAdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
 else if($arrJson['events'][0]['message']['text'] == "Wi LPG"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "1.ตรวจเช็คการเดินเครื่องเสร็จ\n2.แหล่งจ่ายไฟฟ้า : ตรวจเช็ค Power Lamp\n3.เช็คอุณหภูมิน้ำ : ประมาณ 60-65 oC ใช้เวลาประมาณ 30 -40 นาที\n4.เปิดวาล์วทางเข้าหม้อต้มแก๊ส : เปิดช้า ๆ (ในกรณีรีบเปิดอุปกรณ์ปิดกั้นจะทำงาน)\n5.เช็คเกจวัดความดันหม้อต้มแก๊ส : เปรียบเทียบกับความดันของภาชนะและถังเก็บ\n6.เปิดวาล์วทางออกหม้อต้มแก๊ส : เปิดช้า ๆ (ในกรณีรีบเปิด อุปกรณ์ปิดกั้นจะทำงาน)\n7.ใช้แก๊ส";
  }


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>
