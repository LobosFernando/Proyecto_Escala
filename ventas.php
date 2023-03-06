<?php 
session_start();
include 'Conexion.php'; /////////////////SI SE EJECUTA LA VENTA
$sql="INSERT INTO ventas (fecha, total, usuario) VALUES (NOW(),'$_SESSION[total]','$_SESSION[usuario]')"; //INSERTA VENTA
$res= mysqli_query($conn, $sql);
$obteneridventa= "SELECT `AUTO_INCREMENT` 
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'bdescala'
AND   TABLE_NAME   = 'ventas';";
$res2=mysqli_query($conn, $obteneridventa); //OBTIENE VENTA ACTUAL
while ($row=mysqli_fetch_row($res2)){
    $idActual= $row[0];
}
$idActual= $idActual-1;
//COPIA A DETALLE VENTAS EL CONTENIDO DE CARRITO
$sql3="INSERT INTO detalleventas (producto, talle, color, cantidad, precio, subtotal, usuario)
SELECT producto, talle, color, cantidad, precio, subtotal, usuario FROM carrito
WHERE usuario='$_SESSION[usuario]'";
$res3= mysqli_query($conn, $sql3);
//LE ASIGNA EL IDVENTA
$sql4="UPDATE detalleventas SET idventa= '$idActual' WHERE idventa='NULL' AND usuario='$_SESSION[usuario]'";
$res4= mysqli_query($conn, $sql4);
//ELIMINA CONTENIDO CARRITO
$sql5="DELETE FROM carrito WHERE usuario='$_SESSION[usuario]'";
$res5= mysqli_query($conn, $sql5);

//RESTAR STOCK COMPRADO


header("Location: carrito.php");
?>