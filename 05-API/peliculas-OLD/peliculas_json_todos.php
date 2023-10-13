<?php 
// pelicula id
$peliculaid = 18;
include("conexion.php");
$query = "select titulo_original,imdbID from Peliculas";
$resultado = mysqli_query($mysqli,$query);
$lista_peliculas = '';

while ($fila = mysqli_fetch_assoc($resultado))
{
    echo '<p>-------------------</p>';
    print_r ($fila);
    $jason = json_encode($fila);

    echo "<p> ---- json -----------------</p>";
    
    echo $jason;
    $lista_peliculas .= $jason .',';
       
      
}
 // OBTENEMOS LOS GENEROS DE LA PELICULA 
echo '<p>------ lista pedidos ----------------</p>';
 echo $lista_peliculas;

