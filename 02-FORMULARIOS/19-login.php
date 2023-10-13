<?php session_start();
    $use=$_POST["cusu"];
    $psw=$_POST["cpas"];
    if($use=="admin" and $psw=="1234"){ 
        $_SESSION["administracion"]="si";
        header("Location:19-administracion.php");
            }else if ($use=="ventas" and $psw=="1212"){
            $_SESSION["ventas"]="si";
            header("Location:19-ventas.php");
                }else{
                    header("Location:19-form.php?ventrada=no");
                }
?>