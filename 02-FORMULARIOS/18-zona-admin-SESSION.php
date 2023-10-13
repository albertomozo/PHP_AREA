<?php session_start();
if(!isset($_SESSION["validado"])){
    header("Location:18-form-SESSION.php?ventrada=errorsesion&nombre=yo");
} 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ZONA ADMIN</title>
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
    
    <h1>GESTOR DE CONTENIDOS</h1>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores perspiciatis cupiditate quisquam cumque, blanditiis quo ducimus explicabo possimus, ullam debitis! Blanditiis rerum quibusdam porro ab itaque officiis, cumque ipsa minus!</p>
    
    
    
    
    <a href="18-form-SESSION.php">SALIR</a><br>
    <a href="18-cerrar-sesion.php">CERRAR SESIÓN</a>
    
    
</div>

</body>
</html>