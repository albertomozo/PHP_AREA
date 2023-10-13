<?php
    $ano = date("Y");
    $mes = date("m");
    $dia = date("d");
    $itemPage = 60; // items por pagina 
    $numPage = 1;  // numero de pagina actual
    if (isset($_REQUEST['numPage'])){$numPage=$_REQUEST['numPage'];}
    $url = "https://api.euskadi.eus/culture/events/v1.0/events/byDate/$ano/$mes/$dia?_elements=$itemPage&_page=$numPage";
    echo $url;
    // solucion ssl error 
    $context = stream_context_create(array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
        ),
    ));
    $resultado = file_get_contents($url,false,$context);
    $items = json_decode($resultado, true); // pasar a array un texto en formato json
    //print_r($items);
    //var_dump($items);
    echo $url;
    echo '<hr>';

    $totalItems = $items['totalItems'];
    $currentPage = $items['currentPage'];
    $numeroPages = floor($totalItems/$itemPage);
    for ($i=1;$i<=$numeroPages;$i++){
        echo "<a href=\"?numPage=$i\">$i</a>    ";
    }
    


    echo '<hr>';
    $eventos = $items['items']; // lista de peliculas
    echo '<ul>';
    foreach ($eventos as $evento){
      // obtener el id 
     
        //print_r($evento);
        $imagen = $evento['images'][0];
        $urlimagen = '';
        foreach ($imagen as $key => $value) {
            echo $value;
            if ($key == 'imageUrl' ){
                $urlimagen= $value;
            }
            # code...
        }
        echo "<img src='$urlimagen' />";
        echo '<hr>';

    
       
    }


?>


