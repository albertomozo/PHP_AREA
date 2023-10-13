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
            padding-top: 10px;
        }
        
    </style>
</head>



<body>
 
  
   
<?php
    
    $con=mysqli_connect("localhost", "root", "", "coches");
    $con->set_charset("utf8");
    
    $id=$_GET["vid"];
    // echo $id
    
    $sql="SELECT marcas.nombre AS nommarca, logo, modelos.nombre AS nommodelo, foto, precio
    FROM modelos, marcas
    WHERE (marcas.id_marca=modelos.id_marca) AND (modelos.id_modelo=$id)";
    $resultado=mysqli_query($con,$sql); 
    $fila=mysqli_fetch_array($resultado);
?>
    
    <div class="y">
    
        <section>
        <h1>FICHA MODELO</h1>
        <h2>TERCER PASO 3/3</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magni facilis doloribus commodi fugit hic excepturi quos minima laborum pariatur, animi facere explicabo assumenda, quia quo! Laborum quae dolorum magni!</p>
        
        <img class="izq logo" width="60px" src="imagenes/<?php echo $fila['logo']?>">
        <h2><?php echo $fila["nommarca"] ?></h2>

    <hr>
    
        <article>
        <div>
        <p class="izq modelo"><?php echo $fila["nommodelo"] ?></p>
        <p class="dech precio"><?php echo number_format ($fila["precio"],0,",","."); ?> €</p>
        </div>
    
        <img width="100%" src="imagenes/modelos/<?php echo $fila['foto'] ?>">
        </article>
        
  
    
   

        </section>
        </div>
    
<?php  mysqli_close($con); ?>
</body>
</html>