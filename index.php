<?php
$url = "http://www.google.com.ar";
$curl = curl_init(); //Inicializar un curl
//Opciones
curl_setopt($curl,CURLOPT_URL, $url);

//Ejecutamos
curl_exec($curl);

//Cerrar el curl
curl_close($curl);
