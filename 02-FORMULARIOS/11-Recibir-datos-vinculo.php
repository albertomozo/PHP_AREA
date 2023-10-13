<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Enviar datos por vínculo</title>
    <style>
        
        #container{
            width: 80%;
            margin: 0px auto;
            display: block;
            font-family: helvetica;
            padding-top: 60px;
        }
    
    </style>
</head>
<body>


<div id="container">
    
    <h1>RECIBIR DATO POR VÍNCULO</h1>
    
    <?php 
        
        // RECIBIR DATOS POR $_GET[], $_REQUEST[] pero $_POST[] NUNCA!!!!!
        $nom=$_GET["vnom"];
        $ape=$_GET["vape"];
    
    
        echo "<p> Tu nombre es $nom $ape </p>";
    
    ?>


</div>

</body>
</html>