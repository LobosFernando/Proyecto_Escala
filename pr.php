<?php 
session_start();
include 'Conexion.php';
$sql= "INSERT INTO ventas (producto, subtotal, usuario)SELECT producto, subtotal, usuario FROM carrito WHERE usuario= '$_SESSION[usuario]' ";
$res= mysqli_query($conn, $sql);

?>