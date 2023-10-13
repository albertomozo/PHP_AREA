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

    // (iniciar ; condición ; incrementar)
    
    for($x=1; $x<=20; $x++){
        $alea = rand(1,10);
        echo "Número $x  Aleatorio $alea <br>";
    }
    
?>

</div>
    
</body>
</html>




