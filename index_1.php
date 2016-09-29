<?php
$url = "http://www.google.com.ar";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$response = curl_exec($ch);
//var_dump($response);
curl_close($ch);