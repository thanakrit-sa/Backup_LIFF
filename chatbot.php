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
            NULL,NULL,
            new BoxComponentBuilder(
                "horizontal",
                array(
                    new TextComponentBuilder("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.",NULL,NULL,NULL,NULL,NULL,true)
                )
            ),
            new BoxComponentBuilder(
                "horizontal",
                array(
                    new ButtonComponentBuilder(
                        new UriTemplateActionBuilder("GO","http://niik.in"),
                        NULL,NULL,NULL,"primary"
                    )
                )
            )
        ), // end bubble 1
        new BubbleContainerBuilder(
            "ltr",  // กำหนด NULL หรือ "ltr" หรือ "rtl"
            NULL,NULL,
            new BoxComponentBuilder(
                "horizontal",
                array(
                    new TextComponentBuilder("Hello, World!",NULL,NULL,NULL,NULL,NULL,true)
                )
            ),
            new BoxComponentBuilder(
                "horizontal",
                array(
                    new ButtonComponentBuilder(
                        new UriTemplateActionBuilder("GO","http://niik.in"),
                        NULL,NULL,NULL,"primary"
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
    "ltr",
    NULL,
    NULL,
    new BoxComponentBuilder(
        "horizontal",
        array(
            new TextComponentBuilder(
                "คุณไม่ได้เป็นส่งข้อความ",
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
$jdata = '{
    "type": "flex",
    "altText": "Flex Message",
    "contents": {
      "type": "bubble",
      "direction": "ltr",
      "header": {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "text",
            "text": "Purchase",
            "size": "lg",
            "align": "start",
            "weight": "bold",
            "color": "#009813"
          },
          {
            "type": "text",
            "text": "฿ 100.00",
            "size": "3xl",
            "weight": "bold",
            "color": "#000000"
          },
          {
            "type": "text",
            "text": "Rabbit Line Pay",
            "size": "lg",
            "weight": "bold",
            "color": "#000000"
          },
          {
            "type": "text",
            "text": "2019.02.14 21:47 (GMT+0700)",
            "size": "xs",
            "color": "#B2B2B2"
          },
          {
            "type": "text",
            "text": "Payment complete.",
            "margin": "lg",
            "size": "lg",
            "color": "#000000"
          }
        ]
      },
      "body": {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "separator",
            "color": "#C3C3C3"
          },
          {
            "type": "box",
            "layout": "baseline",
            "margin": "lg",
            "contents": [
              {
                "type": "text",
                "text": "Merchant",
                "align": "start",
                "color": "#C3C3C3"
              },
              {
                "type": "text",
                "text": "BTS 01",
                "align": "end",
                "color": "#000000"
              }
            ]
          },
          {
            "type": "box",
            "layout": "baseline",
            "margin": "lg",
            "contents": [
              {
                "type": "text",
                "text": "New balance",
                "color": "#C3C3C3"
              },
              {
                "type": "text",
                "text": "฿ 45.57",
                "align": "end"
              }
            ]
          },
          {
            "type": "separator",
            "margin": "lg",
            "color": "#C3C3C3"
          }
        ]
      },
      "footer": {
        "type": "box",
        "layout": "horizontal",
        "contents": [
          {
            "type": "text",
            "text": "View Details",
            "size": "lg",
            "align": "start",
            "color": "#0084B6",
            "action": {
              "type": "uri",
              "label": "View Details",
              "uri": "https://google.co.th/"
            }
          }
        ]
      }
    }
}';
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
                    $replyData = new FlexMessageBuilder(
                        "ข้อความตอบกลับ", $jdata
                    );
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
}

$response = $bot->replyMessage($replyToken, $replyData);
if ($response->isSucceeded()) {
    echo 'Succeeded!';
    return;
}

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
?>