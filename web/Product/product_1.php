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
        <div class="row">
            <div clss="col">
                <div class="row">
                    <div class="col p-0">
                        <img src="<?php echo $prod_image[0]; ?>">
                    </div>
                </div>
            </div>

        </div>

        <hr>
        <div class="row">
            <div class="col" align="left">
                <h5 class="p-0 m-0">Product 1</h5>
                <p>Lorem ipsum dolor !</p>
            </div>
            <div class="col" align="right">
                <b style="font-size: 2em;">3,259 </b>THB
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-6 p-0 m-0" align="center">
                <select class="form-control">
                    <option>ซื้อ</option>
                    <option>สั่งซื้อ</option>
                    <option>สั่ง</option>
                </select>
            </div>
            <div class="col-6 p-0 m-0" align="center">
                <a href="../Detail_Product/detail_1.html"><button type="button" class="btn btn-dark btn-block">Add to Basket</button></a>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
</script>