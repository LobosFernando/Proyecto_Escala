<?php
session_start();
$_SESSION['sexo']= $_POST['sexo'];
header("Location: cargarProducto2.php")

?>