<?php
$url="http://requestb.in/14aab4c1";

$data = "Hola Mundo";

$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_POST,true);
curl_setopt($curl,CURLOPT_POSTFIELDS,$data);

$response = curl_exec($curl);
curl_close($curl);
echo $response;
