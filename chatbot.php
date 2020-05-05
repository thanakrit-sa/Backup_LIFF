<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'vendor/autoload.php';

include 'connect.php';

use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot\MessageBuilder\TemplateMessageBuilder;
use LINE\LINEBot\MessageBuilder\FlexMessageBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder;
use LINE\LINEBot\MessageBuilder\Flex\ContainerBuilder\BubbleContainerBuilder;
use LINE\LINEBot\MessageBuilder\Flex\ContainerBuilder\CarouselContainerBuilder;
use LINE\LINEBot\MessageBuilder\Flex\ComponentBuilder\BoxComponentBuilder;
use LINE\LINEBot\MessageBuilder\Flex\ComponentBuilder\TextComponentBuilder;
use LINE\LINEBot\MessageBuilder\Flex\ComponentBuilder\ButtonComponentBuilder;
use LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder;


$httpClient = new CurlHTTPClient(LINE_MESSAGE_ACCESS_TOKEN);
$bot = new LINEBot($httpClient, array('channelSecret' => LINE_MESSAGE_CHANNEL_SECRET));

$content = file_get_contents('php://input');

$hash = hash_hmac('sha256', $content, LINE_MESSAGE_CHANNEL_SECRET, true);
$signature = base64_encode($hash);

$events = $bot->parseEventRequest($content, $signature);
$eventObj = $events[0];

$eventType = $eventObj->getType();

$sourceType = NULL;
$replyToken = NULL;
$replyData = NULL;
$eventMessage = NULL;
$eventPostback = NULL;
$eventFollow = NULL;

switch ($eventType) {
    case 'message':
        $eventMessage = true;
        break;
    case 'postback':
        $eventPostback = true;
        break;
    case 'follow':
        $eventFollow = true;
        break;
}

if (is_null($eventLeave) && is_null($eventUnfollow) && is_null($eventMemberLeft)) {
    $replyToken = $eventObj->getReplyToken();
}

$hello = new BubbleContainerBuilder(
    "ltr",
    NULL,
    NULL,
    new BoxComponentBuilder(
        "horizontal",
        array(
            new TextComponentBuilder(
                "สวัสดีครับ",
                NULL,
                NULL,
                "md",
                NULL,
                NULL,
                true
            )
        )
    )
);

$liff = new CarouselContainerBuilder(
    array(
        new BubbleContainerBuilder(
            "ltr",  // กำหนด NULL หรือ "ltr" หรือ "rtl"
            NULL,
            NULL,
            new BoxComponentBuilder(
                "horizontal",
                array(
                    new TextComponentBuilder("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.", NULL, NULL, NULL, NULL, NULL, true)
                )
            ),
            new BoxComponentBuilder(
                "horizontal",
                array(
                    new ButtonComponentBuilder(
                        new UriTemplateActionBuilder("GO", "http://niik.in"),
                        NULL,
                        NULL,
                        NULL,
                        "primary"
                    )
                )
            )
        ), // end bubble 1
        new BubbleContainerBuilder(
            "ltr",  // กำหนด NULL หรือ "ltr" หรือ "rtl"
            NULL,
            NULL,
            new BoxComponentBuilder(
                "horizontal",
                array(
                    new TextComponentBuilder("Hello, World!", NULL, NULL, NULL, NULL, NULL, true)
                )
            ),
            new BoxComponentBuilder(
                "horizontal",
                array(
                    new ButtonComponentBuilder(
                        new UriTemplateActionBuilder("GO", "http://niik.in"),
                        NULL,
                        NULL,
                        NULL,
                        "primary"
                    )
                )
            )
        ) // end bubble 2       
    )
);
$noword = new BubbleContainerBuilder(
    "ltr",
    NULL,
    NULL,
    new BoxComponentBuilder(
        "horizontal",
        array(
            new TextComponentBuilder(
                "ไม่ตรงคีย์เวิร์ด",
                NULL,
                NULL,
                "md",
                NULL,
                NULL,
                true
            )
        )
    )
);
$notext = new BubbleContainerBuilder(
    '{
        "type": "carousel",
        "contents": [
          {
            "type": "bubble",
            "body": {
              "type": "box",
              "layout": "horizontal",
              "contents": [
                {
                  "type": "text",
                  "text": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                  "wrap": true
                }
              ]
            },
            "footer": {
              "type": "box",
              "layout": "horizontal",
              "contents": [
                {
                  "type": "button",
                  "style": "primary",
                  "action": {
                    "type": "uri",
                    "label": "Go",
                    "uri": "https://example.com"
                  }
                }
              ]
            }
          },
          {
            "type": "bubble",
            "body": {
              "type": "box",
              "layout": "horizontal",
              "contents": [
                {
                  "type": "text",
                  "text": "Hello, World!",
                  "wrap": true
                }
              ]
            },
            "footer": {
              "type": "box",
              "layout": "horizontal",
              "contents": [
                {
                  "type": "button",
                  "style": "primary",
                  "action": {
                    "type": "uri",
                    "label": "Go",
                    "uri": "https://example.com"
                  }
                }
              ]
            }
          }
        ]
      }'
);
$data = [
    '{
        "type": "carousel",
        "contents": [
          {
            "type": "bubble",
            "body": {
              "type": "box",
              "layout": "horizontal",
              "contents": [
                {
                  "type": "text",
                  "text": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                  "wrap": true
                }
              ]
            },
            "footer": {
              "type": "box",
              "layout": "horizontal",
              "contents": [
                {
                  "type": "button",
                  "style": "primary",
                  "action": {
                    "type": "uri",
                    "label": "Go",
                    "uri": "https://example.com"
                  }
                }
              ]
            }
          },
          {
            "type": "bubble",
            "body": {
              "type": "box",
              "layout": "horizontal",
              "contents": [
                {
                  "type": "text",
                  "text": "Hello, World!",
                  "wrap": true
                }
              ]
            },
            "footer": {
              "type": "box",
              "layout": "horizontal",
              "contents": [
                {
                  "type": "button",
                  "style": "primary",
                  "action": {
                    "type": "uri",
                    "label": "Go",
                    "uri": "https://example.com"
                  }
                }
              ]
            }
          }
        ]
      }'
    ];
