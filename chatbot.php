<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include 'vendor/autoload.php';



include 'connect.php';

use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder;
use LINE\LINEBot\QuickReplyBuilder\QuickReplyMessageBuilder;
use LINE\LINEBot\QuickReplyBuilder\ButtonBuilder\QuickReplyButtonBuilder;
use LINE\LINEBot\TemplateActionBuilder\CameraRollTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\CameraTemplateActionBuilder;
use LINE\LINEBot\MessageBuilder\FlexMessageBuilder;
use LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder;
use LINE\LINEBot\MessageBuilder\Flex\ContainerBuilder\BubbleContainerBuilder;
use LINE\LINEBot\MessageBuilder\Flex\ComponentBuilder\BoxComponentBuilder;
use LINE\LINEBot\MessageBuilder\Flex\ComponentBuilder\ButtonComponentBuilder;
use LINE\LINEBot\MessageBuilder\Flex\ComponentBuilder\TextComponentBuilder;
use LINE\LINEBot\MessageBuilder\ImagemapMessageBuilder;
use LINE\LINEBot\ImagemapActionBuilder\ImagemapMessageActionBuilder;
use LINE\LINEBot\ImagemapActionBuilder\ImagemapUriActionBuilder;
use LINE\LINEBot\ImagemapActionBuilder\AreaBuilder;
use LINE\LINEBot\MessageBuilder\Imagemap\BaseSizeBuilder;

$httpClient = new CurlHTTPClient(LINE_MESSAGE_ACCESS_TOKEN);
$bot = new LINEBot($httpClient, array('channelSecret' => LINE_MESSAGE_CHANNEL_SECRET));

$content = file_get_contents('php://input');

$hash = hash_hmac('sha256', $content, LINE_MESSAGE_CHANNEL_SECRET, true);
$signature = base64_encode($hash);

$events = $bot->parseEventRequest($content, $signature);
$eventObj = $events[0];

$eventType = $eventObj->getType();


$userId = NULL;
$sourceId = NULL;
$sourceType = NULL;
$replyToken = NULL;
$replyData = NULL;
$userImage = null;
$eventMessage = NULL;
$eventPostback = NULL;
$eventJoin = NULL;
$eventLeave = NULL;
$eventFollow = NULL;
$eventUnfollow = NULL;
$eventBeacon = NULL;
$eventAccountLink = NULL;
$eventMemberJoined = NULL;
$eventMemberLeft = NULL;

function startsWith($string, $startString)
{
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}

function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}

switch ($eventType) {
    case 'message':
        $eventMessage = true;
        break;
    case 'postback':
        $eventPostback = true;
        break;
    case 'join':
        $eventJoin = true;
        break;
    case 'leave':
        $eventLeave = true;
        break;
    case 'follow':
        $eventFollow = true;
        break;
    case 'unfollow':
        $eventUnfollow = true;
        break;
    case 'beacon':
        $eventBeacon = true;
        break;
    case 'accountLink':
        $eventAccountLink = true;
        break;
    case 'memberJoined':
        $eventMemberJoined = true;
        break;
    case 'memberLeft':
        $eventMemberLeft = true;
        break;
}

if ($eventObj->isUserEvent()) {
    $userId = $eventObj->getUserId();
    $sourceType = "USER";
}

$sourceId = $eventObj->getEventSourceId();

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
                "คุณไม่ได้ส่งข้อความ",
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
switch ($typeMessage) {
    case "text":
        if ($userMessage != null) {
            if($userMessage == "สวัสดี") {
                $replyData = new FlexMessageBuilder("Flex", $hello);
            }
            else {
                $replyData = new FlexMessageBuilder("Flex", $noword);
            }
        }            
    default:
        if (!is_null($replyData)) {
        } else {
            $replyData = new FlexMessageBuilder("Flex", $notext);
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

