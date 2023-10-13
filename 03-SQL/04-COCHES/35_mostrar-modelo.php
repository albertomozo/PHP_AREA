<!doctype html>
<html>
<head>
<meta charset="utf8">
<title>Conexiones</title>

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
article .mod{
	float:left;
	margin-right:3%;
}
a{
	text-decoration: none;
	color:rgba(0,0,0,1.00);
}
.precio{
	background-color:rgba(249,0,4,1.00);
	display:block;
	float:right;
	width:100px;
	padding:10px;
	color:rgba(255,255,255,1.00);
}
img{
	float:left;
	padding-right:30px;
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
<form name="marcas" action="35_mostrar-modelo.php" method="post" >
<label> Marca </label>
<select name="cmarca" onChange="marcas.submit()">
<option value="nada">-- Seleccione una Marca --</option>

    <?php while($fila=mysqli_fetch_array($resultado)) { ?>
<option value="<?php echo $fila['id_marca']?>"><?php echo $fila["nombre"]?></option>
     <?php } ?>
</select>
</form>
</article>




<article>
<form name="modelos" action="35_mostrar-modelo.php" method="post" >
<label> Modelos</label>
<select name="cmodelos" onChange="modelos.submit()">

<option value="nada">-- Seleccione un Modelo --</option>

<?php if(isset($_POST["cmarca"])){ 
$idmarca=$_POST["cmarca"];
$sql = "SELECT nombre,id_modelo,id_marca FROM modelos WHERE (id_marca=$idmarca) ORDER BY nombre ";
$resultado=$con->query($sql);
?>
    <?php while($fila=mysqli_fetch_array($resultado)) { ?>
<option value="<?php echo $fila['id_modelo']?>"><?php echo $fila["nombre"]?></option>
     <?php } ?>
     
     <?php } ?>
</select>
</form>
</article>






</section>






<section>

<?php if(isset($_POST["cmodelos"])){ ?>
<?php
// recibir el dato del select, que modelo de coche es !!!
$idmodelo=$_POST["cmodelos"];
// comprobar si el dato llega bien
//echo $idmodelo;
$sql ="SELECT marcas.logo,marcas.nombre AS marnom,modelos.nombre AS modnom,modelos.precio,modelos.foto
FROM marcas,modelos
WHERE (modelos.id_marca=marcas.id_marca) AND  (modelos.id_modelo=$idmodelo)";
$resultado=$con->query($sql);
$fila=mysqli_fetch_array($resultado);
?>

<h1>Nuestro Modelo</h1>
<br>
<p> Listar el modelo de coches que hemos seleccionado en el select, mostrando en la pantalla el logo y el nombre de la marca. Mostrar también nombre,precio y foto del modelo.</p>
<br>
<img src="imagenes/<?php echo $fila['logo']?>" width="65" height="41" alt=""/> 
<h1><?php echo $fila["marnom"]?></h1>
<br><br>
<article>
<h1 class="mod"><?php echo $fila["modnom"]?></h1>
<p class="precio"><?php echo number_format($fila["precio"],0,",",".")?> Euros</p>
<img src="imagenes/modelos/<?php echo $fila['foto']?>" width="100%" alt=""/>
</article>
<?php }  ?>

</section> 


</div>
<?php  mysqli_close($con); ?>
</body>
</html>
