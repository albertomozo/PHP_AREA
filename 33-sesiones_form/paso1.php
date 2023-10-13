<?php 
session_start();
$_SESSION['IP']=$_SERVER['REMOTE_ADDR'];
include("includes/funciones.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>

    <?php
    $headerTitle .= " - Paso1";
     include("includes/header.php");?>
    
</head>
<body>
    <div id="container">
        <!-- cabecera -->
        <?php include ("includes/cabecera.php") ?>
        <!-- fin cabecera -->
        <!-- navegacion -->
        <?php include ("includes/navegacion.php") ?>
        <!-- fin navegacion> -->
        <div id="contenido">
            <h3>Datos Personales</h3>
            <?php 
                // inicializacion de valores
                $nombre = '';
                $apellidos = '';
                

                // CONTROL ERROR (EXISTE $_GET['campo'])
                if (isset($_GET['nombre'])){ $nombre = $_GET['nombre']; echo '<p>Error</p>';}              
                if (isset($_GET['apellidos'])){ $apellidos = $_GET['apellidos'];}  
                // PARA RELLENAR DATOS SI CLICAMOS EN EL MENU DE NAVEGACION
                  if (isset($_SESSION['nombre'])){ $nombre = $_SESSION['nombre'];}
                  if (isset($_SESSION['apellidos'])){ $apellidos = $_SESSION['apellidos'];} 
                // EL FORMUALARIO TOMARA EL VALOR DE $NOMBRE Y $APELLIDO
            
            ?>
            <form name="form1" method="POST" action="paso2.php">
                <input type="text" name="nombre" value="<?php echo $nombre; ?>" placeholder="nombre"><br>
                <input type="text" name="apellidos" value="<?php echo $apellidos; ?>" ><br>
                <input type="submit" name="submit" value="PASO 2"> 
            </form>
            <?php include("includes/debug_variables.php"); ?>
        </div>
        <!-- footer -->
        <?php include ("includes/pie.php") ?>
        <!-- fin footer -->
          





    </div> 
</body>
</html>