<?php
header("Content-Type:undefined");


$server="localhost"; // Nuestro server mysql :puerto 
$database="conexiones"; // Nuestra base de datos  
$dbpass=""; //Nuestro password mysql  
$dbuser="root"; // Nuestro user mysql

$mysqli = new mysqli($server, $dbuser, $dbpass, $database);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$id= $_REQUEST['id'];
$nombre = $_REQUEST['valor'];
$campo = $_REQUEST['campo']; 


$query = "UPDATE usuarios SET $campo ='". $valor ."'  WHERE id=$id";
// echo $query;
$resultado = mysqli_query($mysqli,$query); 
mysqli_close($mysqli);

?>
