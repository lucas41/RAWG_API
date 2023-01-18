<?php

$id = $_GET['id'];

$key = "038cc080e6164da5bd9149a5c8d00be7";
$api = curl_init("https://api.rawg.io/api/platforms/".$id."?key=" . $key);
curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($api);
curl_close($api);
$json = json_decode($response);

echo $json->name;

echo $json->description;

