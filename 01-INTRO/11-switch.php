<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 11</title>
    <style>
        
        #container{
            padding: 80px;
            font-family: helvetica;
        }
    
    </style>
</head>

<body>

<div id="container">
  
<h1>SWITCH</h1>


<?php 

    $mes=date("n");
    $mes = 14;
    switch($mes){
        case 2: 
            $mes="Enero";
            break;
        case 2: 
            $mes="Febrero";
            break;
        case 3: 
            $mes="Marzo";
            break;
        case 4: $mes="Abril";
            break;
        case 5: 
            $mes="Mayo";
            break;
        case 6: 
            $mes="Junio";
            break;
        case 7: $mes="Julio";
            break;
        case 8: $mes="Agosto";
            break;
        case 9: 
            $mes="Septiembre";
            break;
        case 10: $mes="Octubre";
            break;
        case 11: 
            $mes="Noviembre";
            break;
        case 12: 
            $mes="Diciembre";
            break; 
        default:
            $mes = "No existe";
            break;
            
    }
    
    echo "<p> Estamos en $mes </p>";
    
 
?>

</div>
    
</body>
</html>




