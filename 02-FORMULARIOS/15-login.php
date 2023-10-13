<?php 
    $use=$_POST["cusu"];
    $psw=$_POST["cpas"];
    if($use!="area" or $psw!="1234"){ 
        header("Location:15-form.php?ventrada=no");
    }else{
        header("Location:15-zona-admin.php?vsalida=si");
    }

/*
Este archivo no tiene que contener ningun html porque no se va a visualizar nada. 
Es un archivo invisible, el usuario no va a ver nada.

Tambien se puede poner:
if($_POST["cusu"]!="area" or $_POST["cpas"]!="1234"){

Antes de header no se puede poner ningun comentario

*/
    
?>