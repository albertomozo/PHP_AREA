<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 16</title>
    <style>
        
        #container{
            padding: 80px;
            font-family: helvetica;
        }
    
    </style>
</head>

<body>

<div id="container">
  
<h1>ARRAY FOREACH $_SERVER</h1>

<p></p>



<ul>
<?php 
    

    
   echo "<ul>";
   echo "<h2>SERVER</h2>";
        foreach($_SERVER as $key => $valor){
            echo "<li>\$_SERVER['$key'] = $valor</li>";
        }  
    echo "</ul>";  
    echo "<ul>";
    echo "<h2>GET</H2>";
    foreach($_GET as $key => $valor){
        echo "<li>\$_GET['$key'] = $valor</li>";
    }  
echo "</ul>"; 
echo "<ul>";
echo "<h2>COOKIE</H2>";
foreach($_COOKIE as $key => $valor){
    echo "<li>\$_COOKIE['$key'] = $valor</li>";
}  
echo "<h2>REQUEST</H2>";
foreach($_REQUEST as $key => $valor){
    echo "<li>\$_REQUEST['$key'] = $valor</li>";
}  
echo "</ul>";   
    echo "<p> el document-root es ". $_SERVER['DOCUMENT_ROOT']  ."</p>";
    echo '<p>El server name es '. $_SERVER['SERVER_NAME'] . '</p>';
?>
</ul>


</div>
    
</body>
</html>




