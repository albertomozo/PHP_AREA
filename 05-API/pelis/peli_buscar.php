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
<?PHP if (isset($_POST['search'])){ 
        $search = urlencode($_POST['search']);
        

        $url = "https://api.themoviedb.org/3/search/movie?api_key=$tmbd_apikey&query=$search";
        echo "<p>URL : $url </p>";
         $resultado = file_get_contents("$url");
        // echo $resultado;
        $data = json_decode($resultado,true) ;
        echo "<br>Página = " . $data['page'] . '<br>';
        $peliculas = $data['results'];
         echo '<hr>';   
       // print_r ($data);
        foreach ($peliculas as  $valor )
        {
            $id = $valor['id'];
            echo "<p>id  : " . $valor['id']. '</p>';
            echo "<p>Titulo : " . $valor['original_title']. '</p>';
            //echo "<p>Adulto : " . $valor['adult']['backdrop_path']['genre_ids']. '---</p>';
            echo "<p>Genero : " . print_r ( $valor['genre_ids']) . '</p>';
            print_r ($valor);
          
            echo "<a href=\"peli_ficha.php?id=$id\" target=\"_blank\">Ficha Pelicula</a>";
            echo '<hr>';
        }

    

     


    } else {
        ?>
        <form name="form1" method="POST" action="">
            Busca pelicula: 
            <input type="text" name="search" ><br>
            <input type="submit" name="submit" value="enviar">

        </form>
    <?php
    }
?>
</body>
</html>