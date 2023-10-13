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
   
    // en función del día, pondremos un comentario diferente
    
    // w - dias de la semana de 0 a 6, domingo a sabado
    $dia=date("w"); 
    $dia = 8;
    echo "<p> Hoy es $dia </p>";
    
    if($dia == 1){
        
        echo "<p>  lunes </p>"; 
        
    }else if($dia == 2){
        
        echo "<p> martes </p>"; 
        
    }else if($dia == 3){
        echo "<p>  miércoles </p>";  
    }else if($dia == 4){
        echo "<p>  jueves </p>";  
    }else if($dia == 5){
        echo "<p>  viernes </p>";  
    }else if($dia == 6){
        echo "<p>  sabado </p>";  
    }else if($dia == 0){
        echo "<p> domingo </p>";  
    }
    
    
    
    // dias texto
    
    $diasemana=date("w");
    $dianum=date("d");
    $mes=date("m");
    /*
    if($diasemana==1){
        $diasemana="LUNES";
    }else if($diasemana==2){
        $diasemana="MARTES";
    }else if($diasemana==3){
        $diasemana="MIÉRCOLES";
    }else if($diasemana==4){
        $diasemana="JUEVES";
    }else if($diasemana==5){
        $diasemana="VIERNES";
    }else if($diasemana==6){
        $diasemana="SÁBADO";
    }else if($diasemana==0){
        $diasemana="DOMINGO";
    }
    */
    
    
 
    if($mes==01){
        $mes="ENERO";
    }else if($mes==02){
        $mes="FEBRERO";
    }else if($mes==03){
        $mes="MARZO";
    }else if($mes==04){
        $mes="ABRIL";
    }else if($mes==05){
        $mes="MAYO";
    }else if($mes==06){
        $mes="JUNIO";
    }else if($mes==07){
        $mes="JULIO";
    }else if($mes=='08'){ 
        $mes="AGOSTO";
    }else if($mes=='09'){
        $mes="SEPTIEMBRE";
    }else if($mes=='10'){
        $mes="OCTUBRE";
    }else if($mes==11){
        $mes="NOVIEMBRE";
    }else if($mes==12){
        $mes="DICIEMBRE";
    }
    
  
    $dianum=date("d");
    $anio=date("Y");
    
    echo "<p> Hoy es $dianum de $mes del $anio </p>";
    
    
    
    
    
?>

</div>
    
</body>
</html>




