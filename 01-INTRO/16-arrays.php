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
  
<h1>ARRAY - MATRIZ</h1>

$variable=array(valor0,valor1,valorN);
<br><br>
$variable=[valor0,valor1,valorN];
<br><br>
$colores=array("rojo","verde","azul");
<br><br>
$num=array(33,44,55);
<br><br>
$numeros=[$uno,$dos,$tres];
<br><br>
print_r($colores); devuelve los elementos del array
<br><br>
count($colores); devuelve el número de elementos del array
<br><br>
asort($colores); ordena alfabéticamente los elementos y mantiene los mismos índices 
<br><br>
arsort($colores); ordena inversamente los datos, pero mantiene los elementos 
<br><br>
shuffle($colores); ordena los elementos aleatoriamente pero mantiene los índices

<h2>EJEMPLO</h2>

<?php 
    
    //$colores=array("rojo","verde","azul");
    $colores=["rojo","verde","azul"];
    // mostrar elementos de la matriz por sus indices
    echo "<p> El primer color es ".$colores[0]."</p>";
    echo "<p> El segundo color es ".$colores[1]."</p>";
    echo "<p> El tercer color es ".$colores[2]."</p>";
    // mostrar con print, solo para nosotros no para el usuario !!!!!
    print_r($colores);
    
    //devuelve el número de elementos del array
    echo "<p> En el array colores tenemos ".count($colores)." elementos </p>";
    
    echo "<p> Ordenar alfabéticamente con asort() </p>";
    // ordena alfabéticamente los datos, pero mantiene los índices
    asort($colores);
    print_r($colores);
    
    
    echo "<p> Ordenar a la inversa con arsort() </p>";
    // ordena inversamente los datos, pero mantiene los elementos
    // por ejemplo, ordenar por precio de menos a más, tendríamos que utilizar estos elementos
    arsort($colores);
    print_r($colores);
    
    echo "<p> Ordenar aleatoriamente con shufle() </p>";
    // ordena los elementos aleatoriamente pero mantiene los índices
    shuffle($colores);
    // mostrar-comprobar
    print_r($colores);
    
    
    
    //Añadir un elemento a un array
    echo "<p> Añade un elemento al array, color nuevo...naranja, amariilo</p>";
    $colores[]="naranja";
    $colores[]="amarillo";
    
    print_r($colores);
    
    //Añadir un elemento a un array en el indice 0, borrando el elemento que estaba
    echo "<p> Añade un elemento al array, en el indice 0, eliminando el que ya estaba </p>";
    $colores[0]="negro";
    
    print_r($colores);
    
    // Eliminar un elemento de array
    echo "<p>Eliminar un elemento de Array</p>";
    $abc = array("A","B","C");
    print_r($abc);
    // eleminar segundo elemento
    unset($abc[1]);
    print_r($abc); // ahora será  $abc = array( "A", "C" );
    
?>



</div>
    
</body>
</html>




