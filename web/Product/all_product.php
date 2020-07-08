<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style_profile.css">
</head>

<?
include '../../function.php';

$api = file_get_contents_curl("https://e-sport.in.th/ssdev/ecom/dashboard/api/products/");
$dataFromApi = json_decode($api, true);

foreach ($dataFromApi['data'] as $data) {
    $prod_name[] = $data['product_name'];
    $prod_image[] = $data['image_path'];
    $prod_price[] = $data['price'];
}
?>

<body>
    <div class="card card-body">
        <div class="row mx-1" align="center">
            <div class="col-12 mt-1 p-0">
                <input type="text" class="form-control" placeholder="ชื่อสินค้า">
            </div>
            <div class="col-12 mt-1 p-0">
                <select id="inputState" class="form-control">
                    <option selected>หมวดหมู่</option>
                    <option>...</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-2">ค้นหาสินค้า</button>
        </div>
    </div>
    <div class="card card-body" style="border: 0;">
        <div class="row" align="center">
            <div class="col-6 p-1">
                <div class="card card-body p-0 m-0 border-0 shadow-sm" align="left">
                    <img src="<?= $prod_image[0] ?>" class="img-thumbnail p-0 m-0 border-0" style="width: 200px; height: 150px;" />
                    <div class="mt-1 m-1">
                        <article><?= $prod_name[0] ?></article>
                        <h6>฿<?= $prod_price[0] ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-6 p-1">
                <div class="card card-body p-0 m-0 border-0 shadow-sm" align="left">
                    <img src="<?= $prod_image[1] ?>" class="img-thumbnail p-0 m-0 border-0" style="width: 200px; height: 150px;" />
                    <div class="mt-1 m-1">
                        <article><?= $prod_name[1] ?></article>
                        <h6>฿<?= $prod_price[1] ?></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" align="center">
            <div class="col-6 p-1">
                <div class="card card-body p-0 m-0 border-0 shadow-sm" align="left">
                    <img src="<?= $prod_image[2] ?>" class="img-thumbnail p-0 m-0 border-0" style="width: 200px; height: 150px;" />
                    <div class="mt-1 m-1">
                        <article><?= $prod_name[2] ?></article>
                        <h6>฿<?= $prod_price[2] ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-6 p-1">
                <div class="card card-body p-0 m-0 border-0 shadow-sm" align="left">
                    <img src="<?= $prod_image[3] ?>" class="img-thumbnail p-0 m-0 border-0" style="width: 200px; height: 150px;" />
                    <div class="mt-1 m-1">
                        <article><?= $prod_name[3] ?></article>
                        <h6>฿<?= $prod_price[3] ?></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" align="center">
            <div class="col-6 p-1">
                <div class="card card-body p-0 m-0 border-0 shadow-sm" align="left">
                    <img src="<?= $prod_image[4] ?>" class="img-thumbnail p-0 m-0 border-0" style="width: 200px; height: 150px;" />
                    <div class="mt-1 m-1">
                        <article><?= $prod_name[4] ?></article>
                        <h6>฿<?= $prod_price[4] ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-6 p-1">
                <div class="card card-body p-0 m-0 border-0 shadow-sm" align="left">
                    <img src="<?= $prod_image[5] ?>" class="img-thumbnail p-0 m-0 border-0" style="width: 200px; height: 150px;" />
                    <div class="mt-1 m-1">
                        <article><?= $prod_name[5] ?></article>
                        <h6>฿<?= $prod_price[5] ?></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" align="center">
            <div class="col-6 p-1">
                <div class="card card-body p-0 m-0 border-0 shadow-sm" align="left">
                    <img src="<?= $prod_image[6] ?>" class="img-thumbnail p-0 m-0 border-0" style="width: 200px; height: 150px;" />
                    <div class="mt-1 m-1">
                        <article><?= $prod_name[6] ?></article>
                        <h6>฿<?= $prod_price[6] ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-6 p-1">
                <div class="card card-body p-0 m-0 border-0 shadow-sm" align="left">
                    <img src="<?= $prod_image[7] ?>" class="img-thumbnail p-0 m-0 border-0" style="width: 200px; height: 150px;" />
                    <div class="mt-1 m-1">
                        <article><?= $prod_name[7] ?></article>
                        <h6>฿<?= $prod_price[7] ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


</body>

</html>