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
$query = "select * from employees where emp_no>=11000 and emp_no <=11100";
$resultado = mysqli_query($con,$query);
print_r($resultado);
?>