<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>conexiones</title>
    <style>
    
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        
        #container{
            width: 80%;
            display: block;
            margin: 0px auto;
            padding: 100px 0px;
            font-family: helvetica;
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
         #tabla{
            width: 60%;
        }
        #tabla th{
            padding: 20px 40px;
            border-bottom: 0.5px solid rgba(200,200,200,1.00);
        }
        
        #tabla td{
            border-bottom: 0.5px solid rgba(200,200,200,1.00);
            padding: 20px;
            border-right: 0.5px solid rgba(200,200,200,1.00);
        }
    
    </style>
</head>


<body>
      
      
<?php 
       
    $con=mysqli_connect("localhost","root","","coches");
    $con->set_charset("utf8");
       
    // consulta    
    $sql="SELECT marcas.nombre AS marnom,pais,logo,modelos.nombre AS modnom 
       FROM marcas,modelos 
       WHERE (marcas.id_marca = modelos.id_marca) AND (modelos.nombre LIKE 'A%')
       ORDER BY modelos.nombre ASC";
       
    // ejecuta la consulta
    $resultado=mysqli_query($con,$sql); 

    ?>
    

    
<div id="container">    
<h1>Conexiones - Coches</h1><br>
        
       
       
<?php  if(mysqli_num_rows($resultado)!=0){ ?>
       
     
<h2><?php echo " Nº resultados:" .mysqli_num_rows($resultado) ?></h2>
  
<table cellspacing=0 id="tabla">
         
<thead>     
        <th>MODELO</th>
        <th>MARCA</th>
        <th>PAÍS</th>
        <th>LOGO</th>  
</thead>
         
<tbody>
          
    <?php while($fila=mysqli_fetch_array($resultado)){ ?> <!-- guardar la consulta -->
          
        <tr>
             <td><?php echo $fila["modnom"] ?> </td> <!-- muestra la consulta -->
             <td><?php echo $fila["marnom"] ?></td>
             <td><?php echo $fila["pais"] ?></td>
             <td> <img src="imagenes/<?php echo $fila['logo']; ?>"> </td>
        </tr>
            
    <?php } ?>
                                          
</tbody>
</table>
         
          
<?php } else { ?>
              
             <p> Búsqueda no encontrada </p>
              
<?php } ?>
             
     
      
       
   </div>
    
<?php mysqli_close($con); ?> <!-- cerrar la conexión -->

</body>
</html>