<?php

$respuesta = '';
$respuesta = '[server => [';
foreach ($_SERVER as $key => $valor){
    $respuesta .= "$key = '".$valor."',";
}
$respuesta .= ']';
$respuesta .= 'cookie => [';
foreach ($_COOKIE as $key => $valor){
    $respuesta .= "$key = '".$valor."',";
}
$respuesta .= ']';
$respuesta .= 'request => [';
foreach ($_REQUEST as $key => $valor){
    $respuesta .= "$key = '".$valor."',";
}
$respuesta .= 'post => [';
foreach ($_POST as $key => $valor){
    $respuesta .= "$key = '".$valor."',";
}
$respuesta .= ']';
$respuesta .= 'get => [';
foreach ($_GET as $key => $valor){
    $respuesta .= "$key = '".$valor."',";
}
$respuesta .= ']';
/* leo los header en php */
$headers = getallheaders();
//$headers = apache_request_headers();
$respuesta .= 'HEADERS => [';
foreach ($headers as $header => $value) {
    $respuesta .= "$header = '". $value .  "',";
}
$respuesta .= ']'; 
$respuesta .= ']';



echo $respuesta;