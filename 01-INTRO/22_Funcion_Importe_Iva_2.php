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
	
		nombrefuncion(); <br>
		nombrefuncion(argumento);	<br>
</p>

<h2>Mostrar Ejemplo</h2>



<?php 
  


$x=300;
$tipoiva = 4;
echo  iva($x,$tipoiva);
echo  iva(1000,7);
echo  ivA(2000,23);




// FUNCIÓN QUE CALCULA EL IVA DE UN IMPORTE
function iva($importe,$tipoiva){
	$iva=($importe * $tipoiva)/100;
    $importetotal = $importe + $iva;
    $texto =  "<p> Importe: $importe <br> 
    IVA ( $tipoiva %) : $iva <br>
    <strong>Importe Total   : </strong>$importetotal </p>";
	return $texto;
}
?>






</body>

</html>