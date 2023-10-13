<!-- include de barra de navegacion -->
<?php 
echo $_SERVER["DOCUMENT_ROOT"];
echo $pagina=$_SERVER["PHP_SELF"]; ?>
<nav id="menu">
    <ul>
        <li><a href="paso1.php" class="<?php if ($pagina =='/33-sesiones_form/paso1.php') {echo 'active';} ?>" >Datos personales</a></li>
        <li><a href="paso2.php" class="<?php if ($pagina =="$directorio/paso2.php") {echo 'active';} ?>">Datos Direccion</a></li>
        <li><a href="paso3.php" class="<?php if ($pagina =="$directorio/paso3.php") {echo 'active';} ?>">Datos Pago</a></li>
        <li><a href="paso9.php" class="<?php if ($pagina =="$directorio/paso9.php") {echo 'active';} ?>">Confirmar</a></li>
       
    </ul>
</nav>