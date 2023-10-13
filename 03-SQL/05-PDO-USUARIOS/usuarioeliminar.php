<?php
include('usuariosconfig.php');
$id = $_REQUEST['id'];
    include("usuarioconexion.php");
    echo $query = "delete from usuarios where id =:id" ;
    $resultado = $mbd->prepare($query) ;
    $resultado ->bindvalue(":id",$id);
    $Exec = $resultado -> execute();
    header("location:usuariolistado.php");
    
?>