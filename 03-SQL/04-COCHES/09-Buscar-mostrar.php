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
         .container{
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
?> 
   
<div class="container">
 
<h1>Conexiones - Coches</h1>  
   
<?php if(empty($_POST)){ ?>


<div id="no_hay_envio">

<h2>BUSCAR POR MARCA</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magni facilis doloribus commodi fugit hic excepturi quos minima laborum pariatur, animi facere explicabo assumenda, quia quo! Laborum quae dolorum magni!</p>    
 
<?php
    $sql="SELECT nombre, id_marca FROM marcas ORDER BY nombre ASC";
    $resultado=mysqli_query($con,$sql);
?>
       
<form name="form1" id="form1" action="09-Buscar-Mostrar.php" method="post"> 
   
    <label>Marca</label>
    <select name="cmarcas" onChange="form1.submit()">
            
             <option>Elige una marca</option>
             
             <?php  while($fila=mysqli_fetch_array($resultado)){  ?>
             
             <option value="<?php echo $fila['id_marca']?>"><?php echo $fila["nombre"] ?></option>
             
             <?php } ?>
    </select>
    
</form>
    
 </div>   
     
<?php } else{ ?>


<section id="si_hay_envio">
    
<?php
    
    // RECIBIR DATO
    $id=$_POST["cmarcas"]; 
    //echo $id;
    
    // HACER LA CONSULTA
    $sql="SELECT marcas.nombre AS nommarca, logo, modelos.nombre AS nommodelo, foto, precio FROM modelos, marcas 
    WHERE (marcas.id_marca=modelos.id_marca) AND (modelos.id_marca=$id) 
    ORDER BY modelos.nombre ASC";
    
    // EJECUTAR LA CONSULTA
    $resultado=mysqli_query($con,$sql);
    
?> 
<h2>MOSTRAR MODELOS</h2>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magni facilis doloribus commodi fugit hic excepturi quos minima laborum pariatur, animi facere explicabo assumenda, quia quo! Laborum quae dolorum magni!</p>
    
<?php if(mysqli_num_rows($resultado)!=0){ // si hay registros en la consulta ?>
    
        <?php  while($fila=mysqli_fetch_array($resultado)){  ?>
 
    <article>
    
    <img class="izq logo" width="40px" src="imagenes/<?php echo $fila['logo']?>">
    <h3><?php echo $fila["nommarca"]; ?></h3>
    
    <br><br>
    
    <div>
        <h4 class="izq"><?php echo $fila["nommodelo"] ?></h4>
        <p class="dech precio"><?php echo $fila["precio"] ?></p>
    </div>
    <img width="100%" src="imagenes/modelos/<?php echo $fila['foto'] ?>">
   
    </article>
    
        <?php } // FIN WHILE  ?>
     
       
<?php }else{ // sino hay registros  ?>
      
       <article>
        <p class='precio'>Lo siento, no se ha encontrado ningún modelo de esta marca</p>
        </article>
        
<?php } ?>
    

     
   
</section>
     
<?php } ?>
     
</div>
   
    
<?php  mysqli_close($con); ?>  
     
</body>
</html>