<?php

  $MobileNo=$_REQUEST['k1'];
  $OTP=$_REQUEST['k2'];


  
  $fields = array(
      "sender_id" => "FSTSMS",
      "message" => "One Time Password(OTP) for registration in Fine Alert System is \"$OTP\".",
      "language" => "english",
      "route" => "p",
      "numbers" => "$MobileNo",
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
      "authorization: P94NZl5p0O1f6qLKvIXosimzxaYnc2MSTHwEr3DFdjQ8WVUGJb2kj83rl7BqMJpVwyzOHdGA0LhC54na",
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
?>