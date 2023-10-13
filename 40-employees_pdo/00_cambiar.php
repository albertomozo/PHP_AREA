<?php
$id = $_GET['id'];
$valor = $_GET['valor'];
include("inc_conexion.php");
$query = "update employees set first_name = ':valor' where id = ':id' ";
$sql = $mdb->prepare($query);
$sql->Bindparam(":id", $id);
$sql->Bindparam(":valor", $valor);
$sql->execute();
?>
<script>
    window.close;
</script>