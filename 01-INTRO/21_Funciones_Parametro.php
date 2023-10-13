<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>php</title>

</head>


<body>


<h1> Funciones definidas por el usuario</h1>
<p>Además de las funciones de PHP incorporadas, podemos crear nuestras propias funciones.</p>

<p>Una función es un bloque de instrucciones que se pueden utilizar en varias ocasiones en un programa.</p>

<p>Sintaxis para CREAR una función: </p>

<p>	
		function nombrefuncion([argumentos]){ <br>
			Instrucciones; <br>
			[return valor;] <br>
		}
</p>	

<p>Argumentos de función</p>
<p>La información puede suministrarse a las funciones a través de argumentos. Un argumento es como una variable.</p>
<p>Los argumentos se especifican después de que el nombre de la función, dentro de los paréntesis. Puede añadir tantos argumentos como desee, sólo les separan con una coma.</p>

<p>Sintaxis para LLAMAR a una función: <br>
	
		nombrefuncion();<br>
		nombrefuncion(argumento);	<br>
		
</p>

<h2>Mostrar Ejemplo</h2>


<?php 
//Ejecutar la función para que salude a la persona que hemos metido como parámetro
saludo1("Pablo");
saludo1("Ane");
//Ejecutar la función para que salude a la persona que hemos metido como parámetro
echo "<p>Saludar con nombre y apellido</p>";
saludo2("Pablo","Perez");
saludo2("Pepito","Panes");

?>


<?php
// Crear una función con un argumento
function saludo1($nombre){
	echo "<p> Hola $nombre </p>";
}
// Crear una función con dos argumentos
function saludo2($nombre,$apellido){
	echo "<p> Bienvenido $nombre $apellido</p>";
}
?>


</body>

</html>
