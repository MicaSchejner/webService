<?php
$data = array(
	"keyAutorizacion" => "abcdefg1234",
	"emailRegistrado" => "hola@hola",
	"comentario" => "Este es un comentario",
	"cuotaPagada" => "true"
);

$url = "http://requestb.in/1awrb1u1";
$datos = json_encode($data);

function sendPostData($url,$datos){
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"POST"); 
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$datos); 	
	
	$result = curl_exec($ch);
	curl_close($ch);
	
	return $result;
}

echo sendPostData($url,$datos);

