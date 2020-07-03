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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <style>
        .footer {
            position: fixed;
            height: 12%;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: white;
            color: black;
            text-align: center;
        }

        .btn-default {
            background-color: #2e5a7d;
            color: white;
            border: 0;
        }

        .btn-grad {
            background: linear-gradient(to right, #2e5a7d 9%, #33ccff 100%);
            color: white;
            border: 0;
            font-size: 20px;
        }
    </style>
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
    $n = 0;
    $stockFromApi = $recommend_stock[$split[0] - 1];
    // $data = "5";
    echo '<script type="text/javascript">';
    echo "var stockFromApi = '$stockFromApi';";
    echo '</script>';
?>
    </script>
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
                <form name="formData" action="/Product/payment.php" method="POST">
                    <script>
                        function handle() {
                            // console.log(stockFromApi);
                            var num = 1
                            var stock = num + document.formData.inputStock.value++
                            if (stock == stockFromApi) {
                                document.formData.buttonUp.disabled = true;
                            } else {
                                document.formData.buttonDown.disabled = false;
                            }
                        }

                        function handle2() {
                            var stock = formData.inputStock.value - 1
                            console.log(stock);
                            if (stock == "0") {
                                document.formData.buttonDown.disabled = true;
                                document.formData.buttonUp.disabled = false;
                                document.formData.inputStock.value--
                            } else {
                                document.formData.buttonUp.disabled = false;
                                document.formData.inputStock.value--
                            }
                        }
                    </script>
                    <button type="button" name="buttonUp" onclick="javascript:handle()" class="btn btn-dark rounded-circle" style="width:40px; height:40px;">+</button>
                    <input readonly type="text" name="inputStock" value="0" onchange="javascript:handle()" size="1" style="border: 0; text-align: center;">
                    <button type="button" disabled="true" name="buttonDown" onclick="javascript:handle2()" class="btn btn-dark rounded-circle" style="width:40px; height:40px;">- </button>
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
        <br>
    </ul>
    <br>
    <div class="footer">
        <div class="row mt-1 ml-1" align="center">
            <div class="col-2 mr-1 p-0">
                <button class="btn btn-lg btn-block btn-default"><i class="fas fa-comment-dots" style="font-size: 20px;"></i></button>
            </div>
            <div class="col-2 m-0 p-0">
                <button class="btn btn-lg btn-block btn-default"><i class="fas fa-cart-plus" style="font-size: 20px;"></i></button>
            </div>
            <div class="col-7 ml-1 p-0">
                <button type="submit" class="btn btn-lg btn-block btn-grad">ซื้อเลย</button>
            </div>
        </div>
    </div>
    </form>
</body>

</html>