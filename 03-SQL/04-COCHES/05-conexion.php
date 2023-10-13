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
           
            padding: 20px;
            border: 0.5px solid rgba(200,200,200,1.00);
        }
    
    </style>
</head>


<body>
  
  
<?php 
       $con=mysqli_connect("localhost","root","","coches");
       $con->set_charset("utf8");
       // consulta
       $sql="SELECT nombre, pais, logo FROM marcas WHERE (nombre LIKE 'Q%') ORDER BY nombre"; 
       // ejecutar la consulta
       $resultado=mysqli_query($con,$sql); // ejecuta la consulta
?>
   
<div id="container">
      
<h1>Conexiones - Coches</h1>

<br>
  
<section> 
       
<?php if(mysqli_num_rows($resultado)!=0){ ?>
    
    <article id="si">
      
      <h2><?php echo " Nº resultados:" .mysqli_num_rows($resultado) ?></h2>
      <table cellspacing=0 id="tabla">
         
         <thead>
             
             <th>MARCA</th>
             <th>PAÍS</th>
             <th>LOGO</th>
             
         </thead>
         
         <!-- esta fila la llevamos al bucle para que nos lo repita 11 veces -->
         <tbody>
          
          <?php
          
           
            while($fila=mysqli_fetch_array($resultado)){ ?> <!-- guardar la consulta -->
            
            <tr>
             
             <td><?php echo $fila["nombre"] ?> </td> <!-- muestra la consulta -->
             
             <td><?php echo $fila["pais"] ?></td>
             
             <td> <img src="imagenes/<?php echo $fila['logo']; ?>"> </td>
             
            </tr>
    
          
           
            
<?php } ?>
          
        </tbody>
     </table> 
                                     
    </article>                                    
          
<?php } else { ?>
    
    <article id="no">
        <p> Búsqueda no encontrada </p>
    </article>
        
<?php } ?>

 </section>             
      
       
</div>
    
<?php mysqli_close($con); //cerrar la conexión ?> 

</body>
</html>