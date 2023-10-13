<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 01</title>
    <style>
        
        #container{
            padding: 80px;
            font-family: helvetica;
        }
    
    </style>
</head>

<body>

<div id="container">
  
<h1>IF-ELSE</h1>



<?php 
    
// recibir dato  
 $provincia=$_POST["cpro"];   
 
// mostrar datos
if($provincia == "Gipuzkoa"){ ?>
    
       <SECTION></SECTION>
       
    <?php } else if($provincia == "Alava"){ ?>
        
         <SECTION></SECTION>
         
        <?php } else if($provincia == "Bizkaia"){ ?>
           
            <SECTION></SECTION>
            
            <?php } else if($provincia == "Navarra"){ ?>
               
                <SECTION></SECTION>
                
            <?php }  ?>
    


</div>
    
</body>
</html>




