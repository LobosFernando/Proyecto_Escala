<?php
error_reporting(0);

include 'Conexion.php';
session_start();
$nombreDeUsuario = $_SESSION['usuario'];
$nombreProd = $_SESSION['prod'];
$_SESSION['comprar'] = $_POST['comprar']; //guarda en session la accion del boton
$_SESSION['color'] = $_POST['color'];
$cantTalles = $_POST['cantTalles'];
$_SESSION['t'] = $_POST['eliminar'];

$sql2 = "SELECT * FROM carrito WHERE usuario='$nombreDeUsuario' "; //todos los productos en carrito del usuario
$res2 = mysqli_query($conn, $sql2);
$total = 0;


$suma = 0;
for ($i = 0; $i < $cantTalles; $i++) {
    $suma = $suma +  (int)($_POST['talles' . $i]); //suma cantidad de talles seleciionados
    echo $_POST['talles' . $i];
}
$_SESSION['suma'] = $suma;
$precio = $_SESSION['precio'] * $_SESSION['suma']; //calcula subtotal
//guarda cantidad en sesion


if (isset($_SESSION['usuario'])) { //si tiene sesion iniciada
    if (isset($_POST['comprar'])) { //solo si viene desde el producto

        $sql = "INSERT INTO carrito (producto, color, cantidad, precio, subtotal, usuario)
            VALUES ('$nombreProd', '$_SESSION[color]', '$_SESSION[suma]', '$_SESSION[precio]', '$precio', '$_SESSION[usuario]')";
        $result = mysqli_query($conn, $sql);
        header("Location:carrito.php");
    } else {
        header("Location:w.php");
    }
} else {
    header("Location: login.php");
    exit();
}

