<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 01</title>
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
  
  <h1 class="blue">OPERADORES PHP</h1>

<?php 
    
    //definir variables numéricas
    $a=9;
    $b=3;
    
    //mostrar su valor en pantalla
    // la contrabarra hace no interpretarlo como variable
    echo "<p>El valor de \$a: $a </p>"; 
    echo "<p>El valor de \$b: $b </p>";
    
    //sumar y guardar en una variable
    $suma=($a+$b);
    //mostrar la suma en la pantalla
    echo "<p> $a + $b = $suma </p>";
    
    //otra manera de sumar.... concatenando!!!!
    echo "<p> $a + $b = ".($a+$b)."</p>";
    
    
    //operaciones aritméticas directamente en echo, sin concatenar no sale
    echo "<p> $a - $b = ($a-$b), no hace esta resta!! </p>";
    echo "<p> $a - $b = ".($a-$b)."</p>";
    
    //operaciones aritméticas directamente en echo, obligatorio CONCATENAR
    echo "<p> $a * $b = ".($a*$b)."</p>";
    echo "<p> $a / $b = ".($a/$b)."</p>";
    echo "<p> $a % $b = ".($a%$b)."</p>";
    
    //incrementar el valor en 1
    $a++;
    //$a=$a+1;
    
    echo "<p>Incrementar el valor en 1, \$a++ = $a </p>";
    
    //sumar 6 al valor $c
    $c=5;
    $c+=6;
    // $c=$c+6
    echo "<p>$c</p>";
    
?>
    
    
</body>
</html>