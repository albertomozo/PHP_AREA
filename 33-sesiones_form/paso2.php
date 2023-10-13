<?php 
include("includes/sesion.php");
include("includes/funciones.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php $headerTitle .= " - Paso2";
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
            <H3>Datos Dirección</h3>
            <?php 
                // variables del formulario de esta pagina
                $poblacion = '';
                $codpostal = '';
                if ($_SERVER['REQUEST_METHOD']=='POST'){

                    $errorDatos = ''; 
                    if (isset($_POST['nombre']))
                    {
                        // VALIDACION 
                        if (empty($_POST['nombre']))
                        {
                            $errorDatos = 'SI';
                        }                       
                        $nombre=$_POST['nombre'];
                        $_SESSION['nombre'] = recogerVar(eliminarTildes($nombre));
                    } else {
                        $errorDatos = 'SI';
                    }
                    if (isset($_POST['apellidos']))
                    {
                        // VALIDACION 
                        if (empty($_POST['apellidos']))
                        {
                            $errorDatos = 'SI';
                        }              
                        $apellidos=$_POST['apellidos'];
                        // faltaria validacion
                        $_SESSION['apellidos'] = recogerVar(eliminarTildes($apellidos));
                    }
                    if ($errorDatos == 'SI'){
                        $url = "paso1.php?nombre=$nombre&apellidos=$apellidos";
                        header("location:$url");
                        exit;
                    }
                } else {
                    // recogemos las variables si existen PASO 1 
                if (isset($_SESSION['nombre'])){$nombre = $_SESSION['nombre']; }
                if (isset($_SESSION['apellidos'])){$apellidos = $_SESSION['apellidos']; }
                // venimos por get con parametos => ERROR de paso3.php
                $error='NO';
                if (isset($_GET['poblacion'])){ $poblacion = $_GET['poblacion']; $error='SI';}
                $dopostal = '';
                if (isset($_GET['codpostal'])){ $codpostal = $_GET['codpostal'];$error ='SI';}
                if ($error=='NO')
                {
                    $errorDatos = 'N';
                    
                    if (isset($_SESSION['poblacion'])){ 
                        $poblacion = $_SESSION['poblacion'];
                        if (isset($_SESSION['codpostal'])){ $codpostal = $_SESSION['codpostal'];}
                    } else {
                       
                    }    
                } else {
                    echo '<p> Error en la introducción de datos<p>';
                }



                }

                

            ?>
            <form name="form1" action="paso3.php" method="POST" >   
                <input type="hidden" name="nombre" value="<?php echo $nombre; ?>" >
                <input type="hidden" name="apellidos" value="<?php echo $apellidos; ?>" >
                <input type="poblacion" name="poblacion" value="<?php echo $poblacion; ?>" placeholder="Poblacion"><br>
                <input type="" name="codpostal" value="<?php echo $codpostal; ?>" placeholder="Código Postal"><br>
                <input type="submit" name="submit" value="PASO 3 - DATOS PAGO"> 
            </form>
            <?php include("includes/debug_variables.php"); ?>
            </div>
        <!-- footer -->
        <?php include ("includes/pie.php") ?>
        <!-- fin footer -->
          





    </div> 
</body>
</html>