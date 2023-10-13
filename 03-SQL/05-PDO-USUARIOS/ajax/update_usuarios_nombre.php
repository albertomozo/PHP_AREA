<?php
try {
$dbname='conexiones';
$usuario='root';
$clave='';
$mbd = new PDO('mysql:host=localhost;dbname='.$dbname, $usuario, $clave);
$id=$_REQUEST['id'];
$nombre = $_REQUEST['valor'];
//echo " valores $id  $apellido";

$query = 'UPDATE usuarios SET nombre=:nombre WHERE id=:id';
$resultado = $mbd ->prepare($query) ;
// ejecuto la preparacion de la query
$resultado ->bindValue(":$campo",$nombre);
$resultado ->bindvalue(":id",$id);
$Exec = $resultado -> execute();
$mbd = null; // cerrar conexion
} catch (PDOException $e) {
    //print_r($mbd->query($query));
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
