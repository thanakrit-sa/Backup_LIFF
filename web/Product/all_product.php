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
  
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="ชื่อสินค้า">
                </div>
                <div class="col-6">
                    <select id="inputState" class="form-control">
                        <option selected>หมวดหมู่</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-3">ค้นหาสินค้า</button>
            <hr>
        
    </ul>
</body>

</html>