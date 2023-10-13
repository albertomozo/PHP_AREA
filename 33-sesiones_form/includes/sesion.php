<?php session_start();
if (!isset($_SESSION['IP'])){
    header("location:caducada.php");
    exit;
}
?>