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

<form name="form1" id="form1" action="04-Recibir-tabla-multiplicar.php" method="post">
    
    <label for="number">Selecciona un número:</label>
       
        <select name="cnum">
            <option>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6" selected>6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            
        </select>
   
    <input type="submit" value="Enviar">
    
</form>
 
</div>

 
</body>
</html>




