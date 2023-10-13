<?php
$servidor="localhost";
$bduser="root";
$bdclave="";
$bdnombre="employees";
$con=mysqli_connect($servidor,$bduser,$bdclave,$bdnombre) ; // id de conexión (link)
if ($con) 
{ echo 'Conexión Ok';}
else {
    echo 'Conexión Error';
}
$query = "select * from employees where emp_no>=11000 and emp_no <=11100 and gender = 'F'";
$resultado = mysqli_query($con,$query);
//print_r($resultado);
if(mysqli_num_rows($resultado)!=0){ ?>   
    <h2><?php echo "Nº resultados:" .mysqli_num_rows($resultado) ?></h2>    
    <?php 
    //echo $query;
    while($fila=mysqli_fetch_array($resultado)){  ?>   
        <article>
            <div>
                <p ><?php echo $fila["first_name"] ?> 
                 <?php echo $fila["last_name"] ?></p>
            </div>      
        </article>
    <?php } // FIN WHILE ?>        
<?php  }else{ ?>     
          <article>
                <p class='precio'>Lo siento,  no hay registros</p>
            </article>    
<?php } ?>     
<?php  mysqli_close($con);
?>

