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
        .resultado {
            color:red;
        }
    
    </style>
</head>

<body>

<div id="container">
  
<h1>BUCLE FOR</h1>


<?php 
   // inicializacion
    $t_inicial = 2; // primera tabla a mostrar 
    $t_final = 20;  // ultima tabla 
    echo "<h1> Tablas desde el : $t_inicial hasta :  $t_final </h1> ";
    // desarrollo
    for ($i=$t_inicial;$i<=$t_final;$i++)
    { 
       ?>
        <div class=""> 
        <?php 
        echo "<h2>Tabla del  $i </h2>" ;
        echo "<ul>";
       for($j=1; $j<=10; $j++){
            $mult = $j*$i;
          /*   echo "<li> $i X  $j  = <span class='resultado'> $mult</span> </li>"; */
           echo "<li> $i X  $j  = <span class=\"resultado\"> $mult</span> </li>"; 
          /*   echo '<li>'. $i . ' X '.   $j .' = <span class="resultado">' . $mult .'</span> </li>'; */
        }
        ?>
        </ul>
        <hr>
        </div>
    <?php
    }
   

    
?>

</div>
    
</body>
</html>




