<?

// function file_get_contents_curl($url)
// {
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_HEADER, 0);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
//     $data = curl_exec($ch);
//     curl_close($ch);
//     return $data;
// }

// function send_reply_message($url, $post_header, $post_body)
// {
//   $ch = curl_init($url);
//   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//   curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
//   curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
//   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//   $result = curl_exec($ch);
//   curl_close($ch);
//   return $result;
// }
    // $url = "https://api-oaplus.line.biz/channels/5000030506/e-commerce/api/v1/order?search=&page=1";
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_HEADER, 0);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    // $data = curl_exec($ch);
    // curl_close($ch);
    // echo $data;

header("Access-Control-Allow-Origin: https://api-oaplus.line.biz/channels/5000030506/e-commerce/api/v1/order?search=&page=1");

$curl = curl_init();
$url = "https://api-oaplus.line.biz/channels/5000030506/e-commerce/api/v1/order?search=&page=1";
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_VERBOSE, true);

$output = curl_exec($curl);
$info = curl_getinfo($curl);
$err = curl_error($curl);
$ern = curl_errno($curl);

if ($ern) {
    printf("An error occurred: (%d) %s\n", $ern, $err);
    exit(1);
}
curl_close($curl);

printf("Response body size: %d\n", $info["size_download"]);

// Debug only.
// var_dump($output);

echo $output;