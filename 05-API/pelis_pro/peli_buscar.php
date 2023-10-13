<?php 
    include("config.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        div { width: 80%; margin-left:50px; padding-left: 10px; border:5px solid gray; }
        p { color:blue; font-size:20px; margin:0px; }
        hr { margin:50px; border: 1px solid gray; border-radius:10px;  }
        #sep { width:80%; margin-left:10%; margin-bottom:10px; border: 2px solid gray; border-radius:15px;  }
</style>

<body>

<?PHP 

    function viewObject($obj, $titulo, $nIndent = 0) {
        echo "<div style='width:90%; border:1px solid #cccccc;'>";	
        // echo "<div style='width:280px; display: left; '>";	
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

    if (isset($_POST['search'])){ 

        echo "<div style='height:95vh; overflow-y:scroll;'>";

            echo "<br>\$_POST['search']: " . $_POST['search'];        
            $search = urlencode($_POST['search']);
            echo "<br>urlencode(\$_POST['search']): " . $search;
            echo "<hr id='sep'>";

            $url = "https://api.themoviedb.org/3/search/movie?api_key=$tmbd_apikey&query=$search";
            echo "<br><br><p>URL : $url </p><br><br>";

            $resultado = file_get_contents("$url");
            $resultado1 = json_decode($resultado);        
            //echo "\$resultado1 type: " . gettype($resultado1) . "<br>";

            echo "\$key's in first level of \$resultado1:<br>";
            foreach ($resultado1 as $key => $value) { echo "&nbsp;&nbsp;&nbsp;$key-> " . gettype($value) .  "<br>";}     

            $data = json_decode($resultado,true) ;
            echo "<br>Página = " . $data['page'] . '<br>';
            $peliculas = $data['results'];
            echo '<br>----------------------------------------------------<br>';   
            // print_r ($data);
            foreach ($peliculas as  $valor ) {
                $id = $valor['id'];
                echo "<p>id  : " . $valor['id']. '</p>';
                echo "<p>Titulo : " . $valor['original_title']. '</p>';
                //echo "<p>Adulto : " . $valor['adult']['backdrop_path']['genre_ids']. '---</p>';
                echo "<p>Genero : " . print_r ( $valor['genre_ids']) . '</p>';
                print_r ($valor);          
                echo "<a href=\"peli_ficha.php?id=$id\" target=\"_blank\">Ficha Pelicula</a>";
                echo '<br>----------------------------------------------------';
            }

            // recursive function to loop through a Object
            ViewObject($resultado1,'$resultado',1);

            echo "<hr id='sep'>";

            // $resultado, view in his natural way
            echo "\$resultado: " . $resultado;

        echo "</div>";    

    } else {
    ?>

    <div style='margin:20px; text-align:center; padding: 30px;'>
        <form name="form1" method="POST" action="">
            Busca pelicula: 
            <input type="text" name="search" ><br><br>
            <input type="submit" name="submit" value="enviar">
        </form>
    </div>

    <?php
    }    
?>

</body>
</html>