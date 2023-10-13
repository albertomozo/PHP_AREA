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
  
<h1>ENVIAR FORMULARIO</h1>

<form name="form1" id="form1" action="05-Recibir-formulario.php" method="post">
    
        <label for="nombre">Nombre:</label>
        <input type="text" name="cnom">
        <br><br>
        <label for="edad">Edad:</label>
        <input type="number" name="ceda">
        <br><br>
        
        <label for="provin">Provincia:</label>
        <select name="cpro">
            <option value="Alaba">Alaba</option>
            <option>Gipuzkoa</option>
            <option value="Bizkaia">Bizkaia</option>
            <option value="Nafarroa">Nafarroa</option>
        </select>
        
        <br><br>
        
        <label for="idiomas">Idioma:</label>
        <br>
<!-- dado que va a guardar más de un dato, hablamos de array, TIENE QUE IR [] -->
        <input type="checkbox" value="Castellano" name="cidiomas[]"> 
        <label for="Castellano">Castellano</label>
        <br>
        <input type="checkbox" value="Euskara" name="cidiomas[]">
        <label for="Euskara">Euskara</label>
        <br>
        <input type="checkbox" value="Frances" name="cidiomas[]">
        <label for="Frances">Francés</label>
        <br>
        <input type="checkbox" value="Italiano" name="cidiomas[]">
        <label for="Italiano">Italiano</label>
        <br><br>
        
        <label for="casado">Casado:</label>
        <input type="radio" value="Si" name="ccas">
        <label for="si">Si</label>
        <input type="radio" value="No" name="ccas">
        <label for="no">No</label>
        <br><br>
        

    <input type="submit" value="Enviar">
    
</form>

</div>
 
</body>
</html>




