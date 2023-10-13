<?php 
include("includes/sesion.php");
include("includes/funciones.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php $headerTitle .= " - Paso3";
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
            <H3>Datos Pago</h3>
            <?php 
                // variables del formulario de esta pagina
                $cuenta  = '';
                $tarjeta = '';
                $error = 'N';

                 // recogemos las variables si existen PASO 2 
                 /* if (isset($_SESSION['nombre'])){$nombre = $_SESSION['nombre']; }
                 if (isset($_SESSION['apellidos'])){$apellidos = $_SESSION['apellidos']; } */
                // venimos por get con parametos => ERROR de paso3.php
                $error='NO';
                if (isset($_GET['cuenta'])){ $cuenta = $_GET['cuenta']; $error='SI';}
                if (isset($_GET['tarjeta'])){ $tarjeta = $_GET['tarjeta'];$error ='SI';}
                if ($error=='NO')
                {
                    $errorDatos = 'N';
                    
                    if (isset($_SESSION['cuenta'])){ 
                        $cuenta = $_SESSION['cuenta'];
                        if (isset($_SESSION['tarjeta'])){ $tarjeta = $_SESSION['tarjeta'];}
                    } else {
                        if (isset($_POST['poblacion']))
                        {
                            // VALIDACION 
                            if (empty($_POST['poblacion']))
                            {
                                $errorDatos = 'SI';
                            }                       
                            $poblacion=$_POST['poblacion'];
                            $_SESSION['poblacion'] = recogerVar(eliminarTildes($poblacion));
                        } else {
                            $errorDatos = 'SI';
                        }
                        if (isset($_POST['codpostal']))
                        {
                            $codpostal=$_POST['codpostal'];
                            // faltaria validacion
                            $_SESSION['codpostal'] = recogerVar(eliminarTildes($codpostal));
                        }
                        if ($errorDatos == 'SI'){
                            $url = "paso2.php?poblacion=$poblacion&codpostal=$codpostal";
                            header("location:$url");
                            exit;
                        }
                    }    
                } else {
                    echo '<p> Error en la introducción de datos<p>';
                }

            
            ?>
            <form name="form1" action="paso9.php" method="POST" >   
                 <input type="text" name="cuenta" value="<?php echo $cuenta; ?>" placeholder="c/c"><br>
                <input type="" name="tarjeta" value="<?php echo $tarjeta; ?>" placeholder="tarjeta"><br>
                <input type="submit" name="submit" value="CONFIRMAR"> 
            </form>
            <?php include("includes/debug_variables.php"); ?>
            </div>
        <!-- footer -->
        <?php include ("includes/pie.php") ?>
        <!-- fin footer -->
          





    </div> 
</body>
</html>