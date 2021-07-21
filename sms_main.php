<?php
	
$OTP=$_REQUEST['k1'];
$mobileNo=$_REQUEST['k2'];	

require('../textlocal.class.php');

$textlocal = new Textlocal('demo@txtlocal.com', 'apidemo123');

$numbers = $mobileNo;
$sender = 'Textlocal';
$message = 'This is a message $OTP';

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
    echo "<script>alert('Done')</script>"
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>

<?php

$fields = array(
    "sender_id" => "FSTSMS",
    "message" => "This is Test message",
    "language" => "english",
    "route" => "p",
    "numbers" => "8888888888,7777777777",
    "flash" => "1"
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: aNtKDPGpIERhZOd6eCz0jTYwM5rBFcvq4U18Qbf97LkHsWSuxlK0Gwn3rQEoSOubRzhy47NXCDLTHiAF",
    "accept: /",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}