<?php
    $ano = date("Y");
    $mes = date("m");
    $dia = date("d");

    $url = "https://api.euskadi.eus/culture/events/v1.0/events/byDate/$ano/$mes/$dia?_elements=20&_page=1";
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

    $eventos = $items['items']; // lista de peliculas
    echo '<ul>';
    foreach ($eventos as $evento){
      // obtener el id 
     
        print_r($evento);
      
       
    }


?>


