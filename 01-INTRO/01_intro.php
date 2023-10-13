<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php</title>

<style type="text/css">
#container{
	max-width:800px;
	height:auto;
	margin-left:auto;
	margin-right:auto;
}
    
.txt {
	font-size:20px;
	color: red;
}

</style>

</head>

<body>

<div id="container">

<h1 class="txt">Empezamos con PHP</h1>

<p>PHP es un lenguaje de programación de uso general de <strong>código del lado del servidor</strong> originalmente diseñado para el desarrollo web de contenido dinámico. Fue uno de los primeros lenguajes de programación del lado del servidor que se podían incorporar directamente en el documento HTML en lugar de llamar a un archivo externo que procese los datos. El código es interpretado por un servidor web con un módulo de procesador de PHP que genera la página Web resultante.</p>
<p>Puede ser usado en la mayoría de los servidores web al igual que en casi todos los sistemas operativos y plataformas sin ningún costo.</p>
<ul>
<li>Es lo suficientemente potente como para estar en el centro del sistema de blogs más grande en la web (WordPress)! </li>
<li>Es lo suficientemente profunda para ejecutar la mayor red social (Facebook)! </li>
<li>También es lo suficientemente fácil para ser primer idioma del lado del servidor de un principiante!</li>
</ul>

<p>Archivos PHP pueden contener  HTML, CSS, JavaScript, Jquery, PHP <br>
Código PHP se ejecutan en el servidor, y el resultado se devuelve al explorador como HTML plano.<br>
Archivos PHP tienen extensión ".php"<br>
PHP es gratuito. Puedes descargarlo desde el recurso oficial de PHP: www.php.net.
</p>
<p>Lo que puede hacer con PHP?</p>
<ul>
<li>PHP puede generar páginas con contenidos dinámicos</li>
<li>PHP puede crear, abrir, leer, escribir, borrar y cerrar archivos en el servidor</li>
<li>PHP puede recopilar datos de formularios</li>
<li>PHP puede enviar y recibir cookies</li>
<li>PHP puede añadir, borrar, modificar los datos de su base de datos</li>
<li>PHP puede ser usado para el control de acceso de los usuarios</li>
</ul>


<!--    -->




<?php
    
# comentario en una linea

    
/* 
	comentario
	en varias
	lineas 

*/
    
// Escribe en pantalla un saludo

    
	echo "<h1>Código php</h1>";
    
	echo "<p>Holaaaaaa Mundooooo</p>", "<p class='txt'>Hoy es un gran día, ánimoooooo</p>";
    
    
    // print no puede esribir dos cosas en una linea !!!
    
    print "<p> Otra cosa escrita con print.</p>";
    
    //print "<p>Holaaaaaa caracola</p>", "<p>ánimoooooo</p>";
	
?>

</div>
</body>
</html>