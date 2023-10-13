<?php
/* $url = 'https://api.github.com/users/albertomozo/followers';
$dato = file_get_contents($url);
echo $dato; */


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.github.com/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_SSL_VERIFYHOST => false,
  CURLOPT_USERAGENT=> 'Amozo/1.0',
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


?>