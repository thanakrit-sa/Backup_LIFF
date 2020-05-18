<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style_profile.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head> -->
<!-- 

<body>
    <br>
    <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
        <div class="container" id="navbar-example2">
            <div class="card p-0 mb-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col" align="center">
                            <img src="catdog.jpg" class="rounded-circle shadow p-0 m-0 bg-black rounded" width="50%">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col" align="center">
                            <div class="data">
                                <b>Mr. David Richard</b> <br>
                                Programmer
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col" align="center">
                            <div class="data">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit aspernatur nobis
                                magni
                                commodi. Iste illum nesciunt dolores doloremque fuga sit.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="footer_allpage">
                <div class="row" align="center">
                    <div class="col-4">
                        <a href="https://www.facebook.com"><button type="button" class="btn btn-dark px-3 m-0">
                                <i class='fab fa-facebook-square' style='font-size:40px'></i>
                            </button></a>
                    </div>
                    <div class="col-4">
                        <a href="https://www.gmail.com"><button type="button" class="btn btn-dark px-3 m-0">
                                <i class='fas fa-envelope' style='font-size:40px'></i>
                            </button></a>
                    </div>
                    <div class="col-4">
                        <button type="button" class="btn btn-dark px-3 m-0" data-toggle="modal" data-target="#contactModal">
                            <i class='fas fa-address-card' style='font-size:40px'></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header modal-dark">
                <h5 class="modal-title" id="exampleModalLabel">Contact Panel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-2" align="right">
                        <i class='fas fa-hotel' style='font-size:25px; padding-top: 10px;'></i>
                    </div>
                    <div class="col-10" align="left">
                        Lorem ipsum, dolor sit amet consectetur.
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col-2" align="right">
                        <i class='fas fa-phone-square' style='font-size:30px;'></i>
                    </div>
                    <div class="col-10" align="left">
                        098-765-4321 , 02-345-6789
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark btn-block" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div> -->
<?
$line_userid = $_GET['lineID'];
$data_string = json_encode($line_userid);

$ch = curl_init('https://e-sport.in.th/ssdev/ecom/dashboard/api/member/memberlineid/line_userid');

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',));

$result = curl_exec($ch);
curl_close($ch);
echo $result;

