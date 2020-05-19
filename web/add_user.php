<?

$name = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$lineID = $_POST['lineID'];

$data = array(
    "id" => "",
    "username" => "$name", 
    "password" => "$password",
    "address" => "$address",
    "email" => "$email",
    "tel" => "$tel",
    // "line_userid" => "$lineID"
    "line_userid" => "LineID1"

);
$data_string = json_encode($data);
echo $data_string;

$ch = curl_init('https://e-sport.in.th/ssdev/ecom/dashboard/api/member/register');
 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',));
 
$result = curl_exec($ch);
curl_close($ch);

if ($data["resultMgs"] == "Unsuccessfully") {
    header("Location: register.php?lineID=$lineID");
    exit;
} else {
    header("Location: profile.php?lineID=$lineID");;
}