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
  
<h1>ENVIAR FORMULARIO</h1>

<form name="form1" id="form1" action="01-Recibir-formulario-post.php" METHOD="post">
    
    <label for="nombre">Nombre:</label>
    <input type="text" name="cnom" required>
    <br><br>
    <label for="apellido">Apellido:</label>
    <input type="text" name="cape" required>
    <br><br>
    <input type="submit" value="Enviar">
    
</form>

</div>
 
</body>
</html>




