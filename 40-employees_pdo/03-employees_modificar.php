<?php
include("inc_conexion.php");
//var_dump($_POST);
foreach ($_POST as $key => $value) {
    if ($key != 'submit'){
        $$key = $value;  // $key = first_name => $first_name = 'Juan';
        echo "$key => $value";
    } 
}

$query = "update employees set first_name = :first_name , last_name= :last_name  where emp_no = :id ";
$sql = $mbd->prepare($query);
//$sql->bindParam(":campo", $campo);
$sql->bindParam(":id", $id,PDO::PARAM_INT);
$sql->bindParam(":first_name", $first_name,PDO::PARAM_STR);
$sql->bindParam(":last_name", $last_name,PDO::PARAM_STR);
$sql->execute();
if ($sql) { echo 'Ok'; } else { echo 'error';} ?>
<a href="03-employees.php">Continuar</a>

