<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Css/style.css">
    <title>Carrito</title>
</head>

<body>
    <?php

    include 'encabezado.php';
    if (isset($_SESSION['usuario'])) {

        if (isset($_POST["comprar"])) {
            include 'Conexion.php';
            $cod = $_POST["cod"];
            $sql2 = "SELECT * FROM productos WHERE codProducto= $cod";
            $resultado = mysqli_query($conn, $sql2);
            $data = mysqli_fetch_assoc($resultado);
            $codProducto = $data["codProducto"];
            $precio = $data["precio"];
            $cantidad = $_POST["cantidad"];
            $precioTotal = $precio * $cantidad;
            $talle = $_POST["talles"];
            $color = $_POST["color"];
            $nombreDeUsuario = $_SESSION['usuario'];

            include 'Conexion.php';
            $sql = "INSERT INTO ventasproductos (codProducto, talle, cantidad, color, precioTotal, nombreDeUsuario)
        VALUES ('$codProducto', '$talle', '$cantidad', '$color', $precioTotal, $nombreDeUsuario)";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo 'chelo';
            } else echo 'error';
        }
    }
    else {
        header("Location: login.php");
            exit();
    } ?>
    <h1>Carrito</h1>


</body>

</html>