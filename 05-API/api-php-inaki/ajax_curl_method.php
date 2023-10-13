<?php

    /* check request variables */ 

    /* falta el if ( isset() ) en los casos POST y PUT del switch */

    if ( !isset($_REQUEST['methodSel']) ) {

        echo "No method selected";

    } else {

        $url = "http://localhost/php/05-API/api-php-inaki/my_http_request.php";

        switch ( $_REQUEST['methodSel'] ) {

            case 'GET':
                
                // curl parameters
                if ( isset($_GET['id']) && $_GET['id'] == '' )  {  }
                elseif ( isset($_GET['id']) && $_GET['id'] != '') { $url .= "?id=" . $_GET['id']; } 
                else { echo "upsssssssss.... GET method option with troubles "; }      
                
                // curl call
                $ch = curl_init();              

                // options
                curl_setopt($ch, CURLOPT_URL, $url); 
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
                curl_setopt($ch, CURLOPT_HEADER, 0); 
              
                $data = curl_exec($ch); 
              
                curl_close($ch); 

                break;

            case 'POST':
                
                $title = $_GET['title'];
                $status = $_GET['estatus'];
                $content = $_GET['content'];
                $user_id = $_GET['user_id'];  
              
                $fields = array('title' => $title, 'estatus' => $status,'content'=> $content,'user_id' => $user_id);                  
                $fields_string = http_build_query($fields);

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string );
                $data = curl_exec($ch);

                curl_close($ch);
                break;
            
            case 'PUT':
                // get parameters
                $id = $_GET['id'];
                $url .= "?id=" . $_GET['id'];

                $title = $_GET['title'];
                $status = $_GET['estatus'];
                $content = $_GET['content'];
                $user_id = $_GET['user_id'];                  
              
                $fields = array('id' => $id,'title' => $title, 'estatus' => $status,'content'=> $content,'user_id' => $user_id);  
                // $fields = array('title' => 'titulo1888 cfgfdgfd', 'estatus' => 'published','content'=> 'larilo  dfgdfgfdgdf','user_id' => 1);
                $fields_string = http_build_query($fields);
                echo "from ajax_curl_method - fields_string: " . $fields_string;

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, $url);                
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                // curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string );
                $data = curl_exec($ch);

                curl_close($ch);

                break;
                
            case 'DEL':
                // get parameters
                // echo "DELETE METHOD SELECTED";               
                
                // curl parameters
                if ( isset($_GET['id']) && $_GET['id'] == '' )  { echo "upsssssssss.... id value empty !!!"; }
                elseif ( isset($_GET['id']) && $_GET['id'] != '') { $url .= "?id=" . $_GET['id']; } 
                else { echo "upsssssssss.... DELETE method option with troubles "; }

                $ch = curl_init();
                
                // options
                curl_setopt($ch, CURLOPT_URL, $url); 
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
                curl_setopt($ch, CURLOPT_HEADER, 0); 
                
                $data = curl_exec($ch); 
                
                curl_close($ch); 
                break;
                
            default: 
                echo "upsssss..... sorry, but you get CASE DEFAULT OPTION";            
        } 
    }        

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
