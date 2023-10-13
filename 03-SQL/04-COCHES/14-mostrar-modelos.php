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
    //RECIBIR DATO
    $idmarca=$_GET["vid"];
    // CONSULTA
    $sql="SELECT marcas.nombre AS nommarca, modelos.nombre AS nommodelo,id_modelo
    FROM modelos, marcas
    WHERE (marcas.id_marca=modelos.id_marca) AND (modelos.id_marca=$idmarca)
    ORDER BY modelos.nombre ASC";
    $resultado=mysqli_query($con,$sql);// EJECUTAR CONSULTA
    $fila=mysqli_fetch_array($resultado); // GUARDAR LA RESPUESTA DE LA CONSULTA
    ?>
    
<div class="y">
    
<h1>MOSTRAR MODELOS</h1>
   <h2>SEGUNDO PASO 2/3</h2>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magni facilis doloribus commodi fugit hic excepturi quos minima laborum pariatur, animi facere explicabo assumenda, quia quo! Laborum quae dolorum magni!</p>
    
     <h2>MARCA: <?php echo $fila["nommarca"] ?></h2>
     <br>
    
<table id="tab-1" width="100%" border="0" cellspacing="0" cellpadding="0">

<thead>
    <tr>
    <th scope="col">MODELO</th>
    <th scope="col">INFO</th>
    </tr>
</thead>
			
<tbody>

<?php 
    mysqli_data_seek($resultado,0); // RECARGAR LA CONSULTA  
    while ($fila=mysqli_fetch_array($resultado)){ 
?>
    <tr>
        <td><?php echo $fila["nommodelo"];?></td>
        <td><a href="14-ficha-modelo.php?vid=<?php echo $fila['id_modelo'];?>">+INFO</a></td>
    </tr>
<?php } ?>
</tbody>

</table> 
    


    </div>
    
<?php  mysqli_close($con);?>   
  
</body>
</html>