<?php
session_start();
$_SESSION['idVenta'] = $_POST['ver'];
header("Location:detalle_ventas.php");
?>