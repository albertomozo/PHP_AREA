<?php 
// pelicula id
$peliculaid = 18;
include("conexion.php");
$query = "select id,titulo_original,imdbID from Peliculas";
$resultado = mysqli_query($mysqli,$query);
$lista_peliculas = '';

while ($fila = mysqli_fetch_assoc($resultado))
{
    $imdbID = $fila['imdbID'];
    $apidatos = file_get_contents("http://www.omdbapi.com/?i=$imdbID&apikey=88d3a373");
    //echo $apidatos;
    $tablaapi = json_decode($apidatos);
    //print_r ($tablaapi);
    //echo '<p>-------------------</p>';
    //print_r ($fila);
    //$jason = json_encode($fila);

    //echo "<p> ---- json -----------------</p>";
    
    //echo $jason;
    //$lista_peliculas .= $jason .',';
   // echo $tablaapi->Poster;
    $lista_peliculas .= '{  id:'. $fila['id'].',
        imagen:"'. $tablaapi->Poster . '",
        titulo:"' . $fila['titulo_original'] . '",
        year:"' .$tablaapi->Year . '",
        director: '  . $tablaapi->Director   .' 
    },';
       
      
}
 // OBTENEMOS LOS GENEROS DE LA PELICULA 
//echo '<p>------ lista pedidos ----------------</p>';
 echo $lista_peliculas;

