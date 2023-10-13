<?php session_start();
//session_destroy();
unset($_SESSION["validado"]);
header("Location:18-form-SESSION.php");
?>
