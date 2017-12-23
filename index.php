<?php
$request = "";
$endpointURL = "https://jsonplaceholder.typicode.com/posts?"  .$request ;
$isRequestHeader = FALSE;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $endpointURL);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);
print_r($result);
?>