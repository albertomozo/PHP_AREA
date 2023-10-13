<?php
/* chat gpt */
function getValuesRecursively($data) {
    $values = array();

    if (is_array($data) || is_object($data)) {
        echo '<ul>';
        foreach ($data as $key => $value) {
            
            if (is_array($value) || is_object($value)) {
                echo "<li>$key </li>";
                // Recursivamente obtener los valores si es un array u objeto

                getValuesRecursively($value);
                //echo '<hr>';
            } else {
                // Agregar el valor si no es un array u objeto
                echo "<li> $key =  $value </li>";
                
            }
        }
        echo '</ul>';
    }

    
}

function getRemoteContentWithCurl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Amozo/1.0');

    // Opcional: si necesitas agregar cabeceras a tu solicitud, puedes hacerlo aquí.
    // curl_setopt($ch, CURLOPT_HTTPHEADER, [
    //     'Authorization: Bearer your_access_token',
    //     'Other-Header: value',
    // ]);

    $response = curl_exec($ch);
    
    // Verificar si ocurrió algún error
    if (curl_errno($ch)) {
        // Aquí puedes manejar el error según tus necesidades
        $error = curl_error($ch);
        curl_close($ch);
        return "Error: $error";
    }

    curl_close($ch);
    return $response;
}


if ($_POST){
    $url =($_POST['search']);
    echo "<h3> URL :  $url </H3>";
    $content = getRemoteContentWithCurl($url);
    //echo $content;
    $data = json_decode($content, true);

    // Obtener todos los valores en cualquier nivel de anidamiento
    $result = getValuesRecursively($data);

   
 
} else {
    ?>

        <form name="form1" action="" method="POST">
            <input type="text" name="search" id="search" placeholder="introduzca url de api" style="width: 80%;">
            <input type="submit" name="submit" value="buscar">
        </form>
    
    <?php
}
