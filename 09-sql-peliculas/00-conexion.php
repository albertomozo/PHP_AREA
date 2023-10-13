<?php
$servidor="localhost";
$bduser="alberto";
$bdclave="1234";
$bdnombre="employees";
$con=mysqli_connect($servidor,$bduser,$bdclave,$bdnombre) ; // id de conexión (link)
if ($con) 
{ echo 'Conexión Ok';}
else {
    echo 'Conexión Error';
}
?>