<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 01</title>
    <style>
        
        #container{
            width: 80%;
            margin: 0px auto;
            display: block;
            font-family: helvetica;
            padding-top: 20px;
        }
        #gip{
            background-color: #aebfd1;
            padding: 20px;
        }
        #biz{
            background-color: #92be72;
            padding: 20px;
        }
        #naf{
            background-color: #aebfd1;
            padding: 20px;
        }
        #ala{
            background-color: #bead72;
            padding: 20px;
        }
    
    </style>
</head>
<body>

<div id="container">
  
<h1>MOSTRAR PROVINCIAS</h1>

<?php if(empty($_POST)==true){ ?> <!-- if -->

<div id="enviar">

<h2>PASO 1 </h2>
   
    <form name="form1" id="form1" action="09-Provincias.php" method="post">
    
        <label for="provin">Provincia:</label>
       
            <select name="cpro">
                <option value="nada">Elija una provincia</option>
                <option value="Gipuzkoa">Gipuzkoa</option>
                <option value="Bizkaia">Bizkaia</option>
                <option value="Nafarroa">Nafarroa</option>
                <option value="Alaba">Alaba</option>
            </select>
        
        <input type="submit" value="Enviar">
    
    </form>

</div>

<?php } else { ?> <!-- else -->

<div id="enviar">
   
    <form name="form1" id="form1" action="09-Provincias.php" method="post">
    
        <label for="provin">Provincia:</label>
       
            <select name="cpro">
                <option value="nada">Elija una provincia</option>
                <option value="Gipuzkoa">Gipuzkoa</option>
                <option value="Bizkaia">Bizkaia</option>
                <option value="Nafarroa">Nafarroa</option>
                <option value="Alaba">Alaba</option>
            </select>
        
        <input type="submit" value="Enviar">
    
    </form>

</div>

<div id="recibir">
<h2>PROVINCIAS</h2>
<?php
    // RECIBIR DATO
    $provin=$_POST["cpro"];
    //print_r($_POST);
    
   // MOSTRAR PROVINCIAS 
  if($provin=="Gipuzkoa"){ ?>
    <div id="gip">
       
    <h2>Gipuzkoa</h2>
       <img src="gipuzkoa.jpg" title="Gipuzkoa" width=45%;>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores vitae hic ullam possimus magni nulla neque perspiciatis, sint asperiores aut cum quos eius ex, consectetur incidunt explicabo laudantium velit voluptas itaque mollitia obcaecati fugit officiis tenetur. Accusantium necessitatibus, voluptatum reiciendis aliquid nesciunt obcaecati recusandae sint aut deleniti porro dolores, dicta eum magni similique veritatis sunt, perspiciatis molestias labore dolorem beatae eaque eius quisquam cum! Odit sapiente itaque mollitia ea quisquam asperiores rem eligendi earum accusantium, harum consequuntur molestias in necessitatibus dolorem quae assumenda perspiciatis laborum? Accusamus expedita, facere sapiente libero, ea aspernatur sequi quos cum, delectus debitis inventore veniam.</p>
       
    </div>
    <?php }else if($provin=="Bizkaia"){ ?>
    <div id="biz">
       
    <h2>Bizkaia</h2>
       <img src="bizkaia.jpg" title="Bizkaia" width=45%;>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores vitae hic ullam possimus magni nulla neque perspiciatis, sint asperiores aut cum quos eius ex, consectetur incidunt explicabo laudantium velit voluptas itaque mollitia obcaecati fugit officiis tenetur. Accusantium necessitatibus, voluptatum reiciendis aliquid nesciunt obcaecati recusandae sint aut deleniti porro dolores, dicta eum magni similique veritatis sunt, perspiciatis molestias labore dolorem beatae eaque eius quisquam cum! Odit sapiente itaque mollitia ea quisquam asperiores rem eligendi earum accusantium, harum consequuntur molestias in necessitatibus dolorem quae assumenda perspiciatis laborum? Accusamus expedita, facere sapiente libero, ea aspernatur sequi quos cum, delectus debitis inventore veniam.</p>
       
    </div>
    <?php }else if($provin=="Nafarroa"){ ?>
    <div id="naf">
      
    
       
    <h2>Nafarroa</h2>
       <img src="nafarroa.jpg" title="Nafarroa">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores vitae hic ullam possimus magni nulla neque perspiciatis, sint asperiores aut cum quos eius ex, consectetur incidunt explicabo laudantium velit voluptas itaque mollitia obcaecati fugit officiis tenetur. Accusantium necessitatibus, voluptatum reiciendis aliquid nesciunt obcaecati recusandae sint aut deleniti porro dolores, dicta eum magni similique veritatis sunt, perspiciatis molestias labore dolorem beatae eaque eius quisquam cum! Odit sapiente itaque mollitia ea quisquam asperiores rem eligendi earum accusantium, harum consequuntur molestias in necessitatibus dolorem quae assumenda perspiciatis laborum? Accusamus expedita, facere sapiente libero, ea aspernatur sequi quos cum, delectus debitis inventore veniam.</p>
       
    </div>
    <?php }else if($provin=="Alaba"){ ?>
    <div id="ala">
      
    
       
       <h2>Alaba</h2>
       <img src="alaba.jpg" title="Alaba">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolores vitae hic ullam possimus magni nulla neque perspiciatis, sint asperiores aut cum quos eius ex, consectetur incidunt explicabo laudantium velit voluptas itaque mollitia obcaecati fugit officiis tenetur. Accusantium necessitatibus, voluptatum reiciendis aliquid nesciunt obcaecati recusandae sint aut deleniti porro dolores, dicta eum magni similique veritatis sunt, perspiciatis molestias labore dolorem beatae eaque eius quisquam cum! Odit sapiente itaque mollitia ea quisquam asperiores rem eligendi earum accusantium, harum consequuntur molestias in necessitatibus dolorem quae assumenda perspiciatis laborum? Accusamus expedita, facere sapiente libero, ea aspernatur sequi quos cum, delectus debitis inventore veniam.</p>
       
    </div>
    <?php }else if($provin=="nada"){ ?>
    <div id="nada">
        <p>No has seleccionado nada</p>
    </div>
    <?php } ?>
    
</div>

<?php } ?> <!-- terminar IF ELSE -->

</div>
</body>
</html>