<?php session_start(); 
    $use=$_POST["cusu"];
    $psw=$_POST["cpas"];
    if($use=="area" and $psw=="1234"){ 
        $_SESSION["validado"]="ok";
        header("Location:18-zona-admin-SESSION.php");
    }else{
        header("Location:18-form-SESSION.php?ventrada=no");
    }
// en caso de que la contraseña sea correcta, se creará la variable "validado"   
?>