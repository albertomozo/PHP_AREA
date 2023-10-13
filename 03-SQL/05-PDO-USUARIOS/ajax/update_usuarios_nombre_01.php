<?php
$server="localhost"; // Nuestro server mysql :puerto 
$database="conexiones"; // Nuestra base de datos  
$dbpass=""; //Nuestro password mysql  
$dbuser="root"; // Nuestro user mysql

$mysqli = new mysqli($server, $dbuser, $dbpass, $database);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$id=$_REQUEST['id'];
$nombre = $_REQUEST['valor'];
//echo " valores $id  $apellido";
$query = "UPDATE usuarios SET nombre='$nombre'  WHERE id=$id";
// echo $query;
$resultado = mysqli_query($mysqli,$query);
mysqli_close($mysqli);

?>
