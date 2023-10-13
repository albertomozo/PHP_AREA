<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 01</title>
    <style>
        
        #container{
            padding: 80px;
            font-family: helvetica;
        }
    
    </style>
</head>
<body>

<div id="container">
  
<h1>RECIBIR FORMULARIO</h1>

<p> $variable=$_POST["name_input"]; // se llama variable global </p>


<?php 
    
 
    // recibir datos
    $nombre=$_POST["cnom"];
    $apellido=$_POST["cape"];
    
    
    // mostrar datos
    echo "<p> Nombre: $nombre </p>"; // comprobar si llegan los datos
    echo "<p> Apellido: $apellido </p>";


?>

</div>
 
</body>
</html>




