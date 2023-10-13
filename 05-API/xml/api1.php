<?php
//echo $ip = $_SERVER['REMOTE_ADDR'];
$ip = $_GET['id'];
$url = "https://api.ipgeolocationapi.com/geolocate/$ip";
$resultado = file_get_contents($url);
echo '<h3>JSON</H3>';
echo $resultado;
$iplocation = json_decode($resultado);
echo '<h3>JSON decode</H3>';
print_r ($iplocation);
$continente = $iplocation->continent;
echo " El continente de la Ip es $continente";

?>