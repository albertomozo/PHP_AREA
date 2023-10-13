<?php include("config.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div { width: 80%; margin-left:50px; padding-left: 10px; border:5px solid gray; }
        p { color:blue; font-size:20px; }
        hr { margin:50px; border: 1px solid gray; border-radius:10px;  }
    </style>
</head>
<body>
    <div>

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

        if (isset($_GET['id'])){ 
            $id = trim(urlencode($_GET['id']));
            $url = "https://api.themoviedb.org/3/movie/$id?api_key=$tmbd_apikey";

            echo "<h3>URL: $url </h3><br>";
            $resultado = file_get_contents("$url");
            $data = json_decode($resultado,true);

            foreach ($data as $jsonK => $jsonV ) {            
                echo "<p>Key '$jsonK'&nbsp;";
                if (gettype($jsonV) == 'string' ) {
                    echo "(type 'string'):&nbsp;&nbsp; $jsonV";
                } elseif ( gettype($jsonV) == 'array' )  {                
                    echo "(type 'array'):<br>";
                    ViewObject($jsonV,'',0);
                } else { 
                    echo "(type '" . gettype($jsonV) . "'):";
                    ViewObject($jsonV,'',0); 
                }
                echo "<hr>";
            } 

            echo "<br>print(\$data)";
            echo "<hr>";
            print_r ($data); 

        } else {
            echo '<p>Falta id</p>';
            
        }

    ?>

    </div>
</body>
</html>