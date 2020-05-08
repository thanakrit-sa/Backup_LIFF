<?php

$API_URL = 'https://api.line.me/v2/bot/message';
$ACCESS_TOKEN = 'Es3Kz8W5FIyX+e9W8QhhNvTreG4FuPaUwlTi/CCK5+g51055N5mYYzPLtcFOEfe3Mrdtvk0KNvGP3owBpYOBIE/Xq3aDuJ+w0VI/3Eelkl7/bvEz+Kv2K0pBsumqTnDpQDXTqsC7yucteBdhejsnXwdB04t89/1O/w1cDnyilFU='; 
$channelSecret = 'a35820614034732a864c1e03c76bb327';
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);

$request = file_get_contents('php://input');   
$request_array = json_decode($request, true);   
$message = $request_array['events'][0]['message']['text'];  

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

$html = file_get_contents_curl("http://dummy.restapiexample.com/api/v1/employees"); 

$dataa = json_decode($html,true);
$displayName =  $dataa['status'];
// echo $displayName;

foreach ($dataa['data'] as $event) {
  $reply_token = $event['employee_name'];
  echo $reply_token;
}




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
            "url"=> "https://www.bnn.in.th/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/S/a/Samsung-Tablet-Galaxy-Tab-S6-Lite-4_2B64GB-Wi-Fi-SM-P610NZIATHL-Chiffon-Pink-1-1588867299.jpg",
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
            "url"=> "https://www.teknozeka.com/wp-content/uploads/2020/03/wp-header-logo-28.png",
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
                "text"=> "Product 2",
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
                  "label"=> "Detail 2",
                  "uri"=> "https://liff.line.me/1654173341-lVDxGq6k"
                ]
              ]
            ]
          ]
        ]
      ]
    ]
  ];

foreach ($request_array['events'] as $event) {
  $reply_token = $event['replyToken'];
}

if ( $message == "แสดง Liff" ) {
        $data = [
            'replyToken' => $reply_token,
            'messages' => [$jsonFlex]
        ];
        $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
        $send_result = send_reply_message($API_URL.'/reply', $POST_HEADER, $post_body);

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
