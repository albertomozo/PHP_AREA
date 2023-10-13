<?php
$curl = curl_init();
$url = "http://localhost/php/05-API/curl/api/respuesta.php";
//$url = 'http://localhost/php/05-API/curl/api/probar_curl.php';
curl_setopt($curl, CURLOPT_URL, $url);




$cabeceras = array(
    'Content-Type: application/json',
    'Personalizado: ¡Hola mundo!', # Un encabezado personalizado
);


curl_setopt($curl, CURLOPT_POSTFIELDS, "nombre=Alberto&apellido=Mozo");
curl_setopt($curl, CURLOPT_PORT, '80');
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // sigue los header location
curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl, CURLOPT_TIMEOUT, 30);


curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
/* añadimos header */
curl_setopt($curl, CURLOPT_HTTPHEADER,$cabeceras); 
$response   = curl_exec($curl);
$curl_errno = curl_errno($curl);
curl_close($curl);
print_r( $response);
?>