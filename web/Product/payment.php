<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>

<body>
    <?
    include '../../function.php';

        $id = $_POST["id"];
        $quantity = $_POST["inputStock"];
        $api = file_get_contents_curl("https://e-sport.in.th/ssdev/ecom/dashboard/api/products/productByid/$id");
        $dataFromApi = json_decode($api, true);
        foreach ($dataFromApi['data'] as $data) {
            $recommend_id = $data['id'];
            $recommend_name = $data['product_name'];
            $recommend_image = $data['image_path'];
            $recommend_stock = $data['stock'];
            $recommend_price = $data['price'];
        }
    ?>
    <div align="center">
        <p>ชื่อสินค้า : <?=$recommend_name?></p>
        <p>ราคาสินค้า : <?=$recommend_price?></p>
        <p>จำนวนสินค้าที่ซื้อ : <?=$quantity?></p>
    </div>
</body>

</html>