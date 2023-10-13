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
$meses[0]='Enero';

// definir una variable...asignamos un valor
var_dump($meses);
print_r ($meses);
echo "<p> $meses[0] </p>";
if (isset($meses[1])){
echo "<p> $meses[1] </p>";}
// 
if (isset($meses[1])){
    $mes1 = $meses[1];
} else {
    //$mes1 = '';
}
echo " esta sen el mes1 $mes1 lkahsdlhsadhsa ";

	
    

?>







</body>

</html>