<?php session_start();

if(!isset($_SESSION["administracion"])){
    header("Location:19-form.php?ventrada=no");
} 

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administracion</title>
    <style>
        
        #container{
            width: 80%;
            margin: 0px auto;
            display: block;
            font-family: helvetica;
            padding-top: 60px;
        }
        body{
            background-color: aqua;
        }
    
    </style>
</head>
<body>


<div id="container">
    
    <h1>GESTOR DE CONTENIDOS</h1>
    <h2>Departamento de Administracion</h2>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam dolorem maxime alias, facere excepturi explicabo officiis id accusamus earum eveniet minima, atque assumenda dolores quo nesciunt voluptatem! Ipsum, inventore, optio?</p>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam dolorem maxime alias, facere excepturi explicabo officiis id accusamus earum eveniet minima, atque assumenda dolores quo nesciunt voluptatem! Ipsum, inventore, optio?</p>
    
    
    <br>
    <a href="19-form.php">SALIR</a>
    <br>
    <a href="19-cerrrar-sesion.php">CERRAR SESION</a>
    
</div>

</body>
</html>