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
<p> $variable=$_REQUEST["name_input"]; // Se puede utilizar para recibir de get o post, en este 
caso es indiferente. Es una variable global.  </p>


<?php 
    
    // recibir datos
    $nombre=$_REQUEST["cnom"];
    $apellido=$_REQUEST["cape"];
    
    
    // mostrar datos
    echo "<p> Nombre: $nombre </p>"; // comprobar si llegan los datos
    echo "<p> Apellido: $apellido </p>";
    
    // si queremos ver el contenido de las variables que tenemos por GET, podemos ponerlo de esta manera
    
    print_r($_GET); 
    echo "<p> Campos enviados a través del formulario son: " .count($_GET)." </p>";
 
    
?>



<!-- OJOOOOO! Siempre que se envíe un dato por vínculo, necesito recoger los datos con el método GET -->


</div>
 
</body>
</html>




