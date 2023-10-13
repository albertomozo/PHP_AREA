<?php
if ($_POST){
    include("00-conexion-unsplash.php");
    $search = urlencode( $_REQUEST['search']);
    $url = "https://api.unsplash.com/search/photos/?client_id=$apikey&query=$search";

    $resultado = file_get_contents($url);
    $items = json_decode($resultado, true);
    //print_r($items);
    //var_dump($items);
    echo $url;
    echo '<hr>';

    $fotos = $items['results']; // lista de peliculas
    echo '<ul>';
    foreach ($fotos as $valor){
      // obtener el id 
      $fotoId = $valor['id'];
      $url2 = "https://api.unsplash.com/photos/$fotoId?client_id=$apikey";

      $resultado2 = file_get_contents($url2);
      $items2 = json_decode($resultado2, true);
      //print_r($items2);
       $fotoLocation = $items2['location']['position']['latitude'] . ' , ' . $items2['location']['position']['longitude'];
      //



       echo '<li>';
       echo '<img src="'.$valor['urls']['thumb'].'" width="100px">';
       echo "<span>Coordenadas : " . $fotoLocation;
       //var_dump ($valor);
       echo '</li>';
       
    }

} else {

    $elementos = ['Alhambra','Mezquita de Cordoba','Sagrada Familia','Peine del viento','Igueldo','Amara'];
    ?>
    <form name="form1" action="" method="POST">
        <select  name="search" id="search" >
            <?php
                foreach ($elementos as $valor) {
                echo "<option value=\"$valor\">$valor</option>";
                }
            ?>
       </select>
        <input type="submit" name="submit" value="buscar">
    </form>

<?php
}
?>


