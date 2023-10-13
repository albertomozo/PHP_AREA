<?php session_start();
if (!isset($_SESSION['clienteip'])){
	header("location:caducada.html");
	exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sesiones</title>
</head>
<body>
	<H3>Sesión</H3>

	<?php 
		echo "<p> session_id() : " . session_id() . '</p>';
	echo '<p>Listado de las variables de sesion</p>';
	foreach ($_SESSION as $key => $valor) {
		echo '<p>$_SESSION["'.$key.'"]  = '.  $valor;
	}
	echo '<p><strong>status :</strong> ' . session_status() .'</p>';
	include('inc_logs.php');
	error_log("¡sesion $vsesion cerrada ! " . date("Y/m/d H:i:s") . "\r\n" , 3, "c:\wamp64\logs\my-errors.log");
	echo '<p> Ahora vamos a cerrar la sesión </p>';
	session_destroy(); 
	include('inc_logs.php');
	echo '<p><strong>status</strong> después de session_destroy() : ' . session_status() .'</p>';
	echo '<p> intentamos ver las variables de sesion</p>';
	echo "<p> session_id() : " . session_id() . '</p>';
	if (!isset($_SESSION['clienteip']))
	{
		echo '<p>ya no existe la variable de sesion clienteip</p>';
	}



	?>


</body>
</html>
<?php 
