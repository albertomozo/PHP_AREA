<?php
if ($_POST){
    include("00-conexion_peliculas.php");
    $search = urlencode( $_REQUEST['search']);
    $url = "https://api.themoviedb.org/3/search/person?api_key=$apikey&language=es&query=$search&page=1&include_adult=false";
    $resultado = file_get_contents($url);
    $items = json_decode($resultado, true);
    //print_r($items);
    echo $url;
    echo '<hr>';
    echo "paginas " . $items['page'];
    echo '<hr>';
    $actores = $items['results']; // lista de peliculas
    foreach ($actores  as $actor){
       echo $actorId = $actor['id'];
       $actorName = $actor['name'];
       $actorImagen = $actor['profile_path'];
       if ($actor['known_for_department'] == 'Acting'){
            echo "<p>$actorId - $actorName - <img  src='$tmdb_ruta_poster/".$actorImagen."'/> - <a href='https://api.themoviedb.org/3/person/$actorId/movie_credits?api_key=$apikey&language=es' target='_blank'>SUS PELIS</a></p>";
           

        $url2 = "https://api.themoviedb.org/3/person/$actorId/movie_credits?api_key=$apikey&language=es";
        $resultado2 = file_get_contents($url2);
        $items = json_decode($resultado2, true);
        $peliculas = $items['cast']; // lista de peliculas
        echo '<ul>';
        foreach ($peliculas  as $pelicula){
            echo '<li>'.$pelicula['original_title'].' ( ' .$pelicula['character'] .' )</li>';
        }
        echo '</ul>';
       echo '<hr>';
       }
      
   
    }
    mysqli_close($con);
} else {
?>
    <form name="form1" action="" method="POST">
        <input type="text" name="search" id="search" placeholder="introduzca actor">
        <input type="submit" name="submit" value="buscar">
    </form>

<?php
}
?>


