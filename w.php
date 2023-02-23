<?php 
session_start();
include 'Conexion.php';
echo $_SESSION['t'];
        $sql6 = "DELETE FROM carrito WHERE idCarrito = '$_SESSION[t]'";
        $res = mysqli_query($conn, $sql6);
        
header("Location: carrito.php");
