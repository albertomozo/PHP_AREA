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
       
$sql="SELECT nombre FROM marcas WHERE (nombre LIKE 'A%')";
       
       // --------- EJECUCIÓN DE LA CONSULTA ---------- //
       
       // ejecuta la consulta que pasemos, se genera un array de resultado (como una tabla)
$resultado=mysqli_query($con,$sql);
       
// condición si hay registros en la consulta realizada      
if(mysqli_num_rows($resultado)!=0){
           
        echo "<p> Nº resultados: ".mysqli_num_rows($resultado)."</p>";
    
            // --------- LISTAR LOS DATOS ---------- /
            while($fila=mysqli_fetch_array($resultado)){
                echo "<p>" .$fila["nombre"]. "</p>";
            }
           
}else{ // si no hay registros de la consulta... mostramos este mensaje
        echo "<p> Búsqueda no encontrada </p>";
}
        
    mysqli_close($con);
                      
?>
       
       
   </div>
    
</body>
</html>