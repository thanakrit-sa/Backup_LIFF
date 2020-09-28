<?php
$datas = file_get_contents('php://input');
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
      "body" => [
        "type" => "box",
        "layout" => "vertical",
        "contents" => [
          [
            "type" => "box",
            "layout" => "vertical",
            "contents" => [
              [
                "type" => "image",
                "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/flexsnapshot/clip/clip1.jpg",
                "size" => "full",
                "aspectMode" => "cover"
              ]
            ],
            "cornerRadius" => "200px",
            "width" => "150px",
            "height" => "150px",
            "offsetStart" => "55px"
          ],
          [
            "type" => "box",
            "layout" => "vertical",
            "contents" => [
              [
                "type" => "text",
                "text" => "ใส่ชื่อ",
                "size" => "lg",
                "weight" => "bold",
                "wrap" => true,
                "align" => "center"
              ]
            ],
            "paddingTop" => "20px"
          ],
          [
            "type" => "box",
            "layout" => "vertical",
            "contents" => [
              [
                "type" => "text",
                "text" => "ใส่ข้อความแบนเนอร์",
                "color" => "#ffffff",
                "align" => "center",
                "wrap" => true,
                "offsetTop" => "5px"
              ]
            ],
            "backgroundColor" => "#117302",
            "cornerRadius" => "80px",
            "margin" => "lg",
            "width" => "200px",
            "height" => "30px",
            "offsetStart" => "30px"
          ],
          [
            "type" => "box",
            "layout" => "vertical",
            "contents" => [
              [
                "type" => "text",
                "text" => "ใส่ข้อความแบนเนอร์",
                "color" => "#ffffff",
                "align" => "center",
                "wrap" => true,
                "offsetTop" => "5px"
              ]
            ],
            "backgroundColor" => "#117302",
            "cornerRadius" => "80px",
            "margin" => "lg",
            "width" => "200px",
            "height" => "30px",
            "offsetStart" => "30px"
          ],
          [
            "type" => "box",
            "layout" => "vertical",
            "contents" => [
              [
                "type" => "text",
                "text" => "ใส่ข้อความแบนเนอร์",
                "color" => "#ffffff",
                "align" => "center",
                "wrap" => true,
                "offsetTop" => "5px"
              ]
            ],
            "backgroundColor" => "#117302",
            "cornerRadius" => "80px",
            "margin" => "lg",
            "width" => "200px",
            "height" => "30px",
            "offsetStart" => "30px"
          ],
          [
            "type" => "box",
            "layout" => "vertical",
            "contents" => [
              [
                "type" => "text",
                "text" => "ใส่คำอธิบาย"
              ]
            ],
            "paddingTop" => "20px",
            "paddingBottom" => "20px"
          ]
        ],
        "offsetTop" => "20px",
        "margin" => "lg"
      ],
      "footer" => [
        "type" => "box",
        "layout" => "vertical",
        "spacing" => "sm",
        "contents" => [
          [
            "type" => "button",
            "style" => "link",
            "height" => "sm",
            "action" => [
              "type" => "uri",
              "label" => "ใส่ข้อความที่แสดง",
              "uri" => "https://linecorp.com"
            ]
          ],
          [
            "type" => "button",
            "style" => "link",
            "height" => "sm",
            "action" => [
              "type" => "uri",
              "label" => "ใส่ข้อความที่แสดง",
              "uri" => "https://linecorp.com"
            ]
          ],
          [
            "type" => "button",
            "style" => "link",
            "height" => "sm",
            "action" => [
              "type" => "uri",
              "label" => "ใส่ข้อความที่แสดง",
              "uri" => "https://linecorp.com"
            ]
          ],
          [
            "type" => "spacer",
            "size" => "sm"
          ]
        ],
        "flex" => 0
      ]
    ]
  ];

$encodeJson = json_encode($messages);

$LINEDatas['url'] = "https://api.line.me/v2/bot/message/reply";
$LINEDatas['token'] = "Es3Kz8W5FIyX+e9W8QhhNvTreG4FuPaUwlTi/CCK5+g51055N5mYYzPLtcFOEfe3Mrdtvk0KNvGP3owBpYOBIE/Xq3aDuJ+w0VI/3Eelkl7/bvEz+Kv2K0pBsumqTnDpQDXTqsC7yucteBdhejsnXwdB04t89/1O/w1cDnyilFU=";

$results = sentMessage($encodeJson, $LINEDatas);

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
