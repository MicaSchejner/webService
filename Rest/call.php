<?php 
$ch = curl_init();

//$url = "http://estimaciones/webServices/clase_4/api.php?x=customers";
//$url = "http://estimaciones/webServices/clase_4/api.php?x=customer&id=103";
$url = "http://estimaciones/webServices/clase_4/api.php?x=insertCustomer";
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($curl, CURLOPT_POST, 0);

$data = array(
	"nombreCliente" => "Jose",
	"email" => "hola@hola",
	"ciudad" => "CABA",
	"direccion" => "Vera 775",
	"pais" => "Argentina"
);
$datos = json_encode($data);
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"POST"); 
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$datos); 
$result = curl_exec($ch);
curl_close($ch);

var_dump($result);