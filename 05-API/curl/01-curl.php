<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio CURL</title>
</head>

<body>
  
<h1>curl GET</h1>

<?php 
/* PETICION GET */
  $url = 'http://localhost/wordpress-6.0/wordpress/wp-json/wp/v2/posts';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
  curl_setopt($ch, CURLOPT_HEADER, 0); 
  $data = curl_exec($ch); 
  curl_close($ch); 
  var_dump($data); 
  echo '<hr>';
  $dataarray = json_decode($data);
  var_dump($dataarray);


?>  

 

    
 
</body>
</html>