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
  
<?php echo "<h1>Funciones predefinidas</h1>"; ?>

<h2>Textos - string</h2>

<?php 
    
    $texto = "El perro de San Roque no tiene rabo porque Ramon Rodriguez se lo ha cortado";
    echo '<p><strong>Primera parte (50 ) : </strong> ';
    echo substr($texto,0,50);
    ?>
    ...</p>
    <p><strong>Segunda parte  haste el final  (51 a  .. ) : </strong>'
    <?php 
    echo substr($texto,50);
    echo '</p>';
    $pos = strpos($texto,'o');
    echo "<p>Posicion de la o $pos</p>";
    echo "<p>$texto</p>";
    //función strlen(cadena), devuelve el número de caracteres
    echo "<p>La longitud de $texto es ".strlen($texto)."</p>";
    
    //pasa el contenido de la cadena a minúsculas
    echo "<p>Pasar a minúsculas ".strtolower($texto)."</p>";

    //pasa el contenido de la cadena a mayúsculas
    echo "<p>Pasar a mayúsculas ".strtoupper($texto)."</p>";
    
    // ............. //
    
    $numero = 12345.6789;
    echo "<p> El número a formatear es $numero </p>";
    //devuelve el número con 2 decimales
    echo "<p> Con dos decimales ".number_format($numero,2)."</p>";
    
    //si queremos que cambie el punto por una coma decimales, miles
echo "<p> Decimales, comas y punto en miles ".number_format($numero,2,",",".")." </p>";
    
    // ............. //
    
    $dias="Lunes,Martes,Miercoles,Jueves,Viernes";
    
    //funcion str_replace(cadenabuscada, cadenasustitución,texto)
    //sustituye una cadena o caracter por otra dentro de una cadena
    echo "<p> $dias </p>";
    echo "<p>" .str_replace(","," ",$dias). "</p>";
   
    
    $lista="Uno Dos Tres";
    
    echo "<p> $lista </p>";
    echo "<p>".str_replace(" ","<br>",$lista)."</p>";
    
    
    $dia="hoy es miercoles";
    
    echo "<p> $dia </p>";
    //pasa a mayúsculas el 1º caracter de la primera palabra
    echo "<p>".ucfirst($dia)."</p>";
    
    //pasa a mayúsculas el 1º caracter de cada palabra de una cadena
    echo "<p>".ucwords($dia)."</p>";
    
    
?>

</div>
    
</body>
</html>




