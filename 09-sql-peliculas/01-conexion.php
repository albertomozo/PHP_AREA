<?php
$servidor="localhost";
$bduser="root";
$bdclave="";
$bdnombre="employees";
$con=mysqli_connect($servidor,$bduser,$bdclave,$bdnombre) ; // id de conexión
if ($con) 
{ echo 'Conexión Ok';}
else {
    echo 'Conexión Error';
}
?>