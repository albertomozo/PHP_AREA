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
<p>isset() función que comprueba si existe o no</p>

<?php 
    
    // preguntamos si hay envio
    // if(isset($_POST["cnom"])!=true){ <!-- if / si no existe, rellenar formulario
    
    // !isset es igual a !=true 
    
if(!isset($_POST["cnom"])){ ?>

<div id="enviar">

    <h2>ENVIAR</h2>

    <form name="form1" id="form1" action="07-Enviar-Recibir.php" method="post">
    
    <label for="nombre">Nombre:</label>
    <input type="text" name="cnom">
    <br><br>
    <label for="apellido">Apellido:</label>
    <input type="text" name="cape">
    <br><br>

    <input type="submit" value="Enviar">
    
    </form>

</div>

<?php } else { ?> <!-- else -->

<div id="recibir">
   
    <h2>RECIBIR</h2>
        
    <?php 
    
    //recibir datos
    $nombre=$_POST["cnom"];
    $apellido=$_POST["cape"];
    // print_r($_POST);

    ?>
    
    <table id="tabla" width="30%" border="1" cellspacing="1" cellpadding="1">
       
       <tr>
        <th scope="row">Nombre</th>
        <td> <?php echo $nombre ?> </td>
        
    </tr>
       
    <tr>
        <th scope="row">Apellido</th>
        <td> <?php echo $apellido ?> </td>
        
    </tr>
        
        
    </table>
    
</div>

<?php } ?> <!-- terminar else -->

</div>
 
</body>
</html>




