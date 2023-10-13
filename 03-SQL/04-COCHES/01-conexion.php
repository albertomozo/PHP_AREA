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
            padding-top: 100px;
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
    
    </style>
</head>
<body>
   
   <div id="container">
      
      <h1>Conexiones - Coches</h1>
      <h2>Marcas</h2>
      <br>
      
      <?php
       // 1. hacer conexiones
        
            $con=mysqli_connect("localhost","root","","coches"); 
       
       // para que no haya problemas con "ñ", tildes, acentos....
            $con->set_charset("utf8");
            //mysqli_set_charset("utf8");
       
       // 2. hacer consulta
            $sql = "SELECT nombre FROM marcas";
       
       // 3. ejecutar la consulta
            $resultado=mysqli_query($con,$sql); 
       
       // 4. guarda la consulta, array, te devuelve el resultado...formato tabla
            $fila=mysqli_fetch_array($resultado); 
       
       // 5. mostra en pantalla
       
            echo $fila["nombre"];
    // 5.1 otrop registro
            $fila=mysqli_fetch_array($resultado);
            echo $fila["nombre"];
       
       // 6. cerrar conexiones 
            mysqli_close($con);         
       ?>
       
       
   </div>
    
</body>
</html>