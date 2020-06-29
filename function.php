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

$api = file_get_contents_curl("https://e-sport.in.th/ssdev/ecom/dashboard/api/products/");
$dataFromApi = json_decode($api, true);
echo $data;