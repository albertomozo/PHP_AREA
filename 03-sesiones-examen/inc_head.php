
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $CFG_title;?></title>

    <?php 
    $partes = explode('/',$pagina);
    echo $partes[count($partes)-2];
    
    if(in_array($pagina, $CFG_paginasraras)) {?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="<KEY>" crossorigin="anonymous">
    <?php } else { }?>
