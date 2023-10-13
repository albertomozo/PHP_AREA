<form name="form" action="usuariograbar.php" method="POST">
    <?php 
    if (isset($id)) {?>
        <input type="hidden" name="id" value="<?php echo $id;?>">
    <?php 
    } ?>

    Nombre : <input type="text" name="nombre" value="<?php echo $nombre;?>"><br/>
    Apellidos : <input type="text" name="apellidos" value="<?php echo $apellidos;?>"><br />
    Login : <input type="text" name="login" value="<?php echo $login;?>"><br />
    Clave : <input type="text" name="clave" value="<?php echo $clave;?>"><br />
    Email : <input type="text" name="email" value="<?php echo $email;?>"><br />
    Tipo: 
    <select name="tipo">
        <?php
            foreach ($tipoA as $key => $valor)
            {
                $atributo = '';
                if ($key == $tipo ) { $atributo = 'SELECTED';}
                echo '<option value="' .$key .'" '.$atributo .'> '. $valor .'</option>';
            }
        ?>
    </select><br>
    <input type="hidden" name="accion" value="<?php echo $accion;?>">
    <input type="submit" name="submit" value ="<?php echo $accion; ?>">
</form>