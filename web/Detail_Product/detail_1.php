<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<?
$status = $_POST['status'];
$prod_id = $_POST['prodID'];

include '../../function.php';

$api = file_get_contents_curl("https://e-sport.in.th/ssdev/ecom/dashboard/api/products/");
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
            <div class="col-5" align="center">
                <img src="<?=$prod_image[0]?>" width="100%" height="100%">
            </div>
            <div class="col-7">
                <h5><?=$prod_id?></h5>
                <p>Lorem ipsum dolor !</p>
                <b>Status : </b><?=$status?><br>
                <b>Price : </b><?=$prod_price[0]?> THB
            </div>
        </div>
        <hr>
        <h5>Payment Method</h5>
        <br>
        <div class="accordion" id="accordionExample">
            <div class="row" align="center">
                <div class="col m-0" id="headingOne">
                    <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        <i class='fab fa-cc-mastercard' style='font-size:50px'></i>
                    </button>
                </div>
                <div class="col m-0" id="headingTwo">
                    <button class="btn btn-dark collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class='fab fa-cc-visa' style='font-size:50px'></i>
                    </button>
                </div>
                <div class="col m-0" id="headingThree">
                    <button class="btn btn-dark collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class='fab fa-cc-paypal' style='font-size:50px'></i>
                    </button>
                </div>
                
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <br>
                        <div class="form-group" align="left">
                            <label><b>Card Number</b></label>
                            <input type="text" class="form-control" placeholder="MasterCard">
                        </div>
                        <div class="form-group" align="left">
                            <label><b>Firstname</b></label>
                            <input type="text" class="form-control" placeholder="Firstname">
                        </div>
                        <div class="form-group" align="left">
                            <label><b>Lastname</b></label>
                            <input type="text" class="form-control" placeholder="Lastname">
                        </div>
                        <div class="alert alert-success" role="alert" align="left">
                            Product price 4,500 baht. Do you want to buy the product ?
                        </div>
                        <button class="btn btn-dark btn-block">Confirm</button>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="form-group" align="left">
                                <label><b>Card Number</b></label>
                                <input type="text" class="form-control" placeholder="VISA">
                            </div>
                            <div class="form-group" align="left">
                                <label><b>Firstname</b></label>
                                <input type="text" class="form-control" placeholder="Firstname">
                            </div>
                            <div class="form-group" align="left">
                                <label><b>Lastname</b></label>
                                <input type="text" class="form-control" placeholder="Lastname">
                            </div>
                            <div class="alert alert-success" role="alert" align="left">
                                Product price 4,500 baht. Do you want to buy the product ?
                            </div>
                            <button class="btn btn-dark btn-block">Confirm</button>
                        </div>
                    </div>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="form-group" align="left">
                                <label><b>Card Number</b></label>
                                <input type="text" class="form-control" placeholder="PayPal">
                            </div>
                            <div class="form-group" align="left">
                                <label><b>Firstname</b></label>
                                <input type="text" class="form-control" placeholder="Firstname">
                            </div>
                            <div class="form-group" align="left">
                                <label><b>Lastname</b></label>
                                <input type="text" class="form-control" placeholder="Lastname">
                            </div>
                            <div class="alert alert-success" role="alert" align="left">
                                Product price 4,500 baht. Do you want to buy the product ?
                            </div>
                            <button class="btn btn-dark btn-block">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>