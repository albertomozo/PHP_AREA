<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if ($_POST){
    var_dump($_POST);
} else {
  ?>

<form action="" method="post" target="_blank">

    <p>
  
      Busca entre nuestros modelos: <input type="search" name="busquedamodelos" list="listamodelos">
  
      <input type="submit" value="Buscar">
  
    </p>
  
  </form>
  
  <datalist id="listamodelos">
  
    <option value="Camaro">
  
    <option value="Corvette">
  
    <option value="Impala">
  
    <option value="Colorado">
  
  </datalist>

<?php } ?>
</body>
</html>