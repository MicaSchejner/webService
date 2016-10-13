<?php 
ini_set("soap.wsdl_cache_enabled","0");
$soap = new SoapClient("http://127.0.0.1/soap/service.wsdl");
$saludo = $soap->saludar("Christian",35);

echo $saludo;
echo "<hr />";

$metodo2 = $soap->getAlumno("hola","que tal");

echo $metodo2;

echo "<hr />";

