<?php
if ($_POST){
    include("00-conexion_peliculas.php");
    $search = urlencode( $_REQUEST['search']);
   // $url = "https://api.themoviedb.org/3/search/movie?api_key=$apikey&language=es&query=$search&page=1&include_adult=false";
   // $resultado = file_get_contents($url);
 /*    curl --request GET \
    --url 'https://api.themoviedb.org/3/search/movie?include_adult=false&language=en-US&page=1' \
    --header 'Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5OGZlZTM0N2I5MWRhODM5MzJlYThiOWRhYTBlZGVjZSIsInN1YiI6IjYwODJmZTgyMDFiMWNhMDA0MWVjMmUyMyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.FdoxXdJncEQQ24BduFOAz-P3gt6I7pPd6s7vWc8-NrM' \
    --header 'accept: application/json' */
    //$access_token
   

    $url = "https://api.themoviedb.org/3/search/movie?query=$search&include_adult=false&language=es-ES&page=1";
    $authorization = "Bearer $access_token";
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_HTTPHEADER => array(
        'Authorization: ' . $authorization,
        'accept: application/json'
      ),
      CURLOPT_SSL_VERIFYPEER => false, // Deshabilitar la verificación del certificado SSL
      CURLOPT_SSL_VERIFYHOST => false, // Deshabilitar la verificación del host SSL
    ));
    
    
    $response = curl_exec($curl);
    curl_close($curl);
    
    // Procesar la respuesta
    if ($response) {
      $data = json_decode($response, true);
      // Hacer algo con los datos recibidos
      var_dump($data);
    } else {
      // Manejar el error
      echo 'Error al realizar la solicitud cURL: ' . curl_error($curl);
    }
  
    $resultado = $response; 
    echo '<hr>';
    $items = json_decode($resultado, true);
    //print_r($items);
    echo $url;
    echo '<hr>';
    echo "paginas " . $items['page'];
    $pelis = $items['results']; // lista de peliculas
    foreach ($pelis as $valor){
        $tmdbid = $valor['id'];
       echo '<p>' . $valor['id'] . '-' . $valor['release_date'] . '-' .$valor['original_title'].' <a href="09-peliculas_nueva_grabar_03.php?id='.$tmdbid.'">grabar</a>' ;
       echo '<img src="'.$tmdb_ruta_poster.$valor['poster_path'].'" width="40px">';
       echo '</p>';
    }
    mysqli_close($con);
} else {
?>
    <form name="form1" action="" method="POST">
        <input type="text" name="search" id="search" placeholder="introduzca busqueda">
        <input type="submit" name="submit" value="buscar">
    </form>

<?php
}
?>


