<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 16</title>
    <style>
        
        #container{
            padding: 80px;
            font-family: helvetica;
        }
    
    </style>
</head>

<body>

<div id="container">
  
<h1>ARRAY FOREACH</h1>

<p>Solo para arrays, muestra todos los ementos de un array</p>



<ul>
<?php 
    
$meses=
["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
    
    //echo "<ul>";
    
        foreach($meses as $i){
            echo "<li>$i</li>";
        }
    
    //echo "</ul>";        
?>
</ul>


</div>
    
</body>
</html>




