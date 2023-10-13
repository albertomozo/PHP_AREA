<?php session_start(); ?>
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
            line-height: 24px;
        }
    
    </style>
</head>
<body>


<div id="container">
    
    <h1>Variable global $_SESSION</h1>
    <p>Las variables de sesión son variables que se pueden generar en el servidor duran el tiempo que el usuario
    está navegando por el sitio web. <br> Se utilizan para controlar el acceso a una área administrador.</p>
    
    <h2>Sintaxis:</h2>
    
    <p>
    
    Se debe iniciar la sesión antes del código HTML <br>
    session_start(); <br>
    Crear la variable de sesión y asignarle un valor: <br>
    $_SESSION["nombre"]="valor-texto"; <br>
    $_SESSION["nombre"]=50; <br>
    $_SESSION["nombre"]=$variable; <br>
    
    <h2>Funciones:</h2>
    
    <p>
    
    session_id() - obtiene un valor aleatorio que genera el servidor por cada sesión que se genera.  
    Permite al servidor identificar la sesión de cada usuario. <br>
    session_cache_expire() - devuelve la caducidad actual del caché (180 minutos). <br>
    session_destroy() - destruye todos los datos guardadis en una sesión DESTRUYE EL ID. <br>
    session_unset() - Elimina todas las variables de la sesión. NO destruye el ID. <br>
    session_name("nombre_sesion") - Nombrar la sesión.
    
    
    </p>
    
    <h2>EJEMPLOS</h2>
    
<?php
    
    echo session_id();
    
    // crear una vatiable de sesion y asignar un valor
    // variable global que se guarda en la nube de esta sesión
    
    $_SESSION["dia"]="MARTES"; // se guarda en la nube 
    $_SESSION["usuario"]="Pepito"; // se guarda en la nube
    
    // variable que se queda guardada en este archivo
    $nombre="Pedro";

?>

<section></section>   
          
<?php 
    
    // guardar el valor de la variable de sesion / bajar de la nube
    $verdia=$_SESSION["dia"];
    echo "<p>Hoy es: $verdia </p>";
    
    echo "<p> $nombre </p>";
    
?>
   
<br><br>
  
<a href="17-ver-SESSION.php">Ver variable de sesión en otro archivo</a>
     
<br><br>
  
<a href="17-ver-SESSION-COPIA.php">Ver variable de sesión en otro archivo otra vez</a>
    
      
</div>

</body>
</html>