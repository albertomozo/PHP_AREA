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

$query = "update employees set first_name = :valor where emp_no = :id ";
$sql = $mbd->prepare($query);
$sql->bindParam(":id", $id);
$sql->bindParam(":valor", $valor);
$sql->execute();
header("location:02-employees.php");
/* if ($sql) { echo 'Ok'; } else{echo 'error';}  */
?>
<!-- <a href="02-employees.php">Continuar</a> -->

