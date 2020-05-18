<!DOCTYPE html>
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
</head>

<?
$lineID = $_GET['lineID'];

$ch = curl_init('https://e-sport.in.th/ssdev/ecom/dashboard/api/member/memberlineid/' . $lineID);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',));

$result = curl_exec($ch);
curl_close($ch);
$resultData = json_decode($result, true);

$data = $resultData['data'];
$password = $data['password'];
$address = $data['address'];
$email = $data['email'];
$tel = $data['tel'];
$created = $data['created_at'];
$updated = $data['updated_at'];


?>

<body>
    <br>
    <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
        <div class="container" id="navbar-example2">
            <div class="card p-0 mb-5">
                <div class="card-body">
                    <div class="row bg-info">
                        <div class="col" align="center">
                            <img src="Images/catdog.jpg" class="img-thumbnail rounded-circle shadow p-0 m-0 bg-black rounded" width="40%">
                        </div>
                    </div>
                    <br>

                </div>
            </div>