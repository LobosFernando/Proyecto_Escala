<?php
include 'Conexion.php';
session_start();
$_SESSION['prod']= $_POST['productoElegido'];
$_SESSION['prodSE']=str_replace(' ', '', $_SESSION['prod']); 
header("Location: Producto.php");
?>