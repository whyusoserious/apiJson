<?php

$ch = require "init.php";
$check = $_GET['id'];

curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts/$check");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);

curl_close($ch);

$data=json_decode($response, true);

//if ($status_code !== 204) {
//    echo "Unexpected status code: $status_code";
//    exit;
//}
//var_dump($info);

var_dump($data);
echo "\n". $status_code;
?>