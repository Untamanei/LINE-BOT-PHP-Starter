$post = file_get_contents(‘php://input’);
$urlReply = ‘https://api.line.me/v2/bot/message/reply';
$token = ‘qkemiHYLq1Go2vUvCixhJFKeTfxGgxd57LkiruFfPV58idgTkUbL7Tn7HUtluFRI8Q/nAbQdyX+yPeOtQ/GcvQQFH122gT6Lu0eqtci22BQ2/doT8zSakFQ7jLIfeakP0NGR6NLOqMZPM+y71siy6wdB04t89/1O/w1cDnyilFU=’;

{“events”:[{“type”:”message”,”replyToken”:”ไม่บอก”,”source”:{“userId”:”ไม่บอก”,”type”:”user”},”timestamp”:1477132643802,”message”:{“type”:”text”,”id”:”5094630491076",”text”:”ว่าไงท่าน”}}]}

function getSticker($replyToken){
 $sticker = array(
 ‘type’ => ‘sticker’,
 ‘packageId’ => ‘4’,
 ‘stickerId’ => ‘300’
 );
 $packet = array(
 ‘replyToken’ => $replyToken,
 ‘messages’ => array($sticker),
 );
 return $packet;
}

$res = json_decode($post, true);
if(isset($res[‘events’]) && !is_null($res[‘events’])){
 foreach($res[‘events’] as $item){
 if($item[‘type’] == ‘message’){
 switch($item[‘message’][‘type’]){
 case ‘text’:
break;
case ‘image’:
break;
 case ‘video’:
 
 break;
 case ‘audio’:
 
 break;
 case ‘location’:
break;
 case ‘sticker’:

 break;
}

$packet = getSticker($item[‘replyToken’]);
 postMessage($token,$packet,$urlReply);

function postMessage($token,$packet,$urlReply){
 $dataEncode = json_encode($packet);
 $headersOption = array(‘Content-Type: application/json’,’Authorization: Bearer ‘.$token);
 $ch = curl_init($urlReply);
 curl_setopt($ch,CURLOPT_CUSTOMREQUEST,’POST’);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 curl_setopt($ch,CURLOPT_POSTFIELDS,$dataEncode);
 curl_setopt($ch,CURLOPT_HTTPHEADER,$headersOption);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
 $result = curl_exec($ch);
 curl_close($ch);
}

