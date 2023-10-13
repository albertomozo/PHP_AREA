<?php
// cargar fichero xml
if(!$xml = simplexml_load_file('usuarios.xml')){
    echo "<p>No se ha podido cargar el archivo</p>";
} else {
    echo "<p>El archivo se ha cargado correctamente</p>";
}
echo '<h3>print_r</h3>';

print_r ($xml);
?>