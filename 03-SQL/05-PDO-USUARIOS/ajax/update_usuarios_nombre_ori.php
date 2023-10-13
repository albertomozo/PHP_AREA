<?php
$dbname='conexiones';
$usuario='root';
$clave='';
$mbd = new PDO('mysql:host=localhost;dbname='.$dbname, $usuario, $clave);
$id=$_REQUEST['id'];
$apellidos = $_REQUEST['apellidos'];
$campo = $_REQUEST['campo'];
echo " valores $id  $apellido";

$query = 'UPDATE usuarios SET '.$campo.'=:' . $campo .'WHERE id=:id';
$resultado = $mbd ->prepare($query) ;
// ejecuto la preparacion de la query
$resultado ->bindValue(":$campo",$apellidos);
$resultado ->bindvalue(":id",$id);
$Exec = $resultado -> execute();
$mbd = null; // cerrar conexion 
?>
