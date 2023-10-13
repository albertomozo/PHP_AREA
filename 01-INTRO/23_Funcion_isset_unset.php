<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>php</title>

</head>

<body>


<h1>Funciones isset() y unset()</h1>

<p>isset(variable_o_array)  ->  Función para saber si una variable o array existe<br>
Devuelve true(1) si existe la expresión y false/nada si no existe!!!
</p>

<p>unset(variable_o_array)  ->  Función que sirve para destruir una variable o array</p>


<?php 

// definir una variable...asignamos un valor
//$hoy="Hoy es un día gris y llueve mucho";
//$hoy="";
echo "<p>Comprobamos si la variable existe: ".isset($hoy)."</p>";
//echo $hoy;
if (isset($hoy))
{
    echo $hoy;
} else {
    //echo 'Ups no existe $hoy';
}
	
echo '<hr>';   
// Destruir el contenido
$otra="Hoy hace sol y muuuucho calor.";
//unset($otra); // Destruye la variable
echo $otra; // da un error porque la variable NO EXISTE
?>







</body>

</html>