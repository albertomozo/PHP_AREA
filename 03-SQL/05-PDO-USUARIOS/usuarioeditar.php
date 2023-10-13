<?php
include('usuariosconfig.php');
$id = $_REQUEST['id'];

$accion = 'Modificar'; // vamos a modificar
include("usuarioconexion.php");
// selecionamos el registro por id
$query = "SELECT * from usuarios where id =:id" ;
$resultado = $mbd->prepare($query) ;
//print_r($mbd->query($sql));// ver query
$resultado ->bindvalue(":id",$id);
$Exec = $resultado -> execute();
$fila = $resultado->fetch();
$nombre = $fila['nombre'];
$apellidos = $fila['apellidos'];;
$login = $fila['login'];
$clave=$fila['password'];
$email=$fila['email'];
$tipo = $fila['tipo'];

include("usuariosform.php");
?>