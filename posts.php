<?php

$idUser = $_GET['userId'];

$ch = require "init.php";

curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts?userId=$idUser");
$response = curl_exec($ch);
curl_close($ch);

$data=json_decode($response, true);

var_dump($data);


?>
<?php //require "html/header.html" ?>
<!---->
<!--        <h1>--><?//=$idUser?><!-- User posts</h1>-->
<!---->
<!--        <table>-->
<!--            <thead>-->
<!--                <tr>-->
<!--                    <th>id</th>-->
<!--                    <th>title</th>-->
<!--                    <th>body</th>-->
<!--                </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--                --><?php //foreach ($data as $user): ?>
<!---->
<!--                <tr>-->
<!--                    <td>--><?//= $user["id"] ?><!--</td>-->
<!--                    <td>--><?//= $user["title"] ?><!--</td>-->
<!--                    <td>--><?//= $user["body"] ?><!--</td>-->
<!--                </tr>-->
<!---->
<!--                --><?php //endforeach; ?>
<!--            </tbody>-->
<!--        </table>-->
<!---->
<!--    <a href="newpost.php?userId=--><?//= $idUser ?><!--">New post</a>-->
<!---->
<?php //require "html/footer.html"?>
