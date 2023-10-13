<?php
    $use=$_POST["cusu"];
    $pas=$_POST["cpas"];
    if($use!="area" or $pas!="1234"){ 
    header("Location:14-usuario-psw.php?ventrada=no");
}

/*
OJO! La función header te redirige a donde quieras. Para que funcione:
1. Tiene que ir al principio de todo, antes del doctype.
2. No puede haber ninguna sentencia echo antes.
3. No puede haber ningun comentario antes.
4. No puede haber espacios en blanco antes.

*/ 
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Enviar datos por vínculo</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        #container{
            background-color: aqua;
            width: 100%;
            margin: 0px auto;
            display: block;
            font-family: helvetica;
            padding: 60px;
            text-align: center;
        }
    
    </style>
</head>


<body>
 <?php 
    $use=$_POST["cusu"];
    $pas=$_POST["cpas"];
    ?>






<div id="container">
    
    <h1>GESTOR DE CONTENIDOS</h1>
    
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam libero eaque nulla vero hic numquam, est animi dolores recusandae, quod atque dolorum laboriosam! Harum dolore laborum, quas aperiam earum unde.</p>
    
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam libero eaque nulla vero hic numquam, est animi dolores recusandae, quod atque dolorum laboriosam! Harum dolore laborum, quas aperiam earum unde.</p> 
    
    
   
    


</div>

</body>
</html>