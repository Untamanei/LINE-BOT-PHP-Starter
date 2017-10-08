<?php
 
$strAccessToken = "+LtQfr5HpAMhtJuE2VBQxoXiFARCnVXn3DNE8LkmGHTruOUXcxWIxh+IOBNhy2lQ8Q/nAbQdyX+yPeOtQ/GcvQQFH122gT6Lu0eqtci22BQjA48JGV9RJ3B8Rbi34ZiHy8+OUKms2JIlOT9hjVrAtAdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
if($arrJson['events'][0]['message']['text'] == "wi"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "https://drive.google.com/open?id=0B-XvT8qgmPvjekU2akhhaFhYZDg";
  }

  else if($arrJson['events'][0]['message']['text'] == "pid"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  //$arrPostData['messages'][0]['type'] = "image";
  //$arrPostData['messages'][0]['originalContentUrl'] = "https://www.uppic.org/thumb-8FD2_59DA4617.jpg";
  //$arrPostData['messages'][0]['previewImageUrl'] = "https://www.uppic.org/thumb-8FD2_59DA4617.jpg";
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "https://drive.google.com/open?id=0B-XvT8qgmPvjU0lHcURybjV5RG8"; 
  }

  else if($arrJson['events'][0]['message']['text'] == "spec FL101"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "Description\n============\n\nOperating Pressure : 4000 psi\nInstall date : 12/2016\nCallibrate : -";
  }

  else if($arrJson['events'][0]['message']['text'] == "spec PI102"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "Description\n============\n\nOperating Pressure : 4000 psi\nInstall date : 12/2016\nCallibrate : -";
  }

  else if($arrJson['events'][0]['message']['text'] == "spec BV103"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
 $arrPostData['messages'][0]['text'] = "Description\n============\n\nOperating Pressure : 4000 psi\nInstall date : 12/2016\nCallibrate : -";
  }  

  else if($arrJson['events'][0]['message']['text'] == "spec PCV104"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "Description\n================\nVaporizing Regulator\nMaximum Inlet : 3500 psig\nPressure Control Range : 500 psi\nHeater : 200 W\nPower : 240 V\nTemperature Controller 104-193 oC\nCv : 0.06\n--------------\nInstall date : 12/2016\n--------------\nCallibrate : -";
  }

  else if($arrJson['events'][0]['message']['text'] == "spec PI105"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "Description\n============\n\nOperating Pressure : 4000 psi\nInstall date : 12/2016\nCallibrate : -";
  }

  else if($arrJson['events'][0]['message']['text'] == "spec CV106"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "Description\n============\n\nOperating Pressure : 4000 psi\nInstall date : 12/2016\nCallibrate : -";
  }

  else if($arrJson['events'][0]['message']['text'] == "spec PCV115"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "Description\n============\n\nOperating Pressure : 4000 psi\nInstall date : 12/2016\nCallibrate : -";
  }

  else if($arrJson['events'][0]['message']['text'] == "spec BV116"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "Description\n============\n\nOperating Pressure : 4000 psi\nInstall date : 12/2016\nCallibrate : -";
  }

  else if($arrJson['events'][0]['message']['text'] == "spec PSV118"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "Description\n============\n\nOperating Pressure : 4000 psi\nInstall date : 12/2016\nCallibrate : -";
  }

  else if($arrJson['events'][0]['message']['text'] == "stock FL101"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "0 ea.";
  }

  else if($arrJson['events'][0]['message']['text'] == "stock PI102"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "0 ea.";
  }

  else if($arrJson['events'][0]['message']['text'] == "stock BV103"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "0 ea.";
  }

  else if($arrJson['events'][0]['message']['text'] == "stock PCV104"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "0 ea.";
  }

  else if($arrJson['events'][0]['message']['text'] == "stock PI105"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "0 ea.";
  }

  else if($arrJson['events'][0]['message']['text'] == "stock CV106"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "0 ea.";
  }

  else if($arrJson['events'][0]['message']['text'] == "stock PCV115"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "0 ea.";
  }

  else if($arrJson['events'][0]['message']['text'] == "stock BV116"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "0 ea.";
  }

  else if($arrJson['events'][0]['message']['text'] == "stock PSV118"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "0 ea.";
  }

  else if($arrJson['events'][0]['message']['text'] == "buy FL101"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "PN : \nLead Time : 3-4 weeks\nCost : 2500 Baht\nBrand : \nSupplier : Fint Fluid\n\nSale\n---------\nSipakorn\nsippakorn@fintfluid.com\n0894444564";
  }

  else if($arrJson['events'][0]['message']['text'] == "buy PI102"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "PN : \nLead Time : 3-4 weeks\nCost : 2500 Baht\nBrand : \nSupplier : Fint Fluid\n\nSale\n---------\nSipakorn\nsippakorn@fintfluid.com\n0894444564";
  }

  else if($arrJson['events'][0]['message']['text'] == "buy BV103"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "PN : \nLead Time : 3-4 weeks\nCost : 2500 Baht\nBrand : \nSupplier : Fint Fluid\n\nSale\n---------\nSipakorn\nsippakorn@fintfluid.com\n0894444564";
  }

  else if($arrJson['events'][0]['message']['text'] == "buy PCV104"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "PN : AVR4SP5240EHX\nBrand : Parker\nLead Time : 10-12 weeks\nCost : 59,300 Baht\nSupplier : Fint Fluid\n\nSaleperson\n-------------\nSippakorn\nE-mail : sippakorn@fintfluid.com\nTel : 0894444564";
  }

  else if($arrJson['events'][0]['message']['text'] == "buy PI105"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "PN : \nLead Time : 3-4 weeks\nCost : 2500 Baht\nBrand : \nSupplier : Fint Fluid\n\nSale\n---------\nSipakorn\nsippakorn@fintfluid.com\n0894444564";
  }

  else if($arrJson['events'][0]['message']['text'] == "buy CV106"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "PN : \nLead Time : 3-4 weeks\nCost : 2500 Baht\nBrand : \nSupplier : Fint Fluid\n\nSale\n---------\nSipakorn\nsippakorn@fintfluid.com\n0894444564";
  }

  else if($arrJson['events'][0]['message']['text'] == "buy PCV115"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "PN : \nLead Time : 3-4 weeks\nCost : 2500 Baht\nBrand : \nSupplier : Fint Fluid\n\nSale\n---------\nSipakorn\nsippakorn@fintfluid.com\n0894444564";
  }

  else if($arrJson['events'][0]['message']['text'] == "buy BV116"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "PN : \nLead Time : 3-4 weeks\nCost : 2500 Baht\nBrand : \nSupplier : Fint Fluid\n\nSale\n---------\nSipakorn\nsippakorn@fintfluid.com\n0894444564";
  }

  else if($arrJson['events'][0]['message']['text'] == "buy PSV118"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "PN : \nLead Time : 3-4 weeks\nCost : 2500 Baht\nBrand : \nSupplier : Fint Fluid\n\nSale\n---------\nSipakorn\nsippakorn@fintfluid.com\n0894444564";
  }

  else if($arrJson['events'][0]['message']['text'] == "help"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "wi = work instruction\npid = piping and instrument diagram\nspec = รายละเอียดอุปกรณ์\nstock = ตรวจเช็คจำนวอุปกรณ์\nbuy = สั่งซื้ออุปกรณ์";  
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
