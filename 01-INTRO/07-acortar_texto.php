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
  
<h1></h1>


<?php 
    
    $txt="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi officiis neque, nobis obcaecati cum harum est incidunt laudantium fugit nam sunt ipsum sapiente laboriosam delectus velit sint ex, voluptatibus illo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur temporibus molestiae dolorem illum sapiente, nemo iure vitae sit voluptates vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eveniet voluptatem, totam nisi ipsam dolore impedit, modi nulla magnam atque placeat saepe ratione quas! Voluptatum facere omnis, vero aspernatur quas incidunt ipsa sed praesentium. Provident blanditiis odit hic, officiis esse rem vel eveniet. Magni nam et sapiente eum temporibus alias aliquam quas, corporis, inventore. Rerum recusandae consectetur necessitatibus velit, mollitia tempore. Suscipit sint ullam, totam doloremque numquam nisi porro inventore modi distinctio quam sed, esse corporis impedit consequuntur maiores eveniet. Distinctio, necessitatibus cupiditate delectus, molestias, quo, ipsa similique sed ab esse quibusdam illum dolore! Distinctio nobis harum laboriosam at nulla, rem eveniet? Nulla in fuga deleniti aspernatur consectetur. Veniam fugit, nemo laborum, officia magnam nulla assumenda delectus sequi facere asperiores voluptas laudantium esse quasi magni ipsam repellendus nisi quod rerum facilis in ea. Magnam numquam reiciendis minus rem aliquam, cumque, doloremque illo dolor quas dolores amet laboriosam doloribus perferendis maxime ab ea! Quos id itaque voluptates labore nostrum ducimus fugiat cumque expedita, dolores blanditiis accusantium saepe soluta quia modi similique ratione architecto laudantium incidunt excepturi dolor sequi consectetur qui, magnam eaque! Ea aperiam dignissimos, incidunt fugiat itaque repellat placeat quisquam id impedit eos fuga enim quis ullam repellendus rem. Consequatur.";
    
    
    
    $hasta=stripos($txt, "."); // enseña el texto hasta el primer punto que encuentre
    $t=mb_substr($txt,0,$hasta)."...";
    
    echo $t;

    $t2 = mb_substr($txt,$hasta+1);
    echo '<hr>';
     echo '<br>';
    echo $t2;

    
    
?>

</div>
    
</body>
</html>




