<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 14</title>
    <style>
        
        #container{
            padding: 80px;
            font-family: helvetica;
        }
    
    </style>
</head>

<body>

<div id="container">
  
<h1>DO WHILE</h1>
<p>
    
    crear dinámicamente una lista de 10 elementos donde en cada elemento aparece una referencia de su orden
    
</p>



<ul>

<?php 
    $filas=5;
    $fila_en_curso=1;
    
    do{
        echo "<li>opción $fila_en_curso</li>"; 
        $fila_en_curso ++;
    }while($fila_en_curso <= $filas); 
    
?>

</ul>

</div>
    
</body>
</html>




