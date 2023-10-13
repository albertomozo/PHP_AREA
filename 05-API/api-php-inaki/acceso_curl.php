<?php

    /* Crear formulario para escoger request method */ 

    $fields = array('title' => 'titulo1888 cfgfdgfd', 'estatus' => 'published','content'=> 'larilo  dfgdfgfdgdf','user_id' => 1);
    $fields_string = http_build_query($fields);
    $ch = curl_init();
    //areafor
    curl_setopt($ch, CURLOPT_URL, "http://localhost/curso-backend-areafor-server/PHP/z-PHP-Curso/08-api-php/post-teacher.php");
    // teacher -> curl_setopt($ch, CURLOPT_URL, "http://localhost/php/05-API/api-php/post.php");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string );
    $data = curl_exec($ch);

    // first view: as json 
    echo "<br><b>------------------------------------------</b>";
    echo "<h3 style='color:#b30000;'>Writing from acceso_curl.php</h3>";
    echo "<div style='margin-left:50px;'>";
    echo "\$data ==> " . $data . "<br><br>";

    // second View: pass to array format and deploy with ViewObject function  
    ViewObject($data,'$data',0);        
    echo "</div>"; 

    curl_close($ch);

    function ViewObject($obj, $titulo, $nIndent=0) {
        echo "<div style='width:90%;  font-size:11px; color: blue; border:1px solid #cccccc;'>";		
        /* For analyze type of object */
            echo "\$obj -> " . gettype($obj) . "<br><br>";
            echo "<pre style='font-size:10px; width:98%; overflow:scroll;'>var_dump of \$obj-> ";
            var_dump($obj);
            echo "</pre>";
        
            if ( isset($obj) && ( gettype( $obj ) == 'object' || gettype( $obj ) == 'array' )  ) {
                if ( empty($titulo) ) {
                    echo "" . str_repeat("\t",$nIndent) . "<ol>\n";
                } else {
                    echo "" . str_repeat("\t",$nIndent) . "<b>$titulo</b><br><br>\n";
                    echo "" . str_repeat("\t",$nIndent) . "<ol>\n";
                }
                foreach ($obj as $key => $value) {
                    if ( gettype( $value ) == 'object' || gettype( $value ) == 'array' ) {
                        echo "" . str_repeat("\t",$nIndent + 1) . "<li>[" . $key . "] => " . gettype($value) . "\n";
                        viewObject($value, "", $nIndent +1);
                    } else {
                        echo "" . str_repeat("\t",$nIndent + 1) . "<li>[" . $key . "] => " . $value . "\n";
                    } 
                }
                echo "</ol>\n";
            } elseif ( gettype( $obj ) == 'string' || gettype( $obj ) == 'integer' || gettype( $obj ) == 'double' || gettype( $obj ) == 'boolean' || gettype( $obj ) == null )  {
                echo "" . str_repeat("\t",$nIndent + 1) . "value => " . $obj . "\n";
            } else {
                echo "upsssssss ....<b>object: '$obj', type:" . gettype($obj) . "</b> not included in type list<br>\n";
            }
        echo "</div>";	
      }
      

?>
