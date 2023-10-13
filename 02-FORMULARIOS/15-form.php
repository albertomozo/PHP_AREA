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
    
    <h1>ENTRAR EN GESTOR DE CONTENIDOS</h1>
    
    <?php 
    
        if(isset($_GET["ventrada"])==true){
            echo "<p>Datos incorrectos</p>";
        }
    
    ?>
    
    <form name="form1" id="form1" action="15-login.php" method="post">
    
    <label for="user">Usuario:</label>
    <input type="text" name="cusu">
    <br><br>
    <label for="user">Password:</label>
    <input type="password" name="cpas">
    <br><br>
    <input type="submit" value="OK">
    
    </form>


</div>

</body>
</html>