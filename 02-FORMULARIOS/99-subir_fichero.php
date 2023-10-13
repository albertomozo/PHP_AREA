<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    if ($_POST){ // $_SERVER['REQUEST_METHOD']=='POST'
        foreach ($_REQUEST as $key => $valor)
        {
            echo "<p>$key : $valor</p>";
        }
        ECHO '<HR>';
        foreach ($_FILES['fichero_usuario'] as $key => $valor)
        {
            echo "<p>$key : $valor</p>";
        }
        echo '<HR>';
        echo "<p>Nombre Archivo : " . $_FILES['fichero_usuario']['name']. '</p>';

        
        $dir_subida = $_SERVER['DOCUMENT_ROOT'].'/alberto/02-FORMULARIOS/upload/';


        $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

        echo '<pre>';
        if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
            echo "El fichero es válido y se subió con éxito.\n";
        } else {
            echo "¡Posible ataque de subida de ficheros!\n";
        }

        echo 'Más información de depuración:';
        print_r($_FILES);

        print "</pre>";



    } else {
    ?>

        <form enctype="multipart/form-data" action="" method="POST">
        <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
        Enviar este fichero: <input name="fichero_usuario" type="file" />
        <input type="submit" value="Enviar fichero" />
    <?php } ?>
</form>
</body>
</html>









