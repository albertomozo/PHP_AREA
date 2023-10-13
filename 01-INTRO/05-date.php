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
  
<h1><?php echo "Formato fecha"; ?></h1>


<p>date - Dar formato a la fecha/hora local</p>

<?php
    
    //function date();
    // mirar php.net
    
    
    // función para zona horaria, a partir de php 5.1
    date_default_timezone_set("Europe/Madrid");
    
    //mostrar hora
    echo date("H::i::s");

    echo '<p>'.date("d/m/Y H:i:s",time()).'</p>';
    
    //fecha, día-mes-año
    echo "<p>Hoy es ".date("d-m-Y")."</p>";
    // año-mes-día
    echo "<p>Hoy es ".date("Y-m-d")."</p>";  
    echo time();
    echo "<p>Hoy es ".date("D M") . ' de '. date("Y") ."</p>";  

?>

</div>
    
</body>
</html>