<?php
$dbname='conexiones';
$usuario='root';
$clave='';
$mbd = new PDO('mysql:host=localhost;dbname='.$dbname, $usuario, $clave);
$id=$_GET['id'];
$nombre = $_GET['valor'];
echo " valores $id  $nombre";

$query = 'UPDATE usuarios SET nombre=:nombre WHERE id=:id';
$resultado = $mbd ->prepare($query) ;
// ejecuto la preparacion de la query
$resultado ->bindValue(":nombre",$nombre);
$resultado ->bindvalue(":id",$id);
$Exec = $resultado -> execute();
$mbd = null; // cerrar conexion 
?>
