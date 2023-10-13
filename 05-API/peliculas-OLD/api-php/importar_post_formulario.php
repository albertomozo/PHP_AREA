<?php
if ($_POST)
{

    $title =  $_POST['title'];
    $estatus = $_POST['estatus'];
    $content = $_POST['content'];
    $user_id = $_POST['user_id'];
    // CREAMOS EL CURL
    $fields = array('title' =>urlencode($title), 
                    'estatus' => urlencode($estatus),
                    'content'=>urlencode($content),
                    'user_id'=> $user_id);
    $fields_string = http_build_query($fields);
    $ch = curl_init();
    $urlcurl = 'http://localhost/php/05-API/api-php/post';
    curl_setopt($ch, CURLOPT_URL, $urlcurl);
    curl_setopt($ch, CURLOPT_POST, 1);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    $data = curl_exec($ch);
    curl_close($ch);



} else {?> 
<form name="form1" action="" method="POST" >
   Titulo : <br><input type="text" name="title" > <br>
   Status : 
   <br>
   <select name="estatus">
        <option value="publish" selected>publicado</option>
        <option value="draft">borrado</option>
        <option value="blocked">bloqueado</option>
    </select>
    <br>
    Contenido :
    <br>
    <textarea name="content" cols="80"></textarea>
    <br>
    <!-- el user id lo cogeriamos de algún valor de session, cookie, etc, que identifique al usuario -->
    <input type="hidden" name="user_id" value="8" >
    <input type="submit" name="enviar" value="enviar" >



<form>
<?php } 
 

/* `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `content` text COLLATE utf8_spanish_ci NOT NULL,
  `user_id` */
  ?>