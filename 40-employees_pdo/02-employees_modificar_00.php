<?php
include("inc_conexion.php");
//var_dump($_POST);
foreach ($_POST as $key => $value) {
    if ($key != 'submit'){
        $partes = explode("-", $key);
        $campo = $partes[0];
        $id=$partes[1];
        $valor = $value; 
    } 
}

$query = "update employees set $campo = :valor where emp_no = :id ";
$sql = $mbd->prepare($query);
//$sql->bindParam(":campo", $campo);
$sql->bindParam(":id", $id);
$sql->bindParam(":valor", $valor);
$sql->execute();
if ($sql) { echo 'Ok'; } else { echo 'error';} ?>
<a href="02-employees.php">Continuar</a>

