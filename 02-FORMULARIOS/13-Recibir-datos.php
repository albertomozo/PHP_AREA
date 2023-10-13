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
    
    <h1>RECIBIR DATO POR VÍNCULO</h1>
    <h2>COMPROBAR QUE DATO LLEGA Y MOSTRAR EN PANTALLA</h2>
    
<?php
    
    /*
    
    $nom=$_GET["vnom"];
    $ape=$_GET["vape"];
    
    echo "<p> Holaaaa $nom $ape </p>";
    */
    
    if(isset($_GET["vnom"])==true){ // COMPROBAR SI EXISTE VARIABLE GLOBAL vnom
        $nom=$_GET["vnom"]; // RECIBIR DATO 
        echo "<p> Holaaaa $nom</p>"; // MOSTRAR DATO
    }
    
     if(isset($_GET["vape"])==true){ 
        $ape=$_GET["vape"];  
        echo "<p> Holaaaa $ape</p>";
    }
    
    
?>


</div>

</body>
</html>






    <?php 
    /*
        if(isset($_GET["vnom"])==true){
            $vnom=$_GET["vnom"]; // recibir
            echo "<p> Hola, tu nombre es $vnom</p>"; 
        }
    
        if(isset($_GET["vape"])==true){
            $vape=$_GET["vape"];
            echo "<p> Hola, tu apellido es $vape</p>";
        }
*/
    ?>