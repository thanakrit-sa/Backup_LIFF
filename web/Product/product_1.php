<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style_profile.css">
</head>

<?
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
// $html = file_get_contents_curl("http://dummy.restapiexample.com/api/v1/employees"); #API Dummy
$dataFromApi = json_decode($api, true);

foreach ($dataFromApi['data'] as $data) {
    $prod_name[] = $data['product_name'];
    $prod_image[] = $data['image_path'];
    $prod_stock[] = $data['stock'];
    $prod_price[] = $data['price'];
    $prod_address[] = $data['address'];
    $prod_cate[] = $data['category_name'];
    $prod_created_time[] = $data['created_at'];
    $prod_updated_time[] = $data['updated_at'];
}
?>

<body>
    <div class="container">
        <div class="card mb-5 shadow rounde">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <img src="<? echo $prod_image[0]; ?>" class="img-thumbnail shadow p-1 mb-3 bg-white rounded">
                    </div>
                </div>
                <p align="center"><b><? echo $prod_name[0]; ?></b></p>
                <hr>
                <article class="row">
                    <div class="col-12" align="center">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium provident error sit qui explicabo, aspernatur amet, pariatur deserunt, libero ad quas rerum! Maxime suscipit harum delectus iusto amet magnam minima?
                    </div>
                </article>
                <hr>
                <div class="row">
                    <div class="col-4" align="right"><b>Brand : </b></div>
                    <div class="col-8" align="left">Adidas</div>
                </div>
                <div class="row">
                    <div class="col-4" align="right"><b>Catagory : </b></div>
                    <div class="col-8" align="left"><? echo $prod_cate[0]; ?></div>
                </div>
                <div class="row">
                    <div class="col-4" align="right"><b>Stock : </b></div>
                    <div class="col-8" align="left"><? echo $prod_stock[0] . " ชิ้น"; ?></div>
                </div>
                <div class="row">
                    <div class="col-4" align="right"><b>Price : </b></div>
                    <div class="col-8" align="left"><? echo $prod_price[0] . " บาท"; ?></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="footer">
        <div class="row">
            <div class="col-6 p-0 m-0">
                <select class="form-control form-control-lg form-control-dark" align="center">
                    <option>ซื้อ</option>
                    <option>สั่งซื้อ</option>
                    <option>สั่ง</option>
                </select>
            </div>
            <div class="col-6 p-0 m-0">
                <button type="button" id="count" class="btn btn-dark btn-block btn-lg p-2" align="center">สั่งสินค้า</button>
            </div>
        </div>
    </div>
</body>

</html>