<script>
    function cambiar(id,valor) {
        alert("hola " + valor);
        v1=window.open('00_cambiar.php?id='+id+'&valor='+valor, '_blank')
    }
</script>


<?php 

try {
   include("inc_conexion.php");
   $query = 'SELECT * from employees  order by emp_no DESC limit 20';
   $mbd->query($query);
   ?>
   <table>
   <tr>
   <th>Número</th>
   <th>Nacimiento</th>
   <th>Nombre</th>
   <th>Apellido</th>
   <th>Género</th>
   <th>Contratación</th>
</tr>

</thead>
<tbody>
<?php

   foreach($mbd->query($query) as $fila)
   {
           $emp_no = $fila['emp_no'];
            echo "<form method='post' action='03-employees_modificar.php' name='form-".$emp_no."'>";
            echo "<tr>";
            
            echo '<td><input type="hidden" name="id" id="id" value="'. $fila['emp_no'] . '" >'.$fila['emp_no'].'</td>';

            echo '<td>' . $fila['birth_date'] . '</td>';
            echo '<td><input type="text" name="first_name" id="first-name" value="'. $fila['first_name'] . '"></td>';
            echo '<td><input type="text" name="last_name" id="last-name" value="'. $fila['last_name'] . '"></td>';


                        echo '<td>' . $fila['gender'] . '</td>';
            echo '<td>' . $fila['hire_date'] . '</td>';
            echo '<td><input type="submit" value="Modificar" name="submit"></td>';
            echo "</tr>";
            echo '</form>';
   }
   echo '</tbody></table>';
} catch (PDOException $e) {
   print "¡Error!: " . $e->getMessage() . "<br/>";
   die();
}
?>
