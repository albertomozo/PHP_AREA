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

<form name="marcas" action="13_buscar-select.php" method="post" >

<?php
$sql = "SELECT nombre,id_marca FROM marcas ORDER BY nombre ";
$resultado=mysqli_query($con,$sql);
?>
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

<form name="modelos" action="13_mostrar-modelo.php" method="post" >
<label> Modelos</label>


<select name="cmodelos" onChange="modelos.submit()">

<?php if(isset($_POST["cmarca"])){ // CONDICIÓN ?>
 
<option value="nada">-- Seleccione un Modelo --</option>  
    
 <?php  
    $idmarca=$_POST["cmarca"];
    $sql = "SELECT nombre,id_modelo FROM modelos WHERE (id_marca=$idmarca) ORDER BY nombre ";
    $resultado=mysqli_query($con,$sql);
?>

<?php while($fila=mysqli_fetch_array($resultado)) { ?>
    <option value="<?php echo $fila['id_modelo']?>"><?php echo $fila["nombre"]?></option>
<?php } // FIN WHILE ?>
     
<?php } // FIN CONDICION ?>

</select>
</form>

</article>

</section>





</div>
<?php  mysqli_close($con); ?>
</body>
</html>
