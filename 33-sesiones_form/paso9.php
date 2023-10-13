<?php 
include("includes/sesion.php");
include("includes/funciones.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php $headerTitle = "Confirmación";
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
                <h3>Confirmación</h3>
                <?php
                // variables de sesion 
                $textoError= '';
                $textoOk = '';
                $camposFormulario = '';
                if (isset($_SESSION['nombre']))
                { 
                    $nombre=$_SESSION['nombre'];
                    $textoOk .= "<p>Nombre : $nombre</p>";
                    $camposFormulario = "<input type='hidden' value='$nombre'>";
                } else {
                    $textoError .= '<p>No hay <strong>nombre</strong></p>';
                }
                if (isset($_SESSION['apellidos']))
                { $apellidos=$_SESSION['apellidos'];} else {
                    $textoError .= '<p>No hay <strong>apellidos</strong></p>';
                }
                if (isset($_SESSION['poblacion']))
                { $poblacion=$_SESSION['poblacion'];} else {
                    $textoError .= '<p>No hay <strong>poblacion</strong></p>';
                }
                if (isset($_SESSION['codpostal']))
                { $codpostal=$_SESSION['codpostal'];} else {
                    $textoError .= '<p>No hay <strong>codpostal</strong></p>';
                }
                $errorDatos ='NO';
                if (isset($_POST['cuenta']))
                {
                    // VALIDACION 
                    if (empty($_POST['cuenta']))
                    {
                        $errorDatos = 'SI';
                    }                       
                    $cuenta=$_POST['cuenta'];
                    $_SESSION['cuenta'] = recogerVar(eliminarTildes($cuenta));
                } else {
                    $errorDatos = 'SI';
                }
                if (isset($_POST['tarjeta']))
                {
                    // VALIDACION 
                    if (empty($_POST['tarjeta']))
                    {
                        $errorDatos = 'SI';
                    }                       
                    $tarjeta=$_POST['tarjeta'];
                    $_SESSION['tarjeta'] = recogerVar(eliminarTildes($tarjeta));
                } else {
                    $errorDatos = 'SI';
                }
                if ($errorDatos == 'SI'){
                    $url = "paso3.php?cuenta=$cuenta&tarjeta=$tarjeta";
                    header("location:$url");
                    exit;
                }

                if ($textoError <> ''){
                    echo "<h3>Tenemos los siguientes errores</h3>";
                    echo $textoError;
                } else {
                    echo $textoOk;
                    echo "<form name='form1' action='pasofinal.php' method='POST' >";
                    echo $camposFormulario;

                    echo '<input type="submit" value="confirmar" name="confirmar">';
                    echo '</form>';
                }



                include("includes/debug_variables.php")
                ?>
        </div>
        <!-- footer -->
        <?php include ("includes/pie.php") ?>
        <!-- fin footer -->
          





    </div> 
</body>
</html>