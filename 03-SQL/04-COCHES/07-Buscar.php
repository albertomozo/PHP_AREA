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
    
    $sql="SELECT nombre, id_marca
    FROM marcas
    ORDER BY nombre ASC";
    
    $resultado=mysqli_query($con,$sql);
    
    
    ?>
    
    <div class="y">
    <h1>Conexiones - Coches</h1>
    <h2>Buscar Marca de coches</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magni facilis doloribus commodi fugit hic excepturi quos minima laborum pariatur, animi facere explicabo assumenda, quia quo! Laborum quae dolorum magni!</p>
    
    
    <form name="form1" id="form1" action="07-Mostrar.php" method="post"> 
    <label>Marca</label>
    <select name="cmarcas">
            
             <?php  while($fila=mysqli_fetch_array($resultado)){  ?>
             
             <option value="<?php echo $fila ['id_marca']?>"><?php echo $fila ["nombre"] ?></option>
             
             <?php } ?>
    </select>
    
    <input type="submit" value="Buscar">
    </form>
    
     <?php  mysqli_close($con);
    
    ?>
    </div>
    
    
  
</body>
</html>