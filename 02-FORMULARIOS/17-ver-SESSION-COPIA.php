<?php session_cache_expire(2);
session_start();
?>
<!-- esto tiene que ir arriba del todo y todas las páginas necesitan tenerlo -->


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Enviar datos por vínculo</title>
    <style>
        
        #container{
            width: 80%;
            margin: 0px auto;
            display: block;
            font-family: helvetica;
            padding-top: 60px;
        }
    
    </style>
</head>
<body>


<div id="container">
    
    <h1>VER VARIABLES DE SESIÓN</h1>
    
    <?php
      
            $dia=$_SESSION["dia"]; // bajar
            echo "<p> $dia </p>"; // mostrar
      
    
            $u=$_SESSION["usuario"];// bajar
            echo "<p> $u </p>"; // mostrar
     
        
 // echo "<p> $nombre </p>"; //sale error porque es una variable local
    
    ?>
    
</div>

</body>
</html>