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
    
    <!-- conexión, sql, resultado, fila, echo, close -->
    
</head>
<body>
   
   
    <?php
    $con=mysqli_connect("localhost", "root", "", "coches"); 
    $con->set_charset("utf8");
    ?>
    
    
<div class="y">

<h1>Conexiones - Coches</h1>   
   
<!--  IF // si no hay envio, muestrar formulario ...  -->    
<?php if(empty($_POST)){?> 
    
    
 <div id="no_hay_envio">
    
    <h2>Buscar Modelos de coches</h2>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magni facilis doloribus commodi fugit hic excepturi quos minima laborum pariatur, animi facere explicabo assumenda, quia quo! Laborum quae dolorum magni!</p>   
    
    <form name="form1" id="form1" action="11-Buscar-Mostrar.php" method="post"> 
       
        <label for="nombre">Buscar por Letra</label>
        <input type="text" name="cletra">
       
        <input type="submit" value="Buscar">
    
    </form>
    
</div>    
    
    
<?php } else{ ?> 
   
    
<h2>Mostrar Modelos de coches</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magni facilis doloribus commodi fugit hic excepturi quos minima laborum pariatur, animi facere explicabo assumenda, quia quo! Laborum quae dolorum magni!</p> 
    


<form name="form1" id="form1" action="11-Buscar-Mostrar.php" method="post"> 
       
        <label for="nombre">Nombre</label>
        <input type="text" name="cletra">
        <input type="submit" value="Buscar">
    
</form>    
    
    
    
    
    <?php
    
    // RECIBIR DATO
    $letra=$_POST["cletra"]; 
    //echo $letra;

    $sql="SELECT marcas.nombre AS nommarca, logo, modelos.nombre AS nommodelo, foto, precio FROM modelos, marcas WHERE (marcas.id_marca=modelos.id_marca) AND ( modelos.nombre LIKE '$letra%') ORDER BY modelos.nombre ASC";
    
    $resultado=mysqli_query($con,$sql);
    
    ?>
    
    <h2>Nuestros modelos</h2>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magni facilis doloribus commodi fugit hic excepturi quos minima laborum pariatur, animi facere explicabo assumenda, quia quo! Laborum quae dolorum magni!</p>
       
    
<?php 
    if(mysqli_num_rows($resultado)!=0){  // si hay resultado, mostrar lo siguiente        
?>
    
 
    
    <?php while($fila=mysqli_fetch_array($resultado)){  ?>
 
    <article>

    <img class="izq logo" width="40px" src="imagenes/<?php echo $fila['logo']?>">
    <h3><?php echo $fila["nommarca"] ?></h3>
    

    <div>
        <h4 class="izq"><?php echo $fila["nommodelo"] ?></h4>
        <p class="dech precio"><?php echo number_format($fila["precio"],0,",","."); ?> €</p>
    </div>
    <img width="100%" src="imagenes/modelos/<?php echo $fila['foto'] ?>">
   
    </article>
    
     <?php } // FIN WHILE ?>
     
     
<?php }else{ ?> 
         
    <article>
       
        <p class='precio'>Lo siento, no se ha encontrado ningún modelo <br>
        cuyo nombre empiza por la letra <?php echo $letra; ?>
        </p>
        
    </article>
        
<?php } ?>
     
     
     

<?php } ?>
     
    </div>
    
    
<?php  mysqli_close($con); ?>

</body>
</html>