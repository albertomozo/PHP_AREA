<!-- <script>
    function cambiar(id,valor) {
        alert("hola " + valor);
        v1=window.open('00_cambiar.php?id='+id+'&valor='+valor, '_blank')
    }
</script> -->


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
            
            echo '<td><input type="hidden" name="id" id="id" value="'. $fila['emp_no'] . '" >'.$fila['emp_no'].'</td>';

            echo '<td>' . $fila['birth_date'] . '</td>';
            echo '<td><input type="text" name="first_name" id="first-name" value="'. $fila['first_name'] .'" data-id = "'.$emp_no.'"></td>';
            echo '<td><input type="text" name="last_name" id="last-name" value="'. $fila['last_name'] . '" data-id = "'.$emp_no.'"></td>';


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
<script>

        // Obtener todos los elementos input del documento
        const inputs = document.getElementsByTagName('input');
        /* const input = document.querySelectorAll('input'); */

        // Función para manejar el evento blur en cada input
        function handleBlur(event) {
            const inputValue = event.target.value;
            const campo = event.target.name;
            const id = event.target.dataset.id;
            console.log(event); 
            console.log('Valor name:',event.target.name);
            console.log('Valor dataset.id:',event.target.dataset.id);
            console.log('Valor del input:', inputValue);
            // Llamar aquí a tu función cambiar con el valor inputValue
            // cambiar(value);
            const url = '04-employees_modificar.php?id='+id+'&campo='+campo+'&value='+inputValue; 

            fetch(url)
                .then(response => response.text())
                .then(repos => { 
                    console.log(repos);
                    
                })
                .catch(err => console.log(err))


        }

        // Agregar el listener para el evento blur a cada input
        for (let i = 0; i < inputs.length; i++) {
            inputs[i].addEventListener('blur', handleBlur);
        }
  
</script>
