<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        
        body{
              margin: 0 auto;
             width: 1200px;
              
        }
        
        .color{
            background-color: aquamarine;
            
        }
        th{ border: 0.1px solid rgba(0,0,0,1.00);
            padding: 10px;}
         
    
        
        td{
           border: 0.1px solid rgba(0,0,0,1.00);
           padding: 10px;
         
            
        }
         .y{
            max-width: 800px;
            margin: 0px auto;
            padding: 30px;
            margin-bottom: 50px;  
            overflow: auto;
        }
        h1{
            font-family: arial;
            font-size: 30px;
            color: gray;
        }
         h2{
            font-family: arial;
            font-size: 25px;
            color: darkgray;

        }
          h3{
            font-family: arial;
            font-size: 20px;
            color: black;
            padding-top: 7px;

        }
        h4{
            font-family: arial;
            font-size: 18px;
            color: gray;
            padding-top: 7px;

        }
        p{
            font-family: arial;
            line-height: 25px;
        }
        .izq{
            float: left;
            
        }
        .dech{
            float: right;
        }
        
        .precio{
            background-color: firebrick;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .red{
            color: darkred;
        }
        .logo{
            margin-right: 30px;
        }
        
    </style>
</head>
<body>
    
<?php
    
    $con=mysqli_connect("localhost", "root", "", "coches");
    $con->set_charset("utf8");
    
    $id=$_POST["cmarcas"]; 
    //echo $id;
    
    $sql="SELECT marcas.nombre AS nommar, logo, modelos.nombre AS nommod, foto, precio
    FROM modelos, marcas
    WHERE (marcas.id_marca=modelos.id_marca) AND (modelos.id_marca=$id) 
    ORDER BY modelos.nombre ASC";
    
    $resultado=mysqli_query($con,$sql);
    
?>
    
    <div class="y">
    <h1>Conexiones - Coches</h1>
    <h2>Nuestros modelos</h2>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magni facilis doloribus commodi fugit hic excepturi quos minima laborum pariatur, animi facere explicabo assumenda, quia quo! Laborum quae dolorum magni!</p>
    
<?php if(mysqli_num_rows($resultado)!=0){ ?>
    
        <h2><?php echo "Nº resultados:" .mysqli_num_rows($resultado) ?></h2>
      
        <?php  while($fila=mysqli_fetch_array($resultado)){  ?>
 
    <article>
    
    <img class="izq logo" width="40px" src="imagenes/<?php echo $fila['logo']?>">
    <h2><?php echo $fila["nommar"] ?></h2>
    
    <div>
        <h3 class="izq"><?php echo $fila["nommod"] ?></h3>
        <p class="dech precio"><?php echo $fila["precio"] ?></p>
    </div>
    <img width="100%" src="imagenes/modelos/<?php echo $fila['foto'] ?>">
   
    </article>
     <?php } ?>
     
     <?php    
        }else{
        echo
        "<p class='precio'>Lo siento, no se ha encontrado ningún modelo de esta marca</p>";
     } ?>
     
   
     
     <?php  mysqli_close($con);
    
     ?>
    </div>
    
     
</body>
</html>