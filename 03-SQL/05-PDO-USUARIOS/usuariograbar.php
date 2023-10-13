<?php
include('usuariosconfig.php');
// recogemos las variables
$id=0;
if (isset($_REQUEST['id'])) {$id=$_REQUEST['id'];}
$accion = $_REQUEST['accion'];
$nombre = $_REQUEST['nombre'];
$apellidos = $_REQUEST['apellidos'];
$login = $_REQUEST['login'];
$clave = $_REQUEST['clave'];
$email = $_REQUEST['email'];
$tipo = $_REQUEST['tipo'];

//$query = 'INSERT INTO usuarios (nombre,apellidos,login,password,email,tipo) values (:nombre,:apellidos,:login,:password,:email,:tipo)' ;

try {
    include("usuarioconexion.php");
    if ($accion=='Insertar') {
        $query = 'INSERT INTO usuarios (nombre,apellidos,login,password,email,tipo) values (:nombre,:apellidos,:login,:password,:email,:tipo)' ;
    } else {
        $query = 'UPDATE usuarios SET nombre=:nombre, apellidos=:apellidos, login=:login, password=:password,email=:email, tipo=:tipo WHERE id=:id';
    }
    $resultado = $mbd->prepare($query) ;
    // ejecuto la preparacion de la query
    
   
    $resultado ->bindValue(":nombre",$nombre);
    $resultado ->bindValue(":apellidos",$apellidos);
    $resultado ->bindValue(":login",$login);
    $resultado ->bindValue(":password",$clave);
    $resultado ->bindValue(":email",$email);
    $resultado ->bindValue(":tipo",$tipo);
    if ($accion <> 'Insertar') { 
        $resultado ->bindvalue(":id",$id);
        echo 'entro modifcar' . $id;
    }
    $Exec = $resultado -> execute();
    //print_r($mbd->query($query));

    $mbd = null; // cerrar conexion

} catch (PDOException $e) {
    //print_r($mbd->query($query));
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
//echo $query;

?>
<a href="usuariolistado.php">ver usuarios</a>