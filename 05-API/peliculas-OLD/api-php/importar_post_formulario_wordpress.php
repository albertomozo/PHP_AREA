<?php
if ($_POST)
{

    $title =  $_POST['title'];
    $status = $_POST['status'];
    $content = $_POST['content'];
    $user_id = $_POST['user_id'];
    // CREAMOS EL CURL
    $fields = array('title' =>urlencode($title), 
                    'status' => urlencode($status),
                    'content'=> urlencode($content),
                    'author'=> $user_id
                    );

           /*          curl --location --request POST 'http://localhost/wordpress/wp-json/wp/v2/posts' \
                    --header 'Authorization: Basic YWxiZXJ0bzphbGJlcnRv' \
                    --header 'Content-Type: application/x-www-form-urlencoded' \
                    --data-urlencode 'title=Mi ter' \
                    --data-urlencode 'status=draft' \
                    --data-urlencode 'content=dsasdsadas' */

    $headers = array ('Authorization : Basic YWxiZXJ0bzphbGJlcnRv',
                     'Content-Type: application/json' 
                  

    );
    print_r ($headers);
    

    $fields_string = http_build_query($fields);
    print_r ($fields_string);
    $ch = curl_init();
    $urlcurl = 'http://localhost/wordpress/wp-json/wp/v2/posts';
    curl_setopt($ch, CURLOPT_URL, $urlcurl);
    //curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string );
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    $data = curl_exec($ch);
    print_r ($data);
    $info = curl_getinfo($ch);
    print_r($info);
    curl_close($ch);



} else {?> 
<form name="form1" action="" method="POST" >
   Titulo : <br><input type="text" name="title" > <br>
   Status : 
   <br>
   <select name="status">
        <option value="publish" selected>publicado</option>
        <option value="draft">borrado</option>
        <option value="pending">pending</option>
    </select>
    <br>
    Contenido :
    <br>
    <textarea name="content" cols="80"></textarea>
    <br>
    <!-- el user id lo cogeriamos de algún valor de session, cookie, etc, que identifique al usuario -->
    <input type="hidden" name="user_id" value="2" >
    <input type="submit" name="enviar" value="enviar" >



<form>
<?php } 
 

/* `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `content` text COLLATE utf8_spanish_ci NOT NULL,
  `user_id` */
  ?>