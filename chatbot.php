<?php

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

include 'function.php';

// $html = file_get_contents_curl("http://dummy.restapiexample.com/api/v1/employees"); #API Dummy
// $dataFromApi = json_decode($html, true);

// foreach ($dataFromApi['data'] as $data) {
//   $name[] = $data['employee_name'];
//   $cate[] = $data['employee_name'];
//   $stock[] = $data['employee_age'];
//   $price[] = $data['employee_salary'];
// }

$api = file_get_contents_curl("https://e-sport.in.th/ssdev/ecom/dashboard/api/products/");
$dataFromApi = json_decode($api, true);

foreach ($dataFromApi['data'] as $data) {
  $prod_id[] = $data['id'];
  $prod_name[] = $data['product_name'];
  $prod_image[] = $data['image_path'];
  $prod_stock[] = $data['stock'];
  $prod_price[] = $data['price'];
  $prod_address[] = $data['address'];
  $prod_cate[] = $data['category_name'];
  $prod_created_time[] = $data['created_at'];
  $prod_updated_time[] = $data['updated_at'];
}
echo $prod_id;

include 'flex_message.php';

if ($message == "แสดงสินค้า") {
  $data = [
    'replyToken' => $reply_token,
    'messages' => [$jsonFlex]
  ];
  $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
  $send_result = send_reply_message($API_URL . '/reply', $POST_HEADER, $post_body);
}
else {
  $data = [
    'replyToken' => $reply_token,
    'messages' => [$text]
  ];
  $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
  $send_result = send_reply_message($API_URL . '/reply', $POST_HEADER, $post_body);
}



