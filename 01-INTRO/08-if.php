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
  
<h1></h1>


<?php 
  
$num01=40;
$num02=20;
$num03=50;

    echo "<p>Los números son: num 1 = $num01, num 2 = $num02,num 3 = $num03</p>";
    
    if($num01 > $num02){
        echo "<p>Se cumple la condición, el número 1 es mayor que el número 2</p>";
    }
    
    if($num01 >= $num03){
        echo "<p>Se cumple la condición, el número 1 es igual o mayor que el número 3</p>";
    }
    
    
    
    if($num01 <= $num03){
        echo "<p>Se cumple la condición, el número 1 ( $num01 ) es igual o menor que el número 3</p>";
    }
    
    if($num01 == $num03){
        echo "<p>El número 1 es igual que el número 3</p>";
    }
    
    if($num01 != 50){
        echo "<p>El número 1 no es 50</p>";
    }
    
     if($num01 <> 50) echo "<p>El número 1 no es 50</p>";
    

?>

</div>
    
</body>
</html>




