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
    
$importe=200;  
$coniva=$importe+iva($importe,0.07); // llamar a la function iva
echo "<p> Importe: $importe, Importe + IVA (7) : $coniva </p>";

    
$x=100;  
$coniva=$x+iva($x,0.21); // llamar a la function iva
echo "<p> Importe: $x, Importe + IVA (21) : $coniva </p>";

$x=300;
$tipoiva = 4;
$iiva = iva($x,4/100);
$coniva=$x+$iiva; // llamar a la function iva
echo "<p> Importe: $x <br> 
IVA ($tipoiva %) : $iiva <br>
<STRONG>Importe Total +  :</STRONG> $coniva </p>";
?>


<?php
// FUNCIÓN QUE CALCULA EL IVA DE UN IMPORTE
function iva($importe,$piva){
	$total=($importe * $piva);
	return $total;
}
?>






</body>

</html>