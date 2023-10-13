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

<?php 
    
    // recibir datos
    $number=$_POST["cnum"];
    
    echo "<h2>La tabla de multiplicar del: $number </h2>";
    
    //comprobar
    //print_r($_POST);
     
    
    // mostrar datos
    for($x=1; $x<=10; $x++){
        echo "$x x $number = ".($x*$number)."<br>";
    }   
 
?>



</div>
 
</body>
</html>




