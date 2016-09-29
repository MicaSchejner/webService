<?php
$url = "http://requestb.in/1euvuov1";
$data = file_get_contents("data.json");
$file = fopen("data.json","r");
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_PUT,true);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_INFILE,$file);
curl_setopt($curl,CURLOPT_INFILESIZE,strlen($data));
$result = curl_exec($curl);
curl_close($curl);
echo $result;

