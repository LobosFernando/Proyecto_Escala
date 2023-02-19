<?php
session_start();
$_SESSION['cat']= $_POST['categoria'];
header("Location: cargarProducto3.php")

?>