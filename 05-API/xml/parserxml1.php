<?php
// cargar fichero xml
if(!$xml = simplexml_load_file('usuarios.xml')){
    echo "<p>No se ha podido cargar el archivo</p>";
    exit;
} else {
    echo "<p>El archivo se ha cargado correctamente</p>";
}
echo '<h3>Objeto $xml->usuario[0]  </h3> ';
print_r ($xml->usuario[0]);
echo '<h3>Objeto $xml->usuario[0]->nombre  </h3> ';
echo $xml->usuario[0]->nombre;
echo '<h3>Objetom $xml->usuario[0]->contacto </h3> ';
print_r ($xml->usuario[0]->contacto);
echo '<h3>Objeto $xml->usuario[0]->contacto->email </h3> ';
print_r ($xml->usuario[0]->contacto->email);

echo '<h3>Recorrer Todo el objeto</h3>';
foreach ($xml as $key)
{
    echo '<h4>$xml->usuario['. $key .'] </h4>';
   // echo "<p>$key = $valor </p>";
    foreach ($key as $key1 => $valor1){
      
        if ($key1 =='contacto')  
        {
              echo "<p>$key1</p>";
              foreach ($valor1 as $key2=>$valor2)
            {
                echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;       $key2 = $valor2 </p>";
            }
        }  else {
            echo "<p>$key1 = $valor1 </p>";
        }
        


    }

}


?>