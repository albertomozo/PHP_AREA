<?php
// accedemos a la api de wordpress para copiar los POST
$url = 'http://localhost/wordpress/wp-json/wp/v2/posts';
$data = file_get_contents($url);
$resultado = json_decode($data);
//var_dump($resultado);

// recorremos los POSTS DE WORDPRESS
 foreach ($resultado as $item){
    $title =  $item->title->rendered;
    $estatus = $item->status;
    $content = $item->content->rendered;
    $user_id = $item->author;
    // CREAMOS EL CURL
    $fields = array('title' =>urlencode($title), 
                    'estatus' => urlencode($estatus),
                    'content'=>urlencode($content),
                    'user_id'=> $user_id);
    $fields_string = http_build_query($fields);
    //echo $fields_string;
   
    $ch = curl_init();
    $urlcurl = 'http://localhost/php/05-API/api-php/post';
    curl_setopt($ch, CURLOPT_URL, $urlcurl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string );
   /*  $info = curl_getinfo($ch);
    print_r($info);  */
    $data = curl_exec($ch);
    curl_close($ch);
 


}
 

/* `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `content` text COLLATE utf8_spanish_ci NOT NULL,
  `user_id` */