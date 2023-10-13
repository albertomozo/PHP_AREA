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
  
<h1 class="blue">php y js</h1>

<script>
nombre= prompt("Como te llamas?");
//document.write(nombre);
</script> 


<?php 
    
// variable en php se define con $ por delante 

$nom= "<script>document.write(nombre)</script>";
//con document.write o document.getElementById("").innerHTML
   
//echo "Hola $nom"; 
echo "<p> Hola $nom </p>";
echo '<p> Hola $nom </p>';
echo '<p> Hola ' . $nom .' </p>';
 
?>
    
 
</body>
</html>