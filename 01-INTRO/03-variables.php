<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio php</title>
    <style>
        .txt{
            color: orangered;
        }
        .blue{
            color: blue;
        }
    
    </style>
</head>


<body>
  
  <h1 class="blue">VARIABLES PHP</h1>
  <h2 class="blue">Tipos de variables</h2>

<?php
    
// variable numérica 
    $num=5;
    echo "<p>Esto es una veriable número: $num</p>";

// variable texto/string 
    $palabra="Coronovaris";
    echo "<p>Esto es una veriable texto: $palabra</p>";
 
// variable booleana 
    $bol=true; // devuelve 1, false no devuelve 0, se queda vacio
    echo "<p>Esto es una veriable booleana: $bol</p>";

// variable matriz 
    $colores=array("Rojo","Verde","Azul");
    echo "<p>Esto es una veriable matriz: $colores[1]</p>";  
    
    
?>


<h2 class="blue">Mostramos valores de la variable</h2>


<?php 
    
    # comentario en php
    // definir variables con $
    $nombre="Ane";
    $apellido="Artola";
    
    //echo $nombre;
    echo "<p>Hola $nombre </p>";
    echo "<p>Hola $nombre $apellido </p>";
    
    //concatenar variables en php, aquí no es necesario
    echo "<p>Bienvenido $nombre" ." ".$apellido." </p>";
    
    //para poner Bienvenido entre comillas dobles... esta es la opción
    echo "<p> \"Bienvenido\" $nombre </p>";
    
    //entre comillas simples si no tenemos variables
    echo '<p> "Bienvenido" Aitor Lakunza </p>';
    
    //si tenemos variables no podemos poner entre comillas simples echo !!
    echo '<p> "Bienvenido" $nombre </p>';
    echo '<p> "Bienvenido" '.$nombre.'</p>';
    
    
echo "<h2 class='blue'>Mostramos tipos de la variable</h2>";
     
// metodo var_dump()
    $x=9;
    var_dump($x); // int
    
    $x=5.73;
    var_dump($x); // float
    
    $x="Hola";
    var_dump($x); // string
    
    $x=true;
    var_dump($x); // boolean
?>
   
   
   
   
    
    
</body>
</html>