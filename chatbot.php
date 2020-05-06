<?php


$API_URL = 'https://api.line.me/v2/bot/message';
$ACCESS_TOKEN = 'Es3Kz8W5FIyX+e9W8QhhNvTreG4FuPaUwlTi/CCK5+g51055N5mYYzPLtcFOEfe3Mrdtvk0KNvGP3owBpYOBIE/Xq3aDuJ+w0VI/3Eelkl7/bvEz+Kv2K0pBsumqTnDpQDXTqsC7yucteBdhejsnXwdB04t89/1O/w1cDnyilFU='; 
$channelSecret = 'a35820614034732a864c1e03c76bb327';


$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);

$request = file_get_contents('php://input');   // Get request content
$request_array = json_decode($request, true);   // Decode JSON to Array
$content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);
    
    //รับข้อความจากผู้ใช้
    $message = $arrayJson['events'][0]['message']['text'];



$jsonFlex = [
    "type"=> "flex",
    "altText"=> "Flex Message",
    "contents"=> [
      "type"=> "carousel",
      "contents"=> [
        [
          "type"=> "bubble",
          "hero"=> [
            "type"=> "image",
            "url"=> "",
            "size"=> "full",
            "aspectRatio"=> "20:13",
            "aspectMode"=> "cover"
      ],
          "body"=> [
            "type"=> "box",
            "layout"=> "vertical",
            "spacing"=> "sm",
            "contents"=> [
              [
                "type"=> "text",
                "text"=> "Product 1",
                "size"=> "xl",
                "weight"=> "bold",
                "wrap"=> true
            ],
              [
                "type"=> "box",
                "layout"=> "baseline",
                "contents"=> [
                
                  [
                    "type"=> "text",
                    "text"=> "Description",
                    "flex"=> 0,
                    "size"=> "sm",
                    "weight"=> "bold",
                    "wrap"=> true
                  ]
                ]
              ]
            ]
            ],
          "footer"=> [
            "type"=> "box",
            "layout"=> "vertical",
            "spacing"=> "sm",
            "contents"=> [
              [
                "type"=> "button",
                "action"=> [
                  "type"=> "uri",
                  "label"=> "Detail 1",
                  "uri"=> "https://liff.line.me/1654173341-pJegLPb3"
                ]
              ]
            ]
      ]
      ],
        [
          "type"=> "bubble",
          "hero"=> [
            "type"=> "image",
            "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_6_carousel.png",
            "size"=> "full",
            "aspectRatio"=> "20:13",
            "aspectMode"=> "cover"
      ],
          "body"=> [
            "type"=> "box",
            "layout"=> "vertical",
            "spacing"=> "sm",
            "contents"=> [
              [
                "type"=> "text",
                "text"=> "Metal Desk Lamp",
                "size"=> "xl",
                "weight"=> "bold",
                "wrap"=> true
            ],
              [
                "type"=> "box",
                "layout"=> "baseline",
                "flex"=> 1,
                "contents"=> [
                  [
                    "type"=> "text",
                    "text"=> "$11",
                    "flex"=> 0,
                    "size"=> "xl",
                    "weight"=> "bold",
                    "wrap"=> true
                ],
                  [
                    "type"=> "text",
                    "text"=> ".99",
                    "flex"=> 0,
                    "size"=> "sm",
                    "weight"=> "bold",
                    "wrap"=> true
                ]
                ]
            ]
            ]
            ],
          "footer"=> [
            "type"=> "box",
            "layout"=> "vertical",
            "spacing"=> "sm",
            "contents"=> [
              [
                "type"=> "button",
                "action"=> [
                  "type"=> "uri",
                  "label"=> "Add to wish list",
                  "uri"=> "https://liff.line.me/1654173341-pJegLPb3"
                ]
              ]
            ]
          ]
        ]
      ]
    ]
  ];



if ( $message == "แสดง Liff" ) {
    foreach ($request_array['events'] as $event) {
        error_log(json_encode($event));
        $reply_message = '';
        $reply_token = $event['replyToken'];


        $data = [
            'replyToken' => $reply_token,
            'messages' => [$jsonFlex]
        ];

        print_r($data);

        $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);

        $send_result = send_reply_message($API_URL.'/reply', $POST_HEADER, $post_body);

        echo "Result: ".$send_result."\r\n";
        
    }
}

echo "OK";

                
  

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

?>