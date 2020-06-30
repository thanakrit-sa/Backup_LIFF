<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <nav class="navbar shadow navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="row">
            <div class="col-8">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="ค้นหาสินค้า...">
                    <div class="input-group-prepend">
                        <div class="input-group-text">ค้นหา</div>
                    </div>
                </div>
            </div>
            <div class="col-4 p-0 m-0" align="left">
                <div class="dropdown">
                    <button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        หมวดหมู่
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">เครื่องแต่งกาย</button>
                        <button class="dropdown-item" type="button">อุปกรณ์กีฬา</button>
                        <button class="dropdown-item" type="button">ท่องเที่ยว</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <div class="container p-0 mt-5">
        <div class="card p-0 m-0 bg-light" align="center">
            <div class="card-body p-0 m-0 scroll">
                <div class="row p-0 m-0">
                    <div class="col-6 p-0 m-0" align="center">
                        <a style="text-decoration:none; color:black" href="../Product/product_1.php">
                            <div class="card mt-2 ml-2 mr-1 mb-2 p-0 shadow bg-white">
                                <div class="card-body p-0 m-0">
                                    <div class="row p-0 m-0">
                                        <div class="col p-0 m-0">
                                            
                                                    <img src="<?=$prod_image[3]?>" class="p-0 m-0" id="img-product">
                                                    <div class="inner_position_right">
                                                        <article class="ribbon red">
                                                            -50%
                                                        </article>
                                                    </div>

                                            
                                        </div>
                                    </div>
                                    <article class="row p-1 m-1">
                                        <div class="col p-1" align="left">
                                            <strong style="font-size: 12px;"><?=$prod_name[3]?></strong> <br>
                                            <b style="font-size: 18px; color:rgb(235, 105, 19);">฿<?=$prod_price[3]?>.00</b> <br>
                                            <div>
                                                <s>฿1,659.00</s>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 p-0 m-0" align="center">
                        <a style="text-decoration:none; color:black" href="https://getbootstrap.com/docs/4.0/components/card/?">
                            <div class="card mt-2 ml-2 mr-1 mb-2 p-0 shadow bg-white">
                                <div class="card-body p-0 m-0">
                                    <div class="row p-0 m-0">
                                        <div class="col p-0 m-0">
                                           
                                                    <img src="<?=$prod_image[4]?>" class="p-0 m-0" id="img-product">
                                                    <div class="inner_position_right">
                                                        <article class="ribbon red">
                                                            -50%
                                                        </article>
                                                    </div>

                                             
                                        </div>
                                    </div>
                                    <article class="row p-1 m-1">
                                        <div class="col p-1" align="left">
                                            <strong style="font-size: 12px;"><?=$prod_name[4]?></strong> <br>
                                            <b style="font-size: 18px; color:rgb(235, 105, 19);">฿<?=$prod_price[4]?>.00</b> <br>
                                            <s>฿1,659.00</s>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row p-0 m-0">
                    <div class="col-6 p-0 m-0" align="center">
                        <a style="text-decoration:none; color:black" href="https://getbootstrap.com/docs/4.0/components/card/?">
                            <div class="card mt-2 ml-2 mr-1 mb-2 p-0 shadow bg-white">
                                <div class="card-body p-0 m-0">
                                    <div class="row p-0 m-0">
                                        <div class="col p-0 m-0">
                                            
                                                
                                                    <img src="<?=$prod_image[5]?>" class="p-0 m-0" id="img-product">
                                                    <div class="inner_position_right">
                                                        <article class="ribbon red">
                                                            -50%
                                                        </article>
                                                    </div>

                                                
                                            
                                        </div>
                                    </div>
                                    <article class="row p-1 m-1">
                                        <div class="col p-1" align="left">
                                            <strong style="font-size: 12px;"><?=$prod_name[5]?></strong> <br>
                                            <b style="font-size: 18px; color:rgb(235, 105, 19);">฿<?=$prod_price[5]?>.00</b> <br>
                                            <s>฿1,659.00</s>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 p-0 m-0" align="center">
                        <a style="text-decoration:none; color:black" href="https://getbootstrap.com/docs/4.0/components/card/?">
                            <div class="card mt-2 ml-2 mr-1 mb-2 p-0 shadow bg-white">
                                <div class="card-body p-0 m-0">
                                    <div class="row p-0 m-0">
                                        <div class="col p-0 m-0">
                                            
                                                    <img src="https://s.isanook.com/he/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2hlLzAvdWQvMy8xODg0MS9hc3Ryb25hdXQuanBn.jpg" class="p-0 m-0" id="img-product">
                                                    <div class="inner_position_right">
                                                        <article class="ribbon red">
                                                            -50%
                                                        </article>
                                                    </div>

                                           
                                        </div>
                                    </div>
                                    <article class="row p-1 m-1">
                                        <div class="col p-1" align="left">
                                            <strong style="font-size: 12px;">ชื่อสินค้า</strong> <br>
                                            <b style="font-size: 18px; color:rgb(235, 105, 19);">฿1,459.00</b> <br>
                                            <s>฿1,659.00</s>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row p-0 m-0">
                    <div class="col-6 p-0 m-0" align="center">
                        <a style="text-decoration:none; color:black" href="https://getbootstrap.com/docs/4.0/components/card/?">
                            <div class="card mt-2 ml-2 mr-1 mb-2 p-0 shadow bg-white">
                                <div class="card-body p-0 m-0">
                                    <div class="row p-0 m-0">
                                        <div class="col p-0 m-0">
                                          
                                                    <img src="https://s.isanook.com/he/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2hlLzAvdWQvMy8xODg0MS9hc3Ryb25hdXQuanBn.jpg" class="p-0 m-0" id="img-product">
                                                    <div class="inner_position_right">
                                                        <article class="ribbon red">
                                                            -50%
                                                        </article>
                                                    </div>

                                            
                                        </div>
                                    </div>
                                    <article class="row p-1 m-1">
                                        <div class="col p-1" align="left">
                                            <strong style="font-size: 12px;">ชื่อสินค้า</strong> <br>
                                            <b style="font-size: 18px; color:rgb(235, 105, 19);">฿1,459.00</b> <br>
                                            <s>฿1,659.00</s>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 p-0 m-0" align="center">
                        <a style="text-decoration:none; color:black" href="https://getbootstrap.com/docs/4.0/components/card/?">
                            <div class="card mt-2 ml-2 mr-1 mb-2 p-0 shadow bg-white">
                                <div class="card-body p-0 m-0">
                                    <div class="row p-0 m-0">
                                        <div class="col p-0 m-0">
                                       
                                                    <img src="https://s.isanook.com/he/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2hlLzAvdWQvMy8xODg0MS9hc3Ryb25hdXQuanBn.jpg" class="p-0 m-0" id="img-product">
                                                    <div class="inner_position_right">
                                                        <article class="ribbon red">
                                                            -50%
                                                        </article>
                                                    </div>

                                            
                                        </div>
                                    </div>
                                    <article class="row p-1 m-1">
                                        <div class="col p-1" align="left">
                                            <strong style="font-size: 12px;">ชื่อสินค้า</strong> <br>
                                            <b style="font-size: 18px; color:rgb(235, 105, 19);">฿1,459.00</b> <br>
                                            <s>฿1,659.00</s>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row p-0 m-0">
                    <div class="col-6 p-0 m-0" align="center">
                        <a style="text-decoration:none; color:black" href="https://getbootstrap.com/docs/4.0/components/card/?">
                            <div class="card mt-2 ml-2 mr-1 mb-2 p-0 shadow bg-white">
                                <div class="card-body p-0 m-0">
                                    <div class="row p-0 m-0">
                                        <div class="col p-0 m-0">
                                       
                                                    <img src="https://s.isanook.com/he/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2hlLzAvdWQvMy8xODg0MS9hc3Ryb25hdXQuanBn.jpg" class="p-0 m-0" id="img-product">
                                                    <div class="inner_position_right">
                                                        <article class="ribbon red">
                                                            -50%
                                                        </article>
                                                    </div>

                                            
                                    
                                        </div>
                                    </div>
                                    <article class="row p-1 m-1">
                                        <div class="col p-1" align="left">
                                            <strong style="font-size: 12px;">ชื่อสินค้า</strong> <br>
                                            <b style="font-size: 18px; color:rgb(235, 105, 19);">฿1,459.00</b> <br>
                                            <s>฿1,659.00</s>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 p-0 m-0" align="center">
                        <a style="text-decoration:none; color:black" href="https://getbootstrap.com/docs/4.0/components/card/?">
                            <div class="card mt-2 ml-2 mr-1 mb-2 p-0 shadow bg-white">
                                <div class="card-body p-0 m-0">
                                    <div class="row p-0 m-0">
                                        <div class="col p-0 m-0">
                        
                                                    <img src="https://s.isanook.com/he/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2hlLzAvdWQvMy8xODg0MS9hc3Ryb25hdXQuanBn.jpg" class="p-0 m-0" id="img-product">
                                                    <div class="inner_position_right">
                                                        <article class="ribbon red">
                                                            -50%
                                                        </article>
                                                    </div>

                                            
                                      
                                        </div>
                                    </div>
                                    <article class="row p-1 m-1">
                                        <div class="col p-1" align="left">
                                            <strong style="font-size: 12px;">ชื่อสินค้า</strong> <br>
                                            <b style="font-size: 18px; color:rgb(235, 105, 19);">฿1,459.00</b> <br>
                                            <s>฿1,659.00</s>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-lg" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
            </button>
        </div>
    </div>
</body>

</html>