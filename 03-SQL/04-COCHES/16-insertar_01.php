<?php //ini_set('display_errors', 0);?>
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
            padding-top: 10px;
        }
        
    </style>
</head>
<body>
<?php
if ($_POST)
{

   include("00-conexion.php");
   $con->set_charset("utf8");
    $nombre = $_POST['nombre'];
   
    echo '<div class="y">
        <h1>INSERTAR MARCAS</h1>
       <h2>CONFIRMACIÓN</h2>';
    
    // 1 ;delete from  marcas WHERE id_marca=13;
    $sql="select * from  marcas where id_marca = $nombre"; 
    echo "<p>query $sql </p>";
    $resultado=mysqli_query($con,$sql);


   
    if (mysqli_num_rows($resultado)>0)
    {
        echo '<p>Existe</p>';
    }
    
    mysqli_close($con); 
    // '','','');drop table marcas;
} else {
?>
<div class="y">
    
    <h1>INSERTAR MARCA</h1>
       <h2>Rellenar Formulario</h2>
    <form name="form1" action="" method="POST">
        <p>Id marca <input type="text" name="nombre" > </p>
        <p><input type="submit" name="enviar" value="ver">
    </form>
</div>
<?php 
}   
?>
    
    
    

</body>
</html>