<?php
 
$strAccessToken = "+LtQfr5HpAMhtJuE2VBQxoXiFARCnVXn3DNE8LkmGHTruOUXcxWIxh+IOBNhy2lQ8Q/nAbQdyX+yPeOtQ/GcvQQFH122gT6Lu0eqtci22BQjA48JGV9RJ3B8Rbi34ZiHy8+OUKms2JIlOT9hjVrAtAdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
if($arrJson['events'][0]['message']['text'] == "WI PRU"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "1.นำสาย Flexible Hose มาต่อเข้ากับหัว Quick Connect\n2.นำสายก๊าซมาต่อเข้ากับหัว Quick Connect ที่นำไปใช้งาน\n3.เปิดวาล์วก่อน Vaporizing Regulator ช้า ๆ เพื่อไม่ให้เกิดความเสียหาย\n4.ปรับแรงดัน High Flow Regulator ตามการใช้งาน\n5.เปิดวาล์วหลัง High Flow Regulator\n6.เปิดสวิทซ์ Heater และ Mass Flow Meter\n7.เปิดวาล์วก๊าซนำไปใช้งาน\n8.เมื่อใช้งานเสร็จปิดวาล์วและ Vent ก๊าซออกระบบให้หมด";
  }

  else if($arrJson['events'][0]['message']['text'] == "WI LPGAir"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "1.ตรวจเช็คการเดินเครื่องเสร็จ\n2.แหล่งจ่ายไฟฟ้า : ตรวจเช็ค Power Lamp\n3.เช็คอุณหภูมิน้ำ : ประมาณ 60-65 oC ใช้เวลาประมาณ 30 -40 นาที\n4.เปิดวาล์วทางเข้าหม้อต้มแก๊ส : เปิดช้า ๆ (ในกรณีรีบเปิดอุปกรณ์ปิดกั้นจะทำงาน)\n5.เช็คเกจวัดความดันหม้อต้มแก๊ส : เปรียบเทียบกับความดันของภาชนะและถังเก็บ\n6.เปิดวาล์วทางออกหม้อต้มแก๊ส : เปิดช้า ๆ (ในกรณีรีบเปิด อุปกรณ์ปิดกั้นจะทำงาน)\n7.ใช้แก๊ส";
  }

  else if($arrJson['events'][0]['message']['text'] == "PID PRU"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  //$arrPostData['messages'][0]['originalContentUrl'] = "https://image.goosiam.com/imgupload/upload43/uNQ4LdGD2yyd.jpg";
  //$arrPostData['messages'][0]['previewImageUrl'] = "https://image.goosiam.com/imgupload/upload43/uNQ4LdGD2yyd.jpg";
  //$arrPostData['messages'][0]['type'] = "text";
  //$arrPostData['messages'][0]['text'] = "https://drive.google.com/open?id=0B-XvT8qgmPvjU0lHcURybjV5RG8";
  $arrPostData['messages'][0]['type'] = "image";
  $arrPostData['messages'][0]['originalContentUrl'] = "https://image.goosiam.com/imgupload/upload43/49FrxSRkmDsj.jpg";
  $arrPostData['messages'][0]['previewImageUrl'] = "https://image.goosiam.com/imgupload/upload43/49FrxSRkmDsj.jpg";
  }

  else if($arrJson['events'][0]['message']['text'] == "PID LPGAir"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "image";
  $arrPostData['messages'][0]['originalContentUrl'] = "https://image.goosiam.com/imgupload/upload43/TS0AptL2oFAU.jpg";
  $arrPostData['messages'][0]['previewImageUrl'] = "https://image.goosiam.com/imgupload/upload43/TS0AptL2oFAU.jpg";
  }
 
  else if($arrJson['events'][0]['message']['text'] == "spec PRU PCV104"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "Description\n================\nVaporizing Regulator\nMaximum Inlet : 3500 psig\nPressure Control Range : 500 psi\nHeater : 200 W\nPower : 240 V\nTemperature Controller 104-193 oC\nCv : 0.06\n--------------\nInstall date : 12/2016\n--------------\nCallibrate : -";
  }

  else if($arrJson['events'][0]['message']['text'] == "stock PRU PCV104"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "0 ea.";
  }

  else if($arrJson['events'][0]['message']['text'] == "buy PRU PCV104"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "PN : AVR4SP5240EHX\nBrand : Parker\nLead Time : 10-12 weeks\nCost : 59,300 Baht\nSupplier : Fint Fluid\n\nSaleperson\n-------------\nSippakorn\nE-mail : sippakorn@fintfluid.com\nTel : 0894444564";
  }

  else if($arrJson['events'][0]['message']['text'] == "help"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "นายช่างดูแลระบบ 2 ระบบ\n1.PRU\n2.LPGAir\n-----------------\nWI : work instruction\nEx. WI PRU\n\nPID = piping and instrument diagram\nEx. PID PRU\n\nspec = รายละเอียดอุปกรณ์\nEx. spec PRU PCV104\n\nstock = ตรวจเช็คจำนวอุปกรณ์\nEx. stock PRU PCV104\n\nbuy = สั่งซื้ออุปกรณ์\nEx. buy PRU PCV104";  
  }

  else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ตรวจสอบตัวสะกด\nตัวพิมพ์เล็กพิมพ์ใหญ่\nพิมพ์ help เพื่อหาคำสั่งของนายช่าง";
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
