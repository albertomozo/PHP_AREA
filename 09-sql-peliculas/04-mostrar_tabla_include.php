<?php
include ("00-conexion.php");
$query = "select * from employees where emp_no>=11000 and emp_no <=11010 and gender = 'F'";
$resultado = mysqli_query($con,$query);
//print_r($resultado);
if(mysqli_num_rows($resultado)!=0){ ?>   
    <h2><?php echo "Nº resultados:" .mysqli_num_rows($resultado) ?></h2>    
    <?php 
    //echo $query;
    echo '<table>';
    ?>
    <tr><th>Nombre</th><th>Apellido</th><th>F. Contratación</th><th>editar</th><th>Borrar</th></tr>
    <?php
    while($fila=mysqli_fetch_array($resultado)){  ?>   
        <tr>
            
                <td ><?php echo $fila["first_name"] ?> </td>
                 <td><?php echo $fila["last_name"] ?></td>
                 <td><?php echo $fila["hire_date"] ?></td>
                 <td>editar</td>
                 <td>borrar</td>
               
    </tr>
    <?php } // FIN WHILE ?> 
    </table>      
<?php  }else{ ?>     
          <article>
                <p class='precio'>Lo siento,  no hay registros</p>
            </article>    
<?php } ?>     
<?php  mysqli_close($con);
?>

