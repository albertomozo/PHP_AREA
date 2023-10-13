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
  
<h1>ENVIAR Y RECIBIR</h1>

<?php 
// preguntamos si hay envio, EMPTY COMPRUEBA SI LA VARIABLE ESTA VACIA 
if(empty($_POST)==true){ ?> <!-- if -->
    
<div id="enviar">
<h2> PASO 1 </h2>

<form name="form1" id="form1" action="08-Enviar-recibir-tabla.php" method="post">
    
    <label for="number">Selecciona un número:</label>
       
        <select name="cnum">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            
        </select>
   
   
    <input type="submit" value="Enviar">
    
</form>
</div>

<?php } else { ?> <!-- else -->

<div id="enviar">


<form name="form1" id="form1" action="08-Enviar-recibir-tabla.php" method="post">
    
    <label for="number">Selecciona un número:</label>
       
        <select name="cnum">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            
        </select>
   
   
    <input type="submit" value="Enviar">
    
</form>
</div>

<div id="recibir">
<h2>PASO 2</h2>
<?php 
    
    // recibir datos
    $number=$_POST["cnum"];
    echo "<h2>La tabla de multiplicar del: $number </h2>";
    //comprobar
    //print_r($_POST);
     
    // mostrar datos
    for($x=1; $x<=10; $x++){
        echo "$x x $number = ".($x*$number)." <br>";
    }
?>

</div>

<?php } ?> <!-- terminar else -->

</div>
 
</body>
</html>




