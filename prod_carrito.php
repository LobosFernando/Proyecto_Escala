<?php
//error_reporting(0);

include 'Conexion.php';
session_start();
$nombreDeUsuario = $_SESSION['usuario'];
$nombreProd = $_SESSION['prod'];
$_SESSION['comprar'] = $_POST['comprar']; //guarda en session la accion del boton
$_SESSION['color'] = $_POST['color'];
$_SESSION['t'] = $_POST['eliminar'];
$tallesElegidos = [];
$cantE =  [];
$subtotales =  [];
$sql3 = "SELECT talle FROM detalleProducto WHERE producto= '$_SESSION[prod]' AND cant>0"; 
$resultado = mysqli_query($conn, $sql3);
$cant2=0;
while ($row =mysqli_fetch_assoc($resultado)){
    if ($_POST[$row['talle']]>0){ //por cada vez que llega un talle
        $_SESSION[$row['talle']]= $_POST[$row['talle']]; //nro
        $_SESSION['t'.$row['talle']]= $_POST['t'.$row['talle']];  //letra
        $tallesElegidos[]=$_SESSION['t'.$row['talle']]; //array letras
        $cantE[]=$_SESSION[$row['talle']]; //array nros  
        $cant2++; //cant talles seleccionados
        $subtotales[]= $_SESSION[$row['talle']]*$_SESSION['precio']; //subtotal(cant productos x precio)
    }
}

if (isset($_SESSION['usuario'])) { //si tiene sesion iniciada
    if (isset($_POST['comprar'])) { //solo si viene desde el producto
        for ($i = 0; $i < $cant2; $i++) {
            $sql = "INSERT INTO carrito (producto, talle, color, cantidad, precio, subtotal, usuario)
            VALUES ('$nombreProd', '$tallesElegidos[$i]','$_SESSION[color]', '$cantE[$i]', '$_SESSION[precio]', '$subtotales[$i]', '$_SESSION[usuario]')";
        $result = mysqli_query($conn, $sql); 
        }
        
        header("Location:carrito.php");
    } else {
        header("Location:w.php");
    }
} else {
    header("Location: login.php");
    exit();
}

?>