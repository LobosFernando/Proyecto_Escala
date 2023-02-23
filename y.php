<?php
include 'Conexion.php';
session_start();
$_SESSION['prod']= $_POST['productoElegido'];
header("Location: RemeraHola.php");
?>