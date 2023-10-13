<?php 
// pelicula id
$peliculaid = 18;
include("conexion.php");
$query = "select * from Peliculas where id = $peliculaid";
$resultado = mysqli_query($mysqli,$query);
while ($fila = mysqli_fetch_assoc($resultado))   
 {
       echo '<p>Titulo' . $fila['titulo_original'] .'</p>';
    
       echo '<p>iD a apI : ' . $fila['imdbID'] .'</p>';
      
 }
 // OBTENEMOS LOS GENEROS DE LA PELICULA 
 $query = "select * from Generos_Peliculas where peliculas_id = $peliculaid";
$resultado = mysqli_query($mysqli,$query);
while ($fila = mysqli_fetch_assoc($resultado))     
 {
    $chequeado[$fila['genero_id']] = 'CHECKED';
      
 }


if (isset($_POST['enviar']))
{
    // MOSTRAMOS TODOS LOS CAMPOS POST . explicativo. 
    //
       foreach($_POST as $key => $valor){
        if (is_array($valor))
        {
            foreach ($valor as $key1 => $valor1)
            {
                echo "<p>$key1 = $valor1</p>";
            }

        } else{
            echo "<p>$key = $valor" ;
        }
    }
    // BORRAMOS TODOS LOS GENEROS ASOCIADOS A UNA PELI
    $query = "DELETE from Generos_Peliculas WHERE peliculas_id=$peliculaid";
    $resultado = mysqli_query($mysqli,$query);
    // INSERTAMOS TODOS LOS GENEROS MARCADOS
    foreach ($_POST['genero'] as $key => $valor){
        $query = "INSERT INTO Generos_Peliculas (peliculas_id,genero_id) values ($peliculaid,$valor)";
        $resultado = mysqli_query($mysqli,$query);
    }


} else {
    //  crear checkbox a partir de una tabla generos
    $query = "select * from Generos";
    $resultado = mysqli_query($mysqli,$query);
    //echo $resultado;
    ?>
    <form name="form1" action="" method="POST">
    <?php
    //foreach ($fila = mysqli_fetch_assoc($resultado))
    while ($fila = mysqli_fetch_assoc($resultado))   
    {
        $generoid=$fila['id'];
        if (isset($chequeado[$generoid]))
        {$checheadotext='CHECKED';
        } else {
            $checheadotext='';
        }

        $generoid = $fila['id'];
        $genero = $fila['nombre'];
        echo '<label><input type="checkbox" name="genero[]" value="'.$generoid.'"' . $checheadotext .'>'.$genero.'</label>';
        
    }
    echo '<input type="submit" name="enviar" value ="enviar">';
    echo '</form>'; 
}
?>