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
  
<h1>RECIBIR FORMULARIO</h1>

<p>
// Se puede utilizar para recibir de get o post, en este caso es indiferente.
<br>
$variable=$_POST["name_input"];
<br>
$idiomas=["Castellano","Euskara","Frances","Italiano"];
<br>
$idiomas=$_POST["cidiomas"]; 
</p>


<?php 
    
    // RECIBIR LOS DATOS
    $nombre=$_POST["cnom"];
    $edad=$_POST["ceda"];
    $provin=$_POST["cpro"];
    $idiomas=$_POST["cidiomas"];
    $casado=$_POST["ccas"];
    
    // COMPROBAR SI LOS DATOS LLEGAN BIEN
     print_r($_POST);

?>

<table id="tabla" width="50%" border="1" cellspacing="1" cellpadding="1">
    
    <tbody>
       
    <tr>
        <th scope="row">Nombre</th>
        <td> <?php echo $nombre; ?> </td>
        
    </tr>
       
    <tr>
        <th scope="row">Edad</th>
        <td> <?php echo $edad ?> </td>
        
    </tr>
       
    <tr>
        <th scope="row">Provincia</th>
        <td> <?php echo $provin ?> </td>
        
    </tr>
       
    <tr>
        <th scope="row">Idiomas</th>
        <td> <?php foreach($idiomas as $i){ echo "$i <br>"; } ?> </td>
        
    </tr>
       
    <tr>
        <th scope="row">Casado</th>
        <td> <?php echo $casado ?> </td>
        
    </tr>
        
  
    </tbody>

</table>



</div>
 
</body>
</html>




