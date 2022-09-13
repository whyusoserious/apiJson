<?php

$ch = require "init.php";

curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/users");

$response = curl_exec($ch);
curl_close($ch);

$data=json_decode($response, true);
var_dump($data);
?>
<?php //require "html/header.html" ?>
<!---->
<!--        <h1>Users</h1>-->
<!---->
<!--        <table>-->
<!--            <thead>-->
<!--                <tr>-->
<!--                    <th>id</th>-->
<!--                    <th>name</th>-->
<!--                    <th>username</th>-->
<!--                    <th>posts</th>-->
<!--                    <th>to-Dos</th>-->
<!--                    <th>email</th>-->
<!--                    <th>street</th>-->
<!--                    <th>suite</th>-->
<!--                    <th>city</th>-->
<!--                    <th>zipcode</th>-->
<!--                    <th>lat</th>-->
<!--                    <th>lng</th>-->
<!--                    <th>phone</th>-->
<!--                    <th>website</th>-->
<!--                    <th>company name</th>-->
<!--                    <th>catchPhrase</th>-->
<!--                    <th>bs</th>-->
<!--                </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--                --><?php //foreach ($data as $user): ?>
<!---->
<!--                <tr>-->
<!--                    <td>--><?//= $user["id"] ?><!--</td>-->
<!--                    <td>--><?//= $user["name"] ?><!--</td>-->
<!--                    <td>--><?//= $user["username"] ?><!--</td>-->
<!--                    <td>-->
<!--                        <a href="posts?userId=--><?//= $user["id"]?><!--">-->
<!--                            See all posts-->
<!--                        </a>-->
<!--                    </td>-->
<!---->
<!--                    <td>-->
<!--                        <a href="todos?userId=--><?//= $user["id"]?><!--">-->
<!--                            This is my to-dos!-->
<!--                        </a>-->
<!--                    </td>-->
<!---->
<!--                    <td>--><?//= $user["email"] ?><!--</td>-->
<!--                    <td>--><?//= $user["address"]["street"] ?><!--</td>-->
<!--                    <td>--><?//= $user["address"]["suite"] ?><!--</td>-->
<!--                    <td>--><?//= $user["address"]["city"] ?><!--</td>-->
<!--                    <td>--><?//= $user["address"]["zipcode"] ?><!--</td>-->
<!--                    <td>--><?//= $user["address"]["geo"]["lat"] ?><!--</td>-->
<!--                    <td>--><?//= $user["address"]["geo"]["lng"] ?><!--</td>-->
<!--                    <td>--><?//= $user["phone"] ?><!--</td>-->
<!--                    <td>--><?//= $user["website"] ?><!--</td>-->
<!--                    <td>--><?//= $user["company"]["name"] ?><!--</td>-->
<!--                    <td>--><?//= $user["company"]["catchPhrase"] ?><!--</td>-->
<!--                    <td>--><?//= $user["company"]["bs"] ?><!--</td>-->
<!--                </tr>-->
<!---->
<!--                --><?php //endforeach; ?>
<!--            </tbody>-->
<!--        </table>-->
<?php //require "html/footer.html"?>