<?php include("config.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?PHP if (isset($_GET['id'])){ 
        $id = trim(urlencode($_GET['id']));
        $url = "https://api.themoviedb.org/3/movie/$id?api_key=$tmbd_apikey";
        echo "<p>URL : $url </p>";
         $resultado = file_get_contents("$url");
         $data = json_decode($resultado,true);
         print_r ($data);
 
    } else {
        echo '<p>Falta id</p>';
        
    }
?>
</body>
</html>