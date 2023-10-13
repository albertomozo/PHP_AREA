<?php 
// pelicula id
$peliculaid = 18;
include("conexion.php");
$query = "select * from Peliculas where id = $peliculaid";
$resultado = mysqli_query($mysqli,$query);
$fila = mysqli_fetch_assoc($resultado)  ;

echo '<p>Titulo' . $fila['titulo original'] .'</p>';

echo '<p>iD a apI : ' . $fila['imdbID'] .'</p>';

print_r ($fila);

// OBTENEMOS LOS GENEROS DE LA PELICULA 
$query = "select Generos.id as generoid ,Generos.nombre as nombre  from Generos_Peliculas, Generos  where Generos_Peliculas.peliculas_id = $peliculaid and Generos.id = Generos_Peliculas.genero_id";
$resultado = mysqli_query($mysqli,$query);
while ($fila1 = mysqli_fetch_assoc($resultado))     
 {
    $indice = $fila1['generoid'];
    $valor = $fila1['nombre'];
    $Ageneros[$indice] = $valor;
     
 }
print_r ($Ageneros);

 $fila['generopelis'] = $Ageneros;
 print_r ($fila);
 $jason = json_encode($fila);

 
echo $jason;