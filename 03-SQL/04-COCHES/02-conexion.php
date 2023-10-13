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
      
      <h1>Conexiones - Coches</h1><br>
      
      <?php
       
      $con=mysqli_connect("localhost","root","","coches");
       
       // para que no haya problemas con "ñ", tildes, acentos....
       $con->set_charset("utf8");
       // mysqli_set_charset("utf8");
       
       // ---------  LA CONSULTA ---------- //
       $sql="SELECT nombre FROM marcas";
       
       // --------- EJECUCIÓN DE LA CONSULTA ---------- //
       
       // ejecuta la consulta que pasemos
       $resultado=mysqli_query($con,$sql);
       
       // para ver el número de registros que tenemos se utiliza la función mysqli_num_rows()
       echo "<p> Nº resultados: ".mysqli_num_rows($resultado)."</p>";
       
       // --------- LISTAR LOS DATOS ---------- //
       
       // para listar las marcas del array (de la tabla), con el bucle pasamos a la siguiente fila de la tabla (registro array)
       
       while($fila=mysqli_fetch_array($resultado)){
           echo "<p>" .$fila["nombre"]. "</p>";
       }
       
       // cerrar conexiones
       mysqli_close($con);
                   
?>
       
       
   </div>
    
</body>
</html>