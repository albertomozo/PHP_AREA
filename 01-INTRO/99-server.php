<?php
    var_dump($_SERVER);
    echo '<hr>';    
    print_r($_SERVER);
    echo '<hr>'; 
    foreach ($_SERVER as $key => $value) {
        echo $key. ': '. $value. '<br>';
    }
    

?>