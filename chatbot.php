<?php
function file_get_contents_curl($url)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}

function send_reply_message($url, $post_header, $post_body)
{
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}

$API_URL = 'https://api.line.me/v2/bot/message';
$ACCESS_TOKEN = 'Es3Kz8W5FIyX+e9W8QhhNvTreG4FuPaUwlTi/CCK5+g51055N5mYYzPLtcFOEfe3Mrdtvk0KNvGP3owBpYOBIE/Xq3aDuJ+w0VI/3Eelkl7/bvEz+Kv2K0pBsumqTnDpQDXTqsC7yucteBdhejsnXwdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'a35820614034732a864c1e03c76bb327';
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);
$request = file_get_contents('php://input');
$request_array = json_decode($request, true);
$message = $request_array['events'][0]['message']['text'];
foreach ($request_array['events'] as $event) {
  $reply_token = $event['replyToken'];
}
$split = explode(':',$message);
$split_prod = $split[0];
$api = file_get_contents_curl("https://e-sport.in.th/ssdev/ecom/dashboard/api/products/productBycat/$split_prod");
$dataFromApi = json_decode($api, true);
foreach ($dataFromApi['data'] as $data) {
  $prod_name[] = $data['product_name'];
  $prod_image[] = $data['image_path'];
  $prod_stock[] = $data['stock'];
  $prod_price[] = $data['price'];
}
include 'flex_message.php';

if ($message == "แสดงสินค้า") {
  $data = [
    'replyToken' => $reply_token,
    'messages' => [$category]
  ];
  $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
  $send_result = send_reply_message($API_URL . '/reply', $POST_HEADER, $post_body);
} else if ($split_prod == "25") {
  $data = [
    'replyToken' => $reply_token,
    'messages' => [$prod_fasionMen]
  ];
  $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
  $send_result = send_reply_message($API_URL . '/reply', $POST_HEADER, $post_body);
} else if ($split_prod == "26") {
  $data = [
    'replyToken' => $reply_token,
    'messages' => [$prod_fasionMen]
  ];
  $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
  $send_result = send_reply_message($API_URL . '/reply', $POST_HEADER, $post_body);
} else {
  $data = [
    'replyToken' => $reply_token,
    'messages' => $message
  ];
  $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
  $send_result = send_reply_message($API_URL . '/reply', $POST_HEADER, $post_body);
}
