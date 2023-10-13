<?php
$curl = curl_init();
//$url = "http://www.netveloper.com";
//$url = "https://alm-area.com/lanbide2022/";
$url = 'http://www.google.com';
curl_setopt($curl, CURLOPT_URL, $url);
//curl_setopt($curl, CURLOPT_POSTFIELDS, "");
curl_setopt($curl, CURLOPT_PORT, '80');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // sigue los header location
/*curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl, CURLOPT_TIMEOUT, 30);
curl_setopt($curl, CURLOPT_HEADER, 'Content-Type: application/html');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
 */
$response   = curl_exec($curl);
$curl_errno = curl_errno($curl);
curl_close($curl);
print_r( $response);
?>