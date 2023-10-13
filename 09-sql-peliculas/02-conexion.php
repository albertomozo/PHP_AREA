<?php
$servidor="localhost";
$bduser="root";
$bdclave="";
$bdnombre="employees";
$con=mysqli_connect($servidor,$bduser,$bdclave,$bdnombre) ; // id de conexión (link)
if ($con) 
{ echo 'Conexión Ok';}
else {
    echo 'Conexión Error';
}
$resultado = mysqli_query($con,"select * from employees");
print_r($resultado);
?>