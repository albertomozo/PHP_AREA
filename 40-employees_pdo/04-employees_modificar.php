<?php
include("inc_conexion.php");
//var_dump($_POST);
foreach ($_POST as $key => $value) {
    if ($key != 'submit'){
        $$key = $value;
        echo "$key => $value";
    } 
}
$id = $_GET['id'];
$campo = $_GET['campo'];
$value = $_GET['value'];
$query = "update employees set $campo = :value  where emp_no = :id ";
$sql = $mbd->prepare($query);
//$sql->bindParam(":campo", $campo);
$sql->bindParam(":id", $id,PDO::PARAM_INT);
$sql->bindParam(":value", $value,PDO::PARAM_STR);
$sql->execute();
if ($sql) { echo 'Ok'; } else { echo 'error';} ?>


