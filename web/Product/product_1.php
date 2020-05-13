<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product1</title>
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
</head>

<body>
    <div class="container">
        <div class="row">
            <div clss="col">
                <div class="row">
                    <div class="col p-0">
                        <img src="https://www.bnn.in.th/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/S/a/Samsung-Tablet-Galaxy-Tab-S6-Lite-4_2B64GB-Wi-Fi-SM-P610NZIATHL-Chiffon-Pink-1-1588867299.jpg" id="expandedImg" style="width: 100%; height: 100%;">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col p-0">
                        <img src="https://www.bnn.in.th/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/S/a/Samsung-Tablet-Galaxy-Tab-S6-Lite-4_2B64GB-Wi-Fi-SM-P610NZIATHL-Chiffon-Pink-1-1588867299.jpg" class="img-thumbnail p-0 mt-0"
                            onclick="myFunction(this);">
                    </div>
                    <div class="col px-1">
                        <img src="https://www.bnn.in.th/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/S/a/Samsung-Tablet-Galaxy-Tab-S6-Lite-4_2B64GB-Wi-Fi-SM-P610NZIATHL-Chiffon-Pink-3-1588867300.jpg" class="img-thumbnail p-0 mt-0"
                            onclick="myFunction(this);">
                    </div>
                    <div class="col p-0">
                        <img src="https://www.bnn.in.th/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/S/a/Samsung-Tablet-Galaxy-Tab-S6-Lite-4_2B64GB-Wi-Fi-SM-P610NZIATHL-Chiffon-Pink-4-1588867301.jpg" class="img-thumbnail p-0 mt-0"
                            onclick="myFunction(this);">
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