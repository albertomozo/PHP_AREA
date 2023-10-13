<?php
    $fields = array('title' => 'titulo1888 cfgfdgfd', 'estatus' => 'published','content'=> 'larilo  dfgdfgfdgdf','user_id' => 1);
    $fields_string = http_build_query($fields);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost/php/05-API/api-php/post.php");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string );
    $data = curl_exec($ch);
    echo $data;
    curl_close($ch);
?>
