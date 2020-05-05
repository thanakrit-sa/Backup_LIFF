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
use LINE\LINEBot\MessageBuilder\Flex\ComponentBuilder\BoxComponentBuilder;
use LINE\LINEBot\MessageBuilder\Flex\ComponentBuilder\TextComponentBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder;


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
                    $replyData = new TemplateMessageBuilder('Carousel',
                    new CarouselTemplateBuilder(
                        array(
                            new CarouselColumnTemplateBuilder(
                                'Title Carousel',
                                'Description Carousel',
                                'https://www.mywebsite.com/imgsrc/photos/f/sampleimage/700',
                                $actionBuilder
                            ),
                            new CarouselColumnTemplateBuilder(
                                'Title Carousel',
                                'Description Carousel',
                                'https://www.mywebsite.com/imgsrc/photos/f/sampleimage/700',
                                $actionBuilder
                            ),
                            new CarouselColumnTemplateBuilder(
                                'Title Carousel',
                                'Description Carousel',
                                'https://www.mywebsite.com/imgsrc/photos/f/sampleimage/700',
                                $actionBuilder
                            ),                                          
                        )
                    )
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