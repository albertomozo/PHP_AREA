<script>
    function confirmar ( mensaje ) {
        return confirm( mensaje );
    }
</script>
<?php 
if (isset($_GET['excel']))
{
    $filename = 'Usuario_' . date("Ymdhis") . '.xls';
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
 }

if (isset($_GET['pdf']))
{
    $filename = 'Usuario_' . date("Ymdhis") . '.pdf';
    header("Content-Type: application/pdf");
    header("Content-Disposition: attachment; filename=\"$filename\"");
 }
?>
<h1>Ejemplo CRUD</h1>
<?php
echo '<p>Ejemplo</p>';
exit;
include('usuariosconfig.php');

try {
    include("usuarioconexion.php");
    $query = 'SELECT * from usuarios' ;
    echo '<table>';
    echo '<tr><th>Id</th><th>Nombre</th><th>Apellidos</th><th>Login</th>';
    //echo '<th>Password</th>'
    echo '<th>Email</th><th>Tipo</th><th>Editar</th><th>Borrar</th></tr>';
    foreach($mbd->query($query) as $fila) {
        $tipot='';
       if (isset($tipoA[$fila['tipo']])){$tipot=$tipoA[$fila['tipo']];}
       echo '<tr>';
       echo '<td>' . $fila['id'] . '</td><td>' .  $fila['nombre'] . '</td><td>' .$fila['apellidos'] . '</td><td>' .$fila['login'] . '</td>';
       //echo '<td>' . $fila['password'] . '</td>';
       echo '<td>' . $fila['email'] . '</td><td>' . $tipot.'</td>';
       echo '<td><a href="usuarioeditar.php?id='.$fila['id'].'">Editar</a></td>';
       echo '<td><a href="usuarioeliminar.php?id='.$fila['id'].'" onclick="return confirmar(\'¿Está seguro que desea eliminar el registro?\')">Eliminar</a></td>';

       echo '</tr>';
       
      //print_r ($fila);
    }

    $mbd = null; // cerrar conexion
    echo '<table>';
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
<a href="usuarioinsertar.php">insertar</a><br>
<a href="usuariolistado.php?excel=s">generar Excel</a>