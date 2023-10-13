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
        .fondo1{
            background-color: aqua;
            padding: 20px;
        }
        .fondo2{
            background-color: indianred;
            padding: 20px;
        }
        .fondo3{
            background-color: green;
            padding: 20px;
        }
    
    </style>
</head>
<body>


<div id="container">
   
<?php if(empty($_GET) == true){  ?>
    
    <div>
    
    <h1>ENVIAR DATOS POR VINCULOS <br> 3 DATOS DISTINTOS</h1>
    
    <a href="12-vinculos.php?vx=uno">Uno</a><br>
    <a href="12-vinculos.php?vx=dos">Dos</a><br>
    <a href="12-vinculos.php?vx=tres">Tres</a>
    
    </div>

<?php }else{ ?>
    
    <div>
        
    <h1>MOSTRAR RESULTADO</h1>
     
     <?php
    
    // RECIBIR DATO  
    $vin=$_GET["vx"];
        
        ?>
      
           <div class="fondo1">
           <h2>Primer enlace</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eum numquam excepturi dolore ex. Aliquam totam ratione numquam magni laborum id. Ipsam et, tempore explicabo vitae cupiditate iusto nobis. Saepe?</p>
            </div>
           
               <div class="fondo2">
               <h2>Segundo enlace</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eum numquam excepturi dolore ex. Aliquam totam ratione numquam magni laborum id. Ipsam et, tempore explicabo vitae cupiditate iusto nobis. Saepe?</p>
                </div>
             
                   <div class="fondo3">
                   <h2>Tercer enlace</h2>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eum numquam excepturi dolore ex. Aliquam totam ratione numquam magni laborum id. Ipsam et, tempore explicabo vitae cupiditate iusto nobis. Saepe?</p>
                    </div>
                  
        
    </div>

<?php   }  ?>

</div>

</body>
</html>