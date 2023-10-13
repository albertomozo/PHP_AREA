<?php
$server="localhost"; // Nuestro server mysql :puerto 
$database="Peliculas"; // Nuestra base de datos  
$dbpass="usuario1"; //Nuestro password mysql  
$dbuser="usuario1"; // Nuestro user mysql 
$mysqli = new mysqli($server, $dbuser, $dbpass, $database);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