if (!is_null($events)) {
    $userMessage = strtolower($userMessage);
    if (!is_null($eventFollow)) {
    }
    if (!is_null($eventMessage)) {
        $typeMessage = $eventObj->getMessageType();
        $idMessage = $eventObj->getMessageId();
        if ($typeMessage == 'text') {
            $userMessage = $eventObj->getText();
        }
        if ($typeMessage == 'image') {
        }
    }
    switch ($typeMessage) {
        case "text":
            if ($userMessage != null) {
                if ($userMessage == "liff") {
                    $messages = '{
                        "type": "bubble",
                        "body": {
                          "type": "box",
                          "layout": "horizontal",
                          "contents": [
                            {
                              "type": "image",
                              "url": "https://example.com/flex/images/image.jpg",
                              "size": "md"
                            }
                          ]
                        }
                      }';



        
                } else {
                    $replyData = new FlexMessageBuilder("ข้อความตอบกลับ", $noword);
                }
            }
        default:
            if (!is_null($replyData)) {
            } else {
                $replyData = new FlexMessageBuilder("ข้อความตอบกลับ", $notext);
            }
            break;
    }


$response = $bot->replyMessage($replyToken, $messages);
if ($response->isSucceeded()) {
    echo 'Succeeded!';
    return;
}

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

    // $post = json_encode($data);
    // $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

    // $ch = curl_init($url);
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    // $result = curl_exec($ch);
    // curl_close($ch);

    // echo $result . "\r\n";

};
// $url = 'https://api.line.me/v2/bot/message/reply';
//     $data = [
//       'replyToken' => $replyToken,
//       'messages' => [$messages],
//     ];

// // $url = "https://graph.facebook.com/v2.6/me/messages?access_token=EAADSvg5yW7UBAGyavqtG89YpW5Jep9Ul0lv0pZCZBAz3VZCjZBRQ0UfCHFgOot1K0hhLIGgR0XsW3xQ0SPAN6xBUoc4NZBOvOOZBZB0ESIC8RkCL601hovV8zX7FM5TKCCkCF4IZCUwxJqZAztEB5xUpoHocZCVuXrs26LBA4D6hlSrKjUQ6EtKsTx";
// $ch = curl_init($url);
// $post = json_encode($data);
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
// $result = curl_exec($ch);

// echo "ok";
