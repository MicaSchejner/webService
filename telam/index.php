<?php
$curl = curl_init();
curl_setopt_array($curl, Array(
	CURLOPT_URL => 'http://www.telam.com.ar/rss2/deportes.xml',
	CURLOPT_TIMEOUT => 120,
	CURLOPT_CONNECTTIMEOUT => 30,
	CURLOPT_RETURNTRANSFER => TRUE,
	CURLOPT_ENCODING => 'UTF-8'
));

$data = curl_exec($curl);
curl_close($curl);


$xml = simplexml_load_string($data,"SimpleXMLElement",LIBXML_NOCDATA);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Telam</title>
	<meta charset="UTF-8" />
</head>
<body>
	<?php foreach($xml->channel->item as $item){
		echo "<h2>" . $item->title . "</h2>";
		echo "<p> Creado: " . $item->pubDate . "</p>";
		echo "<p>Autor: No Especificado </p>";
		echo "<p>" . $item->description ."</p>";
		echo "<p><a href='". $item->link ."'>Leer Mas... " . $item->title . "</a></p>";
	} 
	?>
	<br>
	<hr>
	
</body>
</html>
