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
$name = $data['username'];
$password = $data['password'];
$address = $data['address'];
$email = $data['email'];
$tel = $data['tel'];
$created = $data['created_at'];
$updated = $data['updated_at'];


?>

<body>
    <br>
    <div class="container">
        <div class="card bg-danger shadow" style="border-radius: 20% 20% 0% 0%; color: white">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <img src="Images/catdog.jpg" class="img-thumbnail shadow rounded-circle shadow">
                    </div>
                    <div class="col-8">
                        <b>Hi! <?= $name ?></b><br>
                        Lorem ipsum dolor sit amet, consectetur.
                    </div>
                </div>
            </div>
            <br>
            <div class="card shadow mt-1">
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>