<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12</title>
    <style>
        
        #container{
            padding: 80px;
            font-family: helvetica;
        }
    
    </style>
</head>

<body>

<div id="container">
  
<h1>BUCLE FOR</h1>


<?php 
    
    $num=4;
    echo "<h2>Tabla de multiplicar del $num</h2>";
    echo "<p>";
    for($x=1; $x<=10; $x++){
        echo "$x x $num = ".($x*$num)."<br>";
    }
    echo "</p>";
?>


<h2>Tabla de multiplicar</h2>
<p>
<?php
    $num=6;
    for($x=1; $x<=10; $x++){
        echo "$x x $num = ".($x*$num)."<br>";
    }
 ?>   
</p>
 

</div>
    
</body>
</html>




