<?php

$API_URL = 'https://api.line.me/v2/bot/message';
$ACCESS_TOKEN = 'Es3Kz8W5FIyX+e9W8QhhNvTreG4FuPaUwlTi/CCK5+g51055N5mYYzPLtcFOEfe3Mrdtvk0KNvGP3owBpYOBIE/Xq3aDuJ+w0VI/3Eelkl7/bvEz+Kv2K0pBsumqTnDpQDXTqsC7yucteBdhejsnXwdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'a35820614034732a864c1e03c76bb327';
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);

$request = file_get_contents('php://input');
$request_array = json_decode($request, true);
$message = $request_array['events'][0]['message']['text'];

# Get API
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

$dataFormhtml = json_decode($html, true);

foreach ($dataFormhtml['data'] as $data) {
  $dataName[] = $data['employee_name'];
  $dataSalary[] = $data['employee_salary'];
}

# Flex Messages
$jsonFlex = [
  "type" => "flex",
  "altText" => "Flex Message",
  "contents" => [
    "type" => "carousel",
    "contents" => [
      [
        "type" => "bubble",
        "hero" => [
          "type" => "image",
          "url" => "https://www.bnn.in.th/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/S/a/Samsung-Tablet-Galaxy-Tab-S6-Lite-4_2B64GB-Wi-Fi-SM-P610NZIATHL-Chiffon-Pink-1-1588867299.jpg",
          "size" => "full",
          "aspectRatio" => "20:13",
          "aspectMode" => "cover"
        ],
        "body" => [
          "type" => "box",
          "layout" => "vertical",
          "spacing" => "sm",
          "contents" => [
            [
              "type" => "text",
              "text" => $dataName[0],
              "size" => "xl",
              "weight" => "bold",
              "wrap" => true
            ],
            [
              "type" => "box",
              "layout" => "baseline",
              "contents" => [

                [
                  "type" => "text",
                  "text" => $dataSalary[0],
                  "flex" => 0,
                  "size" => "sm",
                  "weight" => "bold",
                  "wrap" => true
                ]
              ]
            ]
          ]
        ],
        "footer" => [
          "type" => "box",
          "layout" => "vertical",
          "spacing" => "sm",
          "contents" => [
            [
              "type" => "button",
              "action" => [
                "type" => "uri",
                "label" => "Detail 1",
                "uri" => "https://liff.line.me/1654173341-pJegLPb3"
              ]
            ]
          ]
        ]
      ],
      [
        "type" => "bubble",
        "hero" => [
          "type" => "image",
          "url" => "https://www.bnn.in.th/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/W/I/WIWU-Alcohol-Wipes-White-1-1588022365.jpg",
          "size" => "full",
          "aspectRatio" => "20:13",
          "aspectMode" => "cover"
        ],
        "body" => [
          "type" => "box",
          "layout" => "vertical",
          "spacing" => "sm",
          "contents" => [
            [
              "type" => "text",
              "text" => $dataName[1],
              "size" => "xl",
              "weight" => "bold",
              "wrap" => true
            ],
            [
              "type" => "box",
              "layout" => "baseline",
              "contents" => [

                [
                  "type" => "text",
                  "text" => $dataSalary[1],
                  "flex" => 0,
                  "size" => "sm",
                  "weight" => "bold",
                  "wrap" => true
                ]
              ]
            ]
          ]
        ],
        "footer" => [
          "type" => "box",
          "layout" => "vertical",
          "spacing" => "sm",
          "contents" => [
            [
              "type" => "button",
              "action" => [
                "type" => "uri",
                "label" => "Detail 2",
                "uri" => "https://liff.line.me/1654173341-pJegLPb3"
              ]
            ]
          ]
        ]
      ],
      [
        "type" => "bubble",
        "hero" => [
          "type" => "image",
          "url" => "https://www.bnn.in.th/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/7/3/7340055337076-1-1588524115.jpg",
          "size" => "full",
          "aspectRatio" => "20:13",
          "aspectMode" => "cover"
        ],
        "body" => [
          "type" => "box",
          "layout" => "vertical",
          "spacing" => "sm",
          "contents" => [
            [
              "type" => "text",
              "text" => $dataName[2],
              "size" => "xl",
              "weight" => "bold",
              "wrap" => true
            ],
            [
              "type" => "box",
              "layout" => "baseline",
              "flex" => 1,
              "contents" => [

                [
                  "type" => "text",
                  "text" => $dataSalary[2],
                  "flex" => 0,
                  "size" => "sm",
                  "weight" => "bold",
                  "wrap" => true
                ]
              ]
            ]
          ]
        ],
        "footer" => [
          "type" => "box",
          "layout" => "vertical",
          "spacing" => "sm",
          "contents" => [
            [
              "type" => "button",
              "action" => [
                "type" => "uri",
                "label" => "Detail 3",
                "uri" => "https://liff.line.me/1654173341-lVDxGq6k"
              ]
            ]
          ]
        ]
      ]
    ]
  ]
];

$jsonRich = [
  "size" => [
    "width" => 2500,
    "height" => 1686
  ],
  "selected" => true,
  "name" => "ริชเมนู 1",
  "chatBarText" => "ประกาศ",
  "areas" => [
    [
      "bounds" => [
        "x" => 47,
        "y" => 61,
        "width" => 790,
        "height" => 787
      ],
      "action" => [
        "type" => "message",
        "text" => "พื้นที่ 1"
      ]
    ],
    [
      "bounds" => [
        "x" => 851,
        "y" => 57,
        "width" => 801,
        "height" => 791
      ],
      "action" => [
        "type" => "message",
        "text" => "พื้นที่ 2"
      ]
    ],
    [
      "bounds" => [
        "x" => 1669,
        "y" => 54,
        "width" => 784,
        "height" => 794
      ],
      "action" => [
        "type" => "message",
        "text" => "การดำเนินการ 3"
      ]
    ],
    [
      "bounds" => [
        "x" => 50,
        "y" => 858,
        "width" => 783,
        "height" => 769
      ],
      "action" => [
        "type" => "message",
        "text" => "การดำเนินการ 4"
      ]
    ],
    [
      "bounds" => [
        "x" => 851,
        "y" => 858,
        "width" => 801,
        "height" => 773
      ],
      "action" => [
        "type" => "message",
        "text" => "การดำเนินการ 5"
      ]
    ],
    [
      "bounds" => [
        "x" => 1674,
        "y" => 855,
        "width" => 779,
        "height" => 779
      ],
      "action" => [
        "type" => "message",
        "text" => "การดำเนินการ 6"
      ]
    ]
  ]
];

foreach ($request_array['events'] as $event) {
  $reply_token = $event['replyToken'];
}

if ($message == "แสดงสินค้า") {
  $data = [
    'replyToken' => $reply_token,
    'messages' => [$jsonFlex]
  ];
  $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
  $send_result = send_reply_message($API_URL . '/reply', $POST_HEADER, $post_body);
}

# Reply Messages
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

# Rich Menu
$url = 'https://api.line.me/v2/bot/richmenu';
$post_rich = json_encode($jsonRich, JSON_UNESCAPED_UNICODE);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_HTTPHEADER, $POST_HEADER);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_rich);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);
curl_close($ch);
echo $response;

