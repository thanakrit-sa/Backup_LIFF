<?php
/*Get Data From POST Http Request*/
$datas = file_get_contents('php://input');
/*Decode Json From LINE Data Body*/
$deCode = json_decode($datas, true);

file_put_contents('log.txt', file_get_contents('php://input') . PHP_EOL, FILE_APPEND);

$replyToken = $deCode['events'][0]['replyToken'];
$userId = $deCode['events'][0]['source']['userId'];
$text = $deCode['events'][0]['message']['text'];

$messages = [];
$messages['replyToken'] = $replyToken;
$messages['messages'][0] =
  [
    "type" => "flex",
    "altText" => "This is a Flex Message",
    "contents" => [
      "type" => "bubble",
      "direction" => "ltr",
      "body" => [
        "type" => "box",
        "layout" => "vertical",
        "spacing" => "xxl",
        "contents" => [
          [
            "type" => "box",
            "layout" => "horizontal",
            "spacing" => "none",
            "offsetStart" => "20%",
            "width" => "150px",
            "height" => "150px",
            "backgroundColor" => "#131010FF",
            "cornerRadius" => "200px",
            "contents" => [
              [
                "type" => "image",
                "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png",
                "margin" => "none",
                "align" => "center",
                "gravity" => "center",
                "size" => "full",
                "aspectRatio" => "1:1",
                "aspectMode" => "cover",
                "backgroundColor" => "#FAF4F4FF"
              ]
            ]
          ],
          [
            "type" => "text",
            "text" => "%E0%B9%83%E0%B8%AA%E0%B9%88%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD",
            "weight" => "bold",
            "size" => "xl",
            "color" => "#050404FF",
            "align" => "center",
            "margin" => "xxl",
            "wrap" => false,
            "contents" => []
          ],
          [
            "type" => "box",
            "layout" => "vertical",
            "spacing" => "md",
            "margin" => "xxl",
            "height" => "40px",
            "backgroundColor" => "#008504FF",
            "cornerRadius" => "50px",
            "contents" => [
              [
                "type" => "text",
                "text" => "%E0%B9%83%E0%B8%AA%E0%B9%88%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B9%81%E0%B8%9A%E0%B8%99%E0%B9%80%E0%B8%99%E0%B8%AD%E0%B8%A3%E0%B9%8C",
                "weight" => "regular",
                "size" => "md",
                "color" => "#FFFFFFFF",
                "align" => "center",
                "margin" => "md",
                "contents" => []
              ]
            ]
          ],
          [
            "type" => "box",
            "layout" => "vertical",
            "margin" => "xxl",
            "contents" => [
              [
                "type" => "text",
                "text" => "%E0%B9%83%E0%B8%AA%E0%B9%88%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%81%E0%B8%AA%E0%B8%94%E0%B8%87",
                "size" => "sm",
                "gravity" => "center",
                "margin" => "none",
                "wrap" => true,
                "contents" => []
              ]
            ]
          ]
        ]
      ],
      "footer" => [
        "type" => "box",
        "layout" => "horizontal",
        "contents" => [
          [
            "type" => "button",
            "action" => [
              "type" => "uri",
              "label" => "ใส่ข้อความที่แสดง",
              "uri" => "https://linecorp.com"
            ]
          ]
        ]
      ]
    ]
  ];

$encodeJson = json_encode($messages);

$LINEDatas['url'] = "https://api.line.me/v2/bot/message/reply";
$LINEDatas['token'] = "Es3Kz8W5FIyX+e9W8QhhNvTreG4FuPaUwlTi/CCK5+g51055N5mYYzPLtcFOEfe3Mrdtvk0KNvGP3owBpYOBIE/Xq3aDuJ+w0VI/3Eelkl7/bvEz+Kv2K0pBsumqTnDpQDXTqsC7yucteBdhejsnXwdB04t89/1O/w1cDnyilFU=";

$results = sentMessage($encodeJson, $LINEDatas);

/*Return HTTP Request 200*/
http_response_code(200);

function getFormatTextMessage($text)
{
  $datas = [];
  $datas['type'] = 'text';
  $datas['text'] = $text;

  return $datas;
}

function sentMessage($encodeJson, $datas)
{
  $datasReturn = [];
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => $datas['url'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $encodeJson,
    CURLOPT_HTTPHEADER => array(
      "authorization: Bearer " . $datas['token'],
      "cache-control: no-cache",
      "content-type: application/json; charset=UTF-8",
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    $datasReturn['result'] = 'E';
    $datasReturn['message'] = $err;
  } else {
    if ($response == "{}") {
      $datasReturn['result'] = 'S';
      $datasReturn['message'] = 'Success';
    } else {
      $datasReturn['result'] = 'E';
      $datasReturn['message'] = $response;
    }
  }

  return $datasReturn;
}
