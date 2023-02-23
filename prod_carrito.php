<?php
//error_reporting(0);

include 'Conexion.php';
session_start();
$nombreDeUsuario = $_SESSION['usuario'];
$nombreProd= $_SESSION['prod'];
$_SESSION['comprar'] = $_POST['comprar']; //guarda en session la accion del boton
$_SESSION['color'] = $_POST['color'];


$sql2 = "SELECT * FROM carrito WHERE usuario='$nombreDeUsuario' "; //todos los productos en carrito del usuario
        $res2 = mysqli_query($conn, $sql2);
        $total = 0;
        while ($mostrar = mysqli_fetch_assoc($res2)) { 
            // $_SESSION['t'] = $_POST['eliminar' . $mostrar['idCarrito']];
            // $idCarrito = $_SESSION['t']; 
 //Guarda en session t lo que trae del boton eliuminar de cada item carrito(eliminar68=68)
$cantTalles = $_POST['cantTalles'];
        }

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
    }
    else {$sql3 = "SELECT * FROM carrito WHERE usuario='$nombreDeUsuario' "; //todos los productos en carrito del usuario
        $res3 = mysqli_query($conn, $sql3);
    while ($mostrar3 = mysqli_fetch_assoc($res3)) {
        echo $_POST['eliminar'.$mostrar3['idCarrito']];
    if (isset($_POST['eliminar'.$mostrar3['idCarrito']])) {
         $idCarrito=$_POST['eliminar'.$mostrar3['idCarrito']];
            $sql = "DELETE FROM carrito WHERE idCarrito = '$idCarrito'";
            $res = mysqli_query($conn, $sql);
            echo $idCarrito;
        
    }
}
}
} else {
    header("Location: login.php");
    exit();
}

