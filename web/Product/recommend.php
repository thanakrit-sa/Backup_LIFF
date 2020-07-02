<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?
    include '../../function.php';
    $message = $_GET['message'];
    $split = explode(":", $message);
    $split_prod = $split[2];
    $api = file_get_contents_curl("https://e-sport.in.th/ssdev/ecom/dashboard/api/products/productBycat/$split_prod");
    $dataFromApi = json_decode($api, true);
    foreach ($dataFromApi['data'] as $data) {
        $recommend_name[$split[0]-2] = $data['product_name'];
        $recommend_image[$split[0]-2] = $data['image_path'];
        $recommend_stock[$split[0]-2] = $data['stock'];
        $recommend_price[$split[0]-2] = $data['price'];
    }

?>
    <h2>hello</h2>
    <p><?= $message ?></p>
    <p><?= $recommend_name[$split[0]-2] ?></p>
</body>

</html>