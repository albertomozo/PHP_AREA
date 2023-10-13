
<?php 
$time = time() ;
$nombreImagen = "10json-48.png";
$imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doc '. date("d/m/Y H:i:s",$time).'</title>
</head>
<body>
<h1>Documento : '.date("d/m/Y H:i:s",$time).'</h1>    

<div><img src="'. $imagenBase64 .'" /></div>
</body>
</html>';