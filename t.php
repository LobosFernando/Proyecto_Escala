<?php
session_start();
$_SESSION['nombreProd']= $_POST['nombreP'];
$_SESSION['tipotalle']= $_POST['tipoTalle'];
$_SESSION['color']= $_POST['color'];
$_SESSION['precio']= $_POST['precio'];
$_SESSION['descripcion']= $_POST['descripcion'];
header("Location: cargarProducto4.php")

?>