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
            color: lightgray;
        }
        article{
            width: 24%;
            display:inline-block;
            vertical-align: top;
            
        }
        p{
            font-family: arial;
            line-height: 25px;
        }
        label{
           font-family: arial;  
         }
        input{
             font-family: arial;
         }
        
        
    </style>
</head>

<body>
    
    <?php
    $con=mysqli_connect("localhost", "root", "", "coches");
    $con->set_charset("utf8");
    
    $sql="SELECT nombre, pais,logo,id_marca FROM marcas ORDER BY nombre ASC";
    $resultado=mysqli_query($con,$sql);
    ?>
    
    <div class="y">
    <h1>Mostrar marcas</h1>
    <h2>Buscar Marca de coches</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magni facilis doloribus commodi fugit hic excepturi quos minima laborum pariatur, animi facere explicabo assumenda, quia quo! Laborum quae dolorum magni!</p>
    
<?php while($fila=mysqli_fetch_array($resultado)) { ?>
    
    <a href="12-mostrar-modelos.php?vid=<?php echo $fila['id_marca']?>">
    <article>
        <h2><?php echo $fila["nombre"] ?></h2>
        <img class="izq logo" src="imagenes/<?php echo $fila['logo']?>">
        <p><?php echo $fila["pais"] ?></p>    
    </article>
    </a>
    
<?php } ?>

    </div>
    
<?php  mysqli_close($con);?>   
  
</body>
</html>