<?php

$return = array();
$receiver_gcms=["dUuAS2Ec1H8:APA91bEjcXPYiV5lINdcFcn0zcycbsZBcd-E3zthMtAY4FhlDWKi7TVPJIYTF3it1C05o0LbWLYps-XTzQH0alulGlzwmIO1B0aN9hmzBobtYvwvBEBq4gPd1jDJpQbv4_aH1cHimPeF"];
$messageToSend=array("message"=>"Hello");
$messageKey = time();

$url = 'https://android.googleapis.com/gcm/send';

$fields = array('registration_ids' => $receiver_gcms,

'collapse_key'=>"$messageKey",

'time_to_live'=>2419200,

'delay_while_idle'=>true,

'data' => $messageToSend);

$GOOGLE_API_KEY="AAAAPqwGCw0:APA91bEmW6vyAixDCyzAmrYqMxmWbSZwc6qnsWOFqL_4FnrJNVjkDf-Q2X-eEhOg7uZw4DOa3xLvsUWlouKmBg-zFT-ops2R4ENLL_oDYIeVMT6RSabHc4YQVXeYLlWxe_HP1X-TEjrOgeuYD4_smTBsZNjK1-h3jw";
$headers = array('Authorization: key=AAAAPqwGCw0:APA91bEmW6vyAixDCyzAmrYqMxmWbSZwc6qnsWOFqL_4FnrJNVjkDf-Q2X-eEhOg7uZw4DOa3xLvsUWlouKmBg-zFT-ops2R4ENLL_oDYIeVMT6RSabHc4YQVXeYLlWxe_HP1X-TEjrOgeuYD4_smTBsZNjK1-h3jw', 'Content-Type: application/json');



$ch = curl_init();



curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));



$result = curl_exec($ch);

if ($result === FALSE) {

$return = array("error" => 'Curl failed: '. curl_error($ch));

} else {
echo $result;
$return = (array) json_decode($result);

}

curl_close($ch);


?>