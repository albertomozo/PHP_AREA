<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>$_SESSION</title>
    <style>
        
        #container{
            width: 80%;
            margin: 0px auto;
            display: block;
            font-family: helvetica;
            padding-top: 60px;
        }
        .txt{
            color: red;
            font-size: 20px;
        }
    
    </style>
</head>
<body>


<div id="container">
    
    <h1>ENTRAR EN ZONA RESERVADA</h1>
    
    <?php 
        if(isset($_GET["ventrada"])==true){
            if ($_GET["ventrada"]=='no'){
            echo "<p class='txt'>Datos incorrectos</p>";}
            if ($_GET["ventrada"]=='errorsesion'){
                echo "<p class='txt'>Tio Listo</p>";}

        }
    ?>  
<form name="form1" id="form1" action="18-login-SESSION.php" method="post">
    
    <label for="user">Usuario:</label>
    <input type="text" name="cusu">
    <br><br>
    <label for="user">Password:</label>
    <input type="password" name="cpas">
    <br><br>
    <input type="submit" value="OK">
    
</form>
    <br>
    <a href="18-zona-admin-SESSION.php">Usuario registrado</a>


</div>

</body>
</html>