<?php

$ch = require "init.php";

$headers = [
    'Content-Type: application/json'
];

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts/{$_POST['id']}");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($_POST));


$response = curl_exec($ch);
//$info = curl_getinfo($ch);
$status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);

curl_close($ch);

$data=json_decode($response, true);

//if ($status_code === 422) {
//    echo "Invalid data";
//    exit;
//}

//if ($status_code !== 200) {
//    echo "Unexpected status code: $status_code";
//    exit;
//}
//var_dump($info);

echo $status_code . "\n";
var_dump($data);
?>