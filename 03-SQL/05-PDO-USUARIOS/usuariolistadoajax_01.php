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
?>
<h1>Ejemplo CRUD</h1>
<?php
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
       echo '<td>' . $fila['id'] . '</td><td>';
       echo '<input type="text" value="'.  $fila['nombre'] .'" id="'.$fila['id'] .'" class="snombres">';
       echo '</td><td>';
       echo '<input type="text"  class="sapellidos" value="' .$fila['apellidos'] .'" id ="apellidos-'.$fila['id'].'"> </td><td>' .$fila['login'] . '</td>';
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
<script>
    document.querySelectorAll('.snombres').forEach(item => {
        item.addEventListener('blur', event => {
         //handle click
         //alert("item : " + item.id + ' - '  + item.value);
         console.log("item : " + item.id + ' - '  + item.value);
         // preparar ajax
         var objXMLHttpRequest = new XMLHttpRequest();
        objXMLHttpRequest.onreadystatechange = function() {
        if(objXMLHttpRequest.readyState === 4) {
            if(objXMLHttpRequest.status === 200) {
               // alert(objXMLHttpRequest.responseText);
               console.log(objXMLHttpRequest.responseText);
                document.getElementById(item.id).style.background = 'green';
                document.getElementById(item.id).style.color = 'white';
            } else {
                alert('Error Code: ' +  objXMLHttpRequest.status);
                alert('Error Message: ' + objXMLHttpRequest.statusText);
            }
        }
        }
        //pagina = 'ajax/request_ajax_data.php?id='+itemid+'&valor='+item.value;
        pagina = 'ajax/update_usuarios_nombre_00.php?id='+item.id+'&valor='+item.value;
        objXMLHttpRequest.open('GET', pagina);
        objXMLHttpRequest.send();

    })
    })

  
    document.querySelectorAll('.sapellidos').forEach(item => {
        item.addEventListener('blur', event => {

            /*  comienzo */
            var url = 'ajax/update_usuarios_campos.php';
            console.log('id : ' + item.id);
            partes = item.id.split('-');
            pid = partes[1];
            pcampo = partes[0];
            console.log('p id ' + pid + 'p apellidos ' + pcampo)

            /*       var data =  {id: pid,
                        valor : item.value,
                        campo : 'apellidos'
                        }; */
            const data = new FormData();
            data.append('id', pid);
            data.append('campo', pcampo);
            data.append('valor', item.value);

            fetch(url, {
                method: 'POST', 
                body: data,
              
            }).then(res => res.text()
                
            )
            .catch(error => console.error('Error:', error))
            .then(response => console.log('Success:', response)
            );





            /* fin */
       

    })
    })
 

</script>