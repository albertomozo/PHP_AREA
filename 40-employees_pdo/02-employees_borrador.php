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
            echo "<tr>";
            echo '<td>' . $fila['emp_no'] . '</td>';
            echo '<td>' . $fila['birth_date'] . '</td>';
            echo '<td><input type="text" name="first_name-'.$emp_no.'" id="first-name-'.$emp_no .'" value="'. $fila['first_name'] . '" onBlur="cambiar('.$emp_no.",'<script>this.value</script>')\"></td>";
            echo '<td>' . $fila['last_name'] . '</td>';
            echo '<td>' . $fila['gender'] . '</td>';
            echo '<td>' . $fila['hire_date'] . '</td>';
            echo "</tr>";
   }
   echo '</tbody></table>';
} catch (PDOException $e) {
   print "¡Error!: " . $e->getMessage() . "<br/>";
   die();
}
?>
