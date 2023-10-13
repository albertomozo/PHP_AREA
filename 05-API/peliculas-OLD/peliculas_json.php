<?php 
// pelicula id
$peliculaid = 18;
include("conexion.php");
$query = "select * from Peliculas where id = $peliculaid";
$resultado = mysqli_query($mysqli,$query);
$fila = mysqli_fetch_assoc($resultado)  ;

       echo '<p>Titulo' . $fila['titulo original'] .'</p>';
    
       echo '<p>iD a apI : ' . $fila['imdbID'] .'</p>';
      

 // OBTENEMOS LOS GENEROS DE LA PELICULA 
print_r ($fila);
$jason = json_encode($fila);

echo "<p> ---- json -----------------</p>";
 
echo $jason;