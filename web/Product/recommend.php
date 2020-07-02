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
    
    function a ($key) {
        foreach ($dataFromApi['data'] as $data) {
            $recommend_name[$key] = $data['product_name'];
            $recommend_image[$key] = $data['image_path'];
            $recommend_stock[$key] = $data['stock'];
            $recommend_price[$key] = $data['price'];
        }
    }

    if ($split[0] == "1") {
        $key = 0;
        a($key);
    } else if ($split[0] == "2") {

    } else if ($split[0] == "3") {

    } else {
        echo "Error";
    }
?>
    <h2>hello</h2>
    <p><?= $message ?></p>
    <p><?= $split[0] ?></p>
    <p><?= $split[1] ?></p>
    <p><?= $split[2] ?></p>
    <p><?= $recommend_name[$key] ?></p>
</body>

</html>