<!doctype html>
<html>
<head>
<meta charset="utf8">
<title>Conexiones</title>


<script src="js/jquery-3.1.1.min.js"></script>

<!--  COMBOS DEPENDIENTES  -->
<script src="js/combos-dependientes.js"></script>



<style>
*{
	margin:0px;
	padding:0px;
}
#container{
	max-width:800px;
	min-width:300px;
	height:auto;
	margin-left:auto;
	margin-right:auto;
	-webkit-box-shadow: 0 0px 15px;
	box-shadow: 0 0px 15px;
}
header{
	width:100%;
	height:100px;
	background-color:rgba(0,0,0,1.00);
	color:rgba(255,255,255,1.00);
	text-align:center;
	line-height:90px;
}
section{
	padding: 3%;
	border-top: 1px solid rgba(103,102,102,1.00);
	margin-top: 2%;
	overflow:hidden;
}
.marcas{
	width:20%;
	height:260px;
	float:left;
	margin-left:2%;
	margin-right:2%;
	margin-bottom:1%;
	text-align:center;
}
article{
	float:left;
	margin-right:3%;
}
a{
	text-decoration: none;
	color:rgba(0,0,0,1.00);
}

</style>
</head>

<body>

<?php
$con=mysqli_connect("localhost", "root", "","coches");
// para que no haya problemas con eñes, tildes, acentos....
$con->set_charset("utf8");
?>

<div id="container">
<header>
<h1>Ejercicio Coches</h1>
</header>


<section>
<h1>Buscar Marca y Modelos de coches</h1>
<br>
<p> Listar todos las marcas de coches que tenemos en la base de datos y mostrar en el primer select. Cuando selecciona una marca cargamos y mostramos sus modelos en el segundo select.</p>
<br>


<article>
<?php
$sql = "SELECT nombre,id_marca FROM marcas ORDER BY nombre ";
$resultado=mysqli_query($con,$sql);
?>
<form name="coches" action="40_mostrar-modelo.php" method="post" >
<label> Marca </label>
<select name="cmarca" id="cmarca">
<option value="nada">-- Seleccione una Marca --</option>

    <?php while($fila=mysqli_fetch_array($resultado)) { ?>
<option value="<?php echo $fila['id_marca']?>"><?php echo $fila["nombre"]?></option>
     <?php } ?>
</select>

<br><br>

<label> Modelos</label>
<select name="cmodelos" id="cmodelo" onChange="coches.submit()">
<option value="nada">-- Seleccione un Modelo --</option>
</select>
</form>

</article>

</section>



</div>
<?php  mysqli_close($con); ?>
</body>
</html>
