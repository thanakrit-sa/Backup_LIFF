<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommend</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style_profile.css">
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
        $recommend_name[] = $data['product_name'];
        $recommend_image[] = $data['image_path'];
        $recommend_stock[] = $data['stock'];
        $recommend_price[] = $data['price'];
    }
    $img_url = "https://e-sport.in.th/ssdev/ecom/dashboard/uploads/img_prod/".$recommend_image[$split[0]-1];

?>
    <div align="center" class="shadow m-0">
        <p class="p-3"><?= $recommend_name[$split[0] - 1] ?></p>
    </div>
    <ul class="list-group">
        <li class="list-group-item">
            <img src=<?= $img_url ?> class="img-fluid m-0">
        </li>
        <li class="list-group-item m-1">
            <div class="mb-1">
                <h6 class="mb-1"><?= $recommend_name[$split[0] - 1] ?></h6>
            </div>
            <div class="mb-3">
                <h5><strong class="m-0">฿<?= $recommend_price[$split[0] - 1] ?></strong></h5>
            </div>
            <div class="m-0 p-0">
                <label class="m-0" style="color: gray;">จำนวน (พร้อมจัดส่ง <?= $recommend_stock[$split[0] - 1] ?> ชิ้น)</label>
                <br class="m-0 p-0">
                <button type="button" class="btn btn-dark rounded-circle" style="width:40px; height:40px;">+</button>
                <label disabled class="btn btn-lg bg-white mx-1">1</label>
                <button type="button" class="btn btn-dark rounded-circle" style="width:40px; height:40px;">- </button>
            </div>
        </li>
        <li class="list-group-item">
            <div>
                <b>รายละเอียด</b>
            </div>
            <div>
                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi distinctio saepe laboriosam placeat, officiis voluptate aperiam. Tempore consectetur, alias perferendis iste explicabo voluptas obcaecati! Maiores quia ad exercitationem? Provident, ducimus.</label>
            </div>
        </li>
    </ul>
    <div class="footer">
        sdfsdfdsfsd
    </div>
</body>

</html>