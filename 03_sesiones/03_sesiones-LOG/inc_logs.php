<?php
$vsesion = 'nosesion';
if (session_id()!= null) { $vsesion=session_id();}
//$filename  = "logs/log-". $vsesion."-".date("Ymd").".txt";
$filename  = "logs/log-".date("Ymd").".txt";
$linea_ses = 'VAR SESION | ';
foreach ($_SESSION as $key => $valor ){
    $linea_ses .= "$key = $valor  | ";
}
// funcione sde manejo de archivo
$file = fopen($filename,"a");
$linea = $vsesion .';'. date("Y/m/d H:i:s") . ';' . $_SERVER['PHP_SELF'] . ';' .  $_SERVER['HTTP_USER_AGENT'] .";".$vsesion. ";". time() . ";". $linea_ses ."\r\n";
fwrite($file,$linea);
fclose($file);
?>